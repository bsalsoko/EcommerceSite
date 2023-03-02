<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
class AdminController extends Controller
{
    //
    public function adminlogin(Request $req)
    {
        $admin= Admin::where(['email'=>$req->email,'password'=>$req->password])->first();
        if($admin == null)
        {
            return "Username or password is not matched";
        }
        else{
            $req->session()->put('admin',$admin);
            return redirect('/admindashboard');
        }
    }

    
}
