<?php

namespace App\Http\Controllers;

use App\Models\reminder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ReminderController extends Controller
{
    public function index()
    {
        $reminders = Reminder::where('id_user', session('user')->id_user)
            ->orderBy('deadline', 'asc')
            ->get();

        // Hitung status secara dinamis berdasarkan deadline
        $reminders->each(function ($reminder) {
            $reminder->status_dinamis = \Carbon\Carbon::parse($reminder->deadline)->isPast()
                ? 'tidak aktif'
                : 'aktif';
        });

        return view('reminder', compact('reminders'));
    }

    public function store(Request $request)
    {
        $user = Session::get('user');
        
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'waktutanggal' => 'required|date'
        ]);

        Reminder::create([
            'id_user' => $user->id_user,
            'title' => $request->judul,
            'description' => $request->deskripsi,
            'deadline' => $request->waktutanggal,
            'status' => $request->status ?? 'active'
        ]);

        return redirect()->route('reminder')->with('success', 'Reminder berhasil dibuat!');
    }
}