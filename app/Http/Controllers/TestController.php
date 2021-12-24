<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Session;
use DB;

class TestController extends Controller
{
    function tstore(Request $req)
    {
        $obj = new Test();
        $obj->testname  = $req->testname;
        $obj->testcost = $req->testcost;
        
        $obj->save();
        
        return redirect()->back()->with('msg', 'Successfully Done');   
}

function test(){
    $tests = DB::table('tests')->get();
      return view('admin.layouts.test', compact('tests'));
      }

      function edit($id){
        $tests=DB::table('tests')
        ->where('id','=', $id)
        ->first();

        return view('admin.layouts.edit', compact('tests'));
    }
    function update(Request $request,$id){
        $testname = $request->testname;
        $testcost = $request->testcost;

        $affected = DB::table('tests')
        ->where('id', $id)
        ->update(
            [
                'testname' => $testname,
                'testcost' => $testcost,
            
            ]
          );
        return redirect()->back()->with('msg','Update Successfully');   
    }   




       function delete($id){
        DB::table('tests')->where('id', '=', $id)->delete();


        return redirect()->back()->with('msg', 'Delete Successfully');
    }



     function ptest(){
        $tests = DB::table('tests')->get();
          return view('patient.layouts.ptest', compact('tests'));
          }



          


}
    

