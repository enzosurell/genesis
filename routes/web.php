<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

Route::any('/', function () {
    return view('login.index');
});

Route::any('/signup', function () {
    return view('login.signup');
});

Route::any('/home', function () {
    return view('home');
});

//------------> to controllers

Route::any('/login', [userController::class, 'login']);
Route::any('/register', [userController::class, 'register']);