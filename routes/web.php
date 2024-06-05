<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/password', function () {
    return view('password');
});

Route::get('/charts', function () {
    return view('charts');
});

Route::get('/tables', function () {
    return view('tables');
});