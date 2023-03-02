<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/login', function () {
    return view('login');
});
Route::get('/login1', function () {
    return view('login1');
});

Route::get('/aboutus',[ProductController::class,'aboutUs']);
Route::get('/contactus',[ProductController::class,'contactUs']);


Route::post('/login',[UserController::class,'login']);
Route::post('/login1',[UserController::class,'login1']);


Route::get('/',[ProductController::class,'index']);
Route::get('/detail/{id}',[ProductController::class,'detail']);
Route::get('/search',[ProductController::class,'search']);
Route::post('/add_to_cart',[ProductController::class,'addToCart']);

Route::get('/cartlist',[ProductController::class,'cartList']);

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::get('removecart/{id}',[ProductController::class,'removeCart']);
Route::get('ordernow',[ProductController::class,'orderNow']);
Route::post('orderplace',[ProductController::class,'orderPlace']);
Route::get('myorders',[ProductController::class,'myOrders']);



Route::view('/register','register');
Route::post('/register',[UserController::class,'register']);


//admin part start here
Route::get('/adminlogin', function () {
    return view('adminlogin');
});
Route::post('/adminlogin',[AdminController::class,'adminlogin']);


Route::view('/admindashboard','admindashboard');

//for user
Route::view('/adminuserscontrol','adminuserscontrol');

Route::view('/adminaddmember','adminaddmember');
Route::post('/addmember',[UserController::class,'addmember']);
//Route::view('/admindeleteuser','admindeleteuser');

Route::get('/admindeleteuser',[UserController::class,'deleteuser']);
Route::get('/deleteuser/{id}',[UserController::class,'delete1']);

//for products
Route::view('/adminproductscontrol','adminproductscontrol');

Route::view('/adminaddproduct','adminaddproduct');
Route::post('/addproduct',[ProductController::class,'addproduct']);

Route::get('/admindeleteproduct',[ProductController::class,'deleteproduct']);
Route::get('/delete/{id}',[ProductController::class,'delete2']);

//for edit product
Route::get('/edit/{id}',[ProductController::class,'editData']);
Route::post('/editProduct',[ProductController::class,'updateproduct']);


//for adminlogout
Route::get('/adminlogout', function () {
    Session::forget('admin');
    return redirect('adminlogin');
});

//for category

Route::get('/product/category/{category}',[ProductController::class,'categoryPro']);


//for same email repeated
Route::post('/check-email', function (Request $request) {
    $email = $request->input('email');
  
    if (User::where('email', $email)->exists()) {
      return 'taken';
    }
  
    return 'available';
  });