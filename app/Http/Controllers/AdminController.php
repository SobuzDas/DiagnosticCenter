<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;


class AdminController extends Controller
{
    function login(){
        return view('login');
    }

    function loginstore(Request $r){

       $name = $r->name;
        $email = $r->email;
        $role = $r->role;
         $password = $r->password;
         

        $user =  User::where('email', '=', $email)
         ->where('password', '=', $password)
         ->first();

         if(!$user){
            return redirect()->back()->with('err_msg', 'Invalid email or password');
         }
         else{

         $r ->session()->put('username', $user-> name);
         $r ->session()->put('useremail', $user-> email);
         $r ->session()->put('userrole', $user-> role);

         return redirect()->to('admindash');
         }



    }



    function dashboard(){
        return view('dashboard');
    
    }

    


    function logout()
    {
        Session::forget(['username', 'useremail', 'userrole']);
        return redirect()->to('login');
    }

    }

