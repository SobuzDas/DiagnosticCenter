<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paitent;
use Session;

class LoginController extends Controller
{
    function store(Request $r){
        $name = $r->name;
        $email = $r->email;
        $password = $r->password;


        $user =  Paitent::where('email', '=' , $email)
        ->where('password', '=', $password)
        ->first();

        if(!$user){
           return redirect()->back()->with('err_msg', 'Invalid email or password');
        }
        else{

        $r ->session()->put('username', $user-> name);
        $r ->session()->put('useremail', $user-> email);
        

        /* return redirect()->to('admindash'); */
    
    }
}
}