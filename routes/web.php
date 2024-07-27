<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

Route::any('/', function () {
    return view('login');
});

Route::any('/signup', function () {
    return view('signup');
});

Route::any('/home', function () {
    return view('home');
});

Route::any('/asd', function () {
    return view('asd');
});

//------------> to controllers

Route::any('/login', [userController::class, 'login']);