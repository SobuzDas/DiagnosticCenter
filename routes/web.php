<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\LoginController;


Route::get('/', function () {
    return view('dashboard');
});

Route::get('/login', [AdminController::class, 'login']);
Route::post('/loginstore', [AdminController::class, 'loginstore']);
Route::get('/admindash', [AdminController::class, 'admindash']);
Route::get('/plogin', [PatientController::class, 'plogin']);
Route::get('/registration', [PatientController::class,'registration']);
Route::post('/store', [PatientController::class,'store']);
Route::post('/store', [LoginController::class,'store']);

Route::get('/pdashboard', [LoginController::class, 'pdashboard']);

Route::get('logout', [LoginController::class,'logout']);

Route::group(['middleware' => 'checkloggedin'], function(){

    Route::get('/admindash', [AdminController::class, 'admindash']);
});

Route::group(['middleware' => 'checkifPatient'], function(){

    Route::get('/pdashboard', [LoginController::class, 'pdashboard']);
});



