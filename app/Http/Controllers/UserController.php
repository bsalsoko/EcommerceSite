<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    //
    function register(Request $req)
    {
        $validatedData = $req->validate([
            'name' => 'required|regex:/^[a-zA-Z]+$/',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);    
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->save();

        
        return redirect('/login')->with('success', 'You have been successfully registered.');
    }

  

    //login
    public function login(Request $req)
    {
        $user= User::where(['email'=>$req->email,'password'=>$req->password])->first();

        if($user == null)
        {
            return "invalid input";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }

    public function login1(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email'
        ]);

        // check if the email and password match
        if ($validatedData['email'] === 'example@domain.com' && $validatedData['password'] === 'password') {
            // redirect to the dashboard page
            return redirect('/');
        } else {
            // show an error message
            return back()->withErrors([
                'message' => 'Wrong email or password. Please try again.'
            ]);
        }
    }
    
    //for admin to add users if he wish
    function addmember(Request $req){
        $validatedData = $req->validate([
            'name' => 'required|regex:/^[a-zA-Z]+$/',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);   
        $user = new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=$req->password;
        $user->save();
        return redirect('/adminuserscontrol')->with('success', 'You have been successfully registered new member.');;

    }
//for admin to delete users, use $id to delete by seperate id
    function deleteuser()
    {
        $data = User::all();
        return view('admindeleteuser',['users'=>$data]);
    }
    function delete1($id)
    {
        $data1 = User::find($id);
        $data1->delete();
        return redirect('admindeleteuser');
    }

    
}
