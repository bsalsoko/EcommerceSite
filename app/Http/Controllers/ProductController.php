<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Session;



class ProductController extends Controller
{
    //
    function index()
    {
        //$data= Product::all();
        //return view('product',['products'=>$data]);
        $data= Product::all();
        $cat = Product::select('category')->distinct()->get();
        return view('/product',['products'=>$data, 'category'=>$cat]);
        
    }
    
    function detail($id)
    {
        $data= Product::find($id);
        $cat = Product::select('category')->distinct()->get();

        return view('detail',['product'=>$data,'category'=>$cat]);
    }
    function search(Request $req)
    {
        $data= Product:: where('name', 'like', '%'.$req->input('query').'%')->get();
        return view('search',['products'=>$data]);
    }

function addToCart(Request $req)
    {
     if($req->session()->has('user'))
    {
        $validator = Validator::make($req->all(), [
            'product_quantity' => 'required|integer|min:1',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $product = Product::find($req->product_id);
        if($product->quantity >= $req->product_quantity){
            $cart = Cart::where('user_id',$req->session()->get('user')['id'])->where('product_id',$req->product_id)->first();
            if($cart){
                $cart->product_quantity += $req->product_quantity;
                $cart->update();
            }else{
                $cart = new Cart;
                $cart->user_id=$req->session()->get('user')['id'];
                $cart->product_id=$req->product_id;
                $cart->product_quantity = $req->product_quantity;
                $cart->save();
            }
            $product->quantity -= $req->product_quantity;
            $product->save();
            return redirect('/');
        } else {
            // return redirect()->back()->with('error', 'Requested quantity is more than available quantity');
            return redirect()->back()->withErrors(['product_quantity' => 'Invalid quantity. Please enter a positive integer value.'])->withInput();
        }
    }
    else
        {
            return redirect('/login');
        }
    }

    function cartList()
    {
        $userId= Session::get('user')['id'];
        $products=DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('cartlist',['products'=>$products]);
    }

    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }

    function orderNow()
    {
        $userId= Session::get('user')['id'];
        $total=DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->sum('products.price');
        //total price of product is calculated here

        return view('ordernow',['total'=>$total]);
    }

    function orderPlace(Request $req)
    {
        $userId= Session::get('user')['id'];
        $allCart=Cart::where('user_id',$userId)->get();
        foreach($allCart as $cart)
        {
            $order= new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pending";
            $order->payment_method= $req->payment;
            $order->payment_status= "pending";
            $order->address=$req->address;
            $order->save();
            Cart::where('user_id',$userId)->delete();

        }
        return redirect('/');
    }
    function myOrders()
    {
        $userId= Session::get('user')['id'];
        $orders=DB::table('Orders')
        ->join('products','Orders.product_id','=','products.id')
        ->where('Orders.user_id',$userId)
        ->get();

        return view('myorders',['orders'=>$orders]);
      }

    function aboutUs()
    {
        return view('aboutus');
    }
    function contactUs()
    {
        return view('contactus');
    }
    //for admin to add products if he wish
    function addproduct(Request $req){
    $product = new Product;
    $product->name=$req->name;
    $product->price=$req->price;
    $product->category=$req->category;
    $product->description=$req->description;
    $product->quantity=$req->quantity;
    $product->gallery=$req->gallery;
    $product->save();
    return redirect('/adminaddproduct');

    }

    //for delete process of products from admin side
    function deleteproduct()
    {
        $data = Product::all();
        return view('admindeleteproduct',['products'=>$data]);
    }

    function delete2($id)
    {
        $data2 = Product::find($id);
        $data2->delete();
        return redirect('admindeleteproduct');
    }

    //for editing product
    function editData($id)
    {
        $data = Product::find($id);
        return view('admineditproduct',['data'=>$data]);
    }

    function updateproduct(Request $req)
    {
        $data = Product::find($req->id);
        $data->name=$req->name;
        $data->price=$req->price;
        $data->category=$req->category;
        $data->description=$req->description;
        $data->gallery=$req->gallery;
        $data->save();

        return redirect('admindeleteproduct');
    }

    //for categories with different pages
    //first for showing categories list , when selection categories option
   
    

    function categoryPro($cat_name){
        $data = Product::all()->where('category',$cat_name);
        $cat = Product::select('category')->distinct()->get();
        return view('/category_product',['products'=>$data, "category"=>$cat, 'heading'=>$cat_name]);
    }
    
}






