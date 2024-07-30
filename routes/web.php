<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

Route::view('/', 'login.index');

Route::view('/signup', 'login.signup');

Route::view('/home', 'home');

//------------> to controllers

Route::any('/login', [userController::class, 'login']);
Route::any('/register', [userController::class, 'register']);