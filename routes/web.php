<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\LogintController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\InvoiceController;



Route::get('/', function () {
    return view('dashboard');
});

Route::get('/login', [AdminController::class, 'login']);
Route::post('/loginstore', [AdminController::class, 'loginstore']);
Route::get('/admindash', [AdminController::class, 'admindash']);
Route::get('/plogin', [PatientController::class, 'plogin']);
Route::get('/registration', [PatientController::class,'registration']);
Route::post('/store', [PatientController::class,'store']);
Route::post('/pstore', [LogintController::class,'pstore']);





//Route::get('/pdashboard', [LoginController::class, 'pdashboard']);


//Admin Section
Route::group(['middleware' => 'checkloggedin'], function(){

    Route::get('/adashboard', [AdminController::class, 'adashboard']);
    Route::get('/addtest', [AdminController::class, 'addtest']);
    Route::post('/tstore', [TestController::class,'tstore']);
    Route::get('/test', [TestController::class, 'test']);

    Route::get('/allpatient', [AdminController::class, 'allpatient']);

    Route::get('/edit-test/{id}',[TestController::class, 'edit']);
Route::post('/update-test/{id}',[TestController::class, 'update']);
Route::get('/delete-test/{id}',[TestController::class, 'delete']);

Route::get('send', [AdminController::class, "reportnotification"]);
    
});


//Patient Section
Route::group(['middleware' => 'checkifpatient'], function(){

    Route::get('/pdashboard', [LogintController::class, 'pdashboard']);
    Route::get('/ptest', [TestController::class, 'ptest']);
    Route::post('/patientall',[PatientController::class, 'patientall']);
    Route::post('/store',[InvoiceController::class, 'store']);
    // Route::get('/invoice-details', function () {
        //     return view('Admin.invoice_details');
        //Route::post('/bill',[InvoiceController::class, 'bill']);
        Route::get('/bill', [InvoiceController::class, 'bill']);
    Route::post('/checkout',[InvoiceController::class, 'checkout']);

    // Route::get('/noreport', [InvoiceController::class, 'noreport']);

    Route::get('/report', [InvoiceController::class, 'reportview']);
    // Route::get('/report', [InvoiceController::class, 'reportview2']);



});


//Logout Section
Route::get('plogout', [LogintController::class,'plogout']);
Route::get('logout', [AdminController::class,'logout']);


