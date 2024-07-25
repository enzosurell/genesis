<?php

use Illuminate\Support\Facades\Route;

Route::any('/', function () {
    return view('login');
});

Route::any('/signup', function () {
    return view('signup');
});