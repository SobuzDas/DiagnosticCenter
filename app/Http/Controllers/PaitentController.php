<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paitent;
use Session;
use Illuminate\Validation\Rule;

class PaitentController extends Controller
{
    function plogin(){
        return view('plogin');
    }

    public function registration(){
        return view("registration");
    }

    function store(Request $req)
    {
        $validated = $req->validate([
            'name' => 'required',
            'email' => 'required | email |unique:paitents,email',
            'password' => 'required',
            'address' => 'required',
            'birth_date' => 'required | date:format',
            'gender' => [
                'required',
                Rule::in(['male', 'female', 'other']),
            ],
        ]);

        $obj = new Paitent();
        $obj->name  = $req->name;
        $obj->email = $req->email;
        $obj->password = $req->password;
        $obj->address = $req->address;
        $obj->birth_date = $req->birth_date;
        $obj->gender = $req->gender;
        $obj->save();
        return redirect()->back()->with('msg', 'Successfully Done');

        
       
        


    }

    }


