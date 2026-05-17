<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('landingpage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/room', function () {
    return view('room');
});

Route::get('/reminder', function () {
    return view('reminder');
});

Route::get('/materifile', function () {
    return view('materifile');
});

Route::get('/jadwal', function () {
    return view('jadwal');
});

Route::get('/chat', function () {
    $rooms = [
        1 => ['id' => 1, 'name' => 'Statistika', 'subtitle' => 'Room Belajar', 'preview' => 'Sasa: Sudah submit belum?'],
        2 => ['id' => 2, 'name' => 'Matematika', 'subtitle' => 'Room Belajar', 'preview' => 'Budi: Ada yang bisa bantu?'],
        3 => ['id' => 3, 'name' => 'Fisika',     'subtitle' => 'Room Belajar', 'preview' => 'Ani: Tugasnya susah banget'],
        4 => ['id' => 4, 'name' => 'Kimia',      'subtitle' => 'Room Belajar', 'preview' => 'Dani: Kapan UTS?'],
    ];

    $messages = [
        ['sender' => 'Cika', 'text' => 'Halo, sudah ada yang belajar?', 'time' => '10.00', 'self' => false],
        ['sender' => 'Cika', 'text' => 'Ada yang mau diskusi bareng?',  'time' => '10.01', 'self' => false],
        ['sender' => 'Kamu', 'text' => 'Siap, aku udah di sini!',       'time' => '10.02', 'self' => true],
    ];

    $active = $rooms[1];

    return view('chat', compact('rooms', 'messages', 'active'));
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function (Request $request) {
    // proses login nanti di sini
})->name('login');

Route::get('/regis', function () {
    return view('regis');
});

Route::post('/regis', function (Request $request) {
    // proses pendaftaran nanti di sini
})->name('regis');
