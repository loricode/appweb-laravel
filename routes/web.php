<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;//php artisan make:controller UserController
use App\Http\Controllers\LoginController;//php artisan make:controller LoginController

Route::get('/login', function () {
    return view('login');
})->name('login')->middleware('guest');


Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');


Route::get('/register', function () {
    return view('register');
})->name('register');


Route::post('/register', [UserController::class, 'create']);

Route::post('/login', [LoginController::class, 'login']);

Route::put('/login', [LoginController::class, 'logout']);