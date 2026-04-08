<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/room', function () {
    return view('room');
});

Route::get('/reminder', function () {
    return view('reminder');
});