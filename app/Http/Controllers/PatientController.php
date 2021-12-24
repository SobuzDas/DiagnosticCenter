<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use Session;
use DB;
use Illuminate\Validation\Rule;

class PatientController extends Controller
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
                'email' => 'required | email |unique:patients,email',
                'password' => 'required',
                'address' => 'required',
                'birth_date' => 'required | date:format',
                'gender' => [
                    'required',
                    Rule::in(['male', 'female', 'other']),
                ],
            ]);
    
            $obj = new Patient();
            $obj->name  = $req->name;
            $obj->email = $req->email;
            $obj->password = $req->password;
            $obj->address = $req->address;
            $obj->birth_date = $req->birth_date;
            $obj->gender = $req->gender;
            $obj->save();
            
            return redirect()->back()->with('msg', 'Successfully Done');


       
 }
        
    function pdashboard(){
        return view('patient.layouts.pdashboard');
    
    }

    function patientall(){
        $all = DB::table('patients')->get();
          return view('patient.layouts.ptest', compact('all'));
          }



         
} 
    

