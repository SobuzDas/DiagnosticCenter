<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use Session;

class LogintController extends Controller

{
    function pstore(Request $r){

        $name = $r->name;
        $email = $r->email;
        $password = $r->password;
        $address = $r->address;
        $birth_date = $r->birth_date;
        $gender = $r->gender;


        $user =  Patient::where('email', '=' , $email)
        ->where('password', '=', $password)
        ->first();

        if(!$user){
           return redirect()->back()->with('err_msg', 'Register First..');
        }
        else{

        $r ->session()->put('username', $user-> name);
        $r ->session()->put('useremail', $user-> email);
        

         return redirect()->to('pdashboard');
    
    }
}
    function pdashboard(){
        return view('patient.layouts.pdashboard');
    
    }

    function logout()
{
    Session::forget(['username', 'useremail']);
    return redirect()->to('plogin');
}
    
}
