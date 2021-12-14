<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaitentController;
use App\Http\Controllers\LoginController;


Route::get('/', function () {
    return view('dashboard');
});

Route::get('/login', [AdminController::class, 'login']);
Route::post('/loginstore', [AdminController::class, 'loginstore']);
Route::get('/admindash', [AdminController::class, 'admindash']);
Route::get('/plogin', [PaitentController::class, 'plogin']);
Route::get('/registration', [PaitentController::class,'registration']);
Route::post('/store', [PaitentController::class,'store']);
Route::post('/store', [LoginController::class,'store']);
