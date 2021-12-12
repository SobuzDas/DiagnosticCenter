<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PatientController;



Route::get('/', function () {
    return view('dashboard');
});

Route::get('/login', [AdminController::class, 'login']);
Route::post('/loginstore', [AdminController::class, 'loginstore']);
Route::get('/dashboard', [AdminController::class, 'dashboard']);
Route::get('/registration',[PatientController::class,'registration']);