<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
use DB;


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

         return redirect()->to('adashboard');
         }



    }



    function adashboard(){
        return view('admin.layouts.adashboard');
    
    }

    function addtest(){
        return view('admin.layouts.addtest');
    }


    function logout()
    {
        Session::forget(['username', 'useremail', 'userrole']);
        return redirect()->to('login');
    }


    function allpatient(){
        $patients = DB::table('patients')->get();
          return view('admin.layouts.allpatient', compact('patients'));
          }

    }

