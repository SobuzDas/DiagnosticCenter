<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function login(){
        return "Login";
    }
    public function registration(){
        return view("patient.Registration");
    }
}
