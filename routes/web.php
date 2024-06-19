<?php

use App\Models\Kehadiran;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KehadiranController;


// Route::get('/', function () {
//     return view('welcome', ["user" => "Kelompok 7"]);
// });

Route::get('/', [KehadiranController::class, 'index_welcome']);

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

Route::get('/tables', [KehadiranController::class, 'index_table']);