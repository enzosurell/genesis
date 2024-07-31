<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

Route::view('/', 'login.index')->name('login');
Route::view('/signup', 'login.signup');
Route::view('/home', 'home')->middleware('auth');

//------------> to controllers

Route::controller(userController::class)->group(function () {
    Route::post('/login', 'login');
    Route::post('/logout', 'logout');
    Route::post('/register', 'register');
});
