<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\ReminderController;
use App\Http\Controllers\MateriFileController;

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/dashboard', function () {

    if (!session('user')) {
        return redirect('/login');
    }

    return view('dashboard');
});

Route::get('/room', function () {
    return view('room');
});

Route::get('/room', [RoomController::class, 'index'])->name('room');
Route::post('/room/store', [RoomController::class, 'store'])->name('room.store');
Route::post('/room/gabung/{id}', [RoomController::class, 'gabung'])->name('room.gabung');

Route::get('/reminder', [ReminderController::class, 'index'])->name('reminder');
Route::post('/reminder/store', [ReminderController::class, 'store'])->name('reminder.store');

Route::get('/materifile', [MateriFileController::class, 'index'])->name('materifile');
Route::post('/materifile/store', [MateriFileController::class, 'store'])->name('materifile.store');
Route::delete('/materifile/{id}', [MateriFileController::class, 'destroy'])->name('materifile.destroy');

Route::get('/jadwal', function () {
    return view('jadwal');
})->name('jadwal');
Route::get('/jadwal/get', [JadwalController::class, 'get']);
Route::get('/jadwal/dates', [JadwalController::class, 'getdates']);
Route::post('/jadwal/store', [JadwalController::class, 'store'])->name('jadwal.store');

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
    $request->validate(['email' => 'required|email', 'password' => 'required']);
    
    // Gunakan first() untuk mendapatkan object user
    $user = DB::table('users')->where('email', $request->email)->first();

    if ($user && $request->password == $user->password) {
        // SIMPAN LANGSUNG SELURUH OBJECT
        Session::put('user', $user); 
        return redirect('/dashboard');
    }
    return back()->with('error', 'Email atau password salah');
})->name('login');

Route::get('/regis', function () {
    return view('regis');
});

Route::post('/regis', function (Request $request) {

    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|confirmed',
    ]);

    DB::table('users')->insert([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return redirect('/login')->with('success', 'Registrasi berhasil!');
})->name('regis');
