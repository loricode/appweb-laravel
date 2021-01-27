<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
//php artisan make:controller UserController

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');


Route::post('/register', [UserController::class, 'create']);