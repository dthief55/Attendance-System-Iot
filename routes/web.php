<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ["user" => "Kelompok 7"]);
});

Route::get('/login', function () {
    return view('login', ['title' => 'Masuk']);
});

Route::get('/register', function () {
    return view('register', ['title' => 'Daftar']);
});

Route::get('/password', function () {
    return view('password', ['title' => 'Lupa Password']);
});

Route::get('/charts', function () {
    return view('charts', ["user" => "Kelompok 7"]);
});

Route::get('/tables', function () {
    return view('tables', ["user" => "Kelompok 7"]);
});