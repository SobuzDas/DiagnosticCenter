<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;
use App\Models\Patient;
use App\Models\Payment;
use App\Models\Test;
use Session;
use DB;
class InvoiceController extends Controller
{
    public function store(Request $r ){
            
            // $data=new Invoice();
            // $data->patient_name= $r->name;
            // $data->patient_mail= $r->email;
            // $data->test_name = $r->tname;
            // $data->total = $r->total;
            // $data->advance = $r->advance;
            // $data->due = $r->total - $r->advance;
            // $data->save();


            // $patient = Patient::where('email', '=', $r->email)->first();
            // if($patient === null){
            //     $data3=new Patient();
            //     $data3->name= $r->name;
            //     $data3->email= $r->email;
            //     $data3->save();
            // }

            // return view('patient.layouts.bill', compact('data'));

    }
    public function checkout(Request $r ){
        $data = [];
        $data['patient_name'] = $r->session()->get('username');
        $data['patient_mail'] = $r->session()->get('useremail');
        $pinfo = $r->session()->get('useremail');
        $patient = DB::table('patients')
                    ->where('patients.email', '=', $pinfo)
                    ->select('patients.id as pid')
                    ->get();
            // dd($patient);
        $totalCost = 0;
        $i = 0;
        foreach($r->tname as $tname){
            $data['test_name'][$i] = $tname;
            $test = DB::table('tests')
                        ->where('tests.testname', '=', $tname)
                        ->select('tests.id as tid', 'tests.testcost as tcost')
                        ->get();
            // dd($patient);
            $data['test_cost'][$i] = $test[0]->tcost;

            $obj = new Invoice();
            $obj->pid = $patient[0]->pid;
            $obj->tid = $test[0]->tid;
            $obj->cost = $test[0]->tcost;
            $obj->status = '0';
            $obj->save();

            $totalCost += $test[0]->tcost;
            $i++;
        }
        $due = $totalCost - $r->addpay;

        $data['total'] = $totalCost;
        $data['due'] = $due;
        $data['advance'] = $r->addpay;

        $obj = new Payment();
                $obj->pid = $patient[0]->pid;
                $obj->due = $due;
    
                    if($obj->due==0) 
            {
                $obj->status = 1 ;
            }
            else
            $obj->status = 0 ;

           
                // $obj->status = '0';
                $obj->save();

        $payment = DB::table('payments')
                ->where('payments.pid', '=', $patient[0]->pid)
                ->select('payments.id as id', 'payments.created_at as created_at')
                ->get();

        $data['id'] = $payment[0]->id;
        $data['created_at'] = $payment[0]->created_at;
        // dd($data);
        return view('patient.layouts.bill', compact('data'));
    }


    function report(){
        return view('patient.layouts.report');
        
    }
    
    
    public function reportview(){
        
        $patient =  Patient::where('email','=',session('useremail'))->first();
        
        $data = DB::table('payments')
                    ->join('invoices', 'invoices.pid', '=', 'payments.pid')
                    ->join('tests', 'tests.id', '=', 'invoices.tid')
                    // ->where('payments.status', '=', 0)
                    ->where('invoices.pid', '=', $patient->id)
                    ->select('tests.testname as tname', 'payments.status as status')
                    ->get();
        // dd($data);
        return view('patient.layouts.report',compact('data'));
    }

    // public function reportview2(){
    //     $reports2 = Payment::where('status','!=','0')->get();
    //     return view('patient.layouts.report',compact('reports2'));
    // }

}