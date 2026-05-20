<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class RoomController extends Controller
{
    // tampil halaman
    public function index()
    {
        $rooms = Room::with('creator')
            ->withCount('members') // members_count
            ->get();

        return view('room', compact('rooms'));
    }

    // simpan room
   public function store(Request $request)
    {
        $user = Session::get('user');

        // Debugging: Cek isi user yang login
        // dd($user); 
        
        $request->validate([
            'name' => 'required|string|max:255',
            'max_members' => 'required|integer|min:1'
        ]);

        // Akses property id_user dari object $user
        Room::create([
            'name' => $request->name,
            'created_by' => $user->id_user, 
            'max_members' => $request->max_members,
        ]);

        return redirect()->route('room')->with('success', 'Room berhasil dibuat!');
    }

    // gabung room
    public function gabung($id)
    {
        $room = Room::withCount('members')->findOrFail($id);

        // Cek penuh
        if ($room->members_count >= $room->max_members) {
            return back()->with('error', 'Room sudah penuh!');
        }

        // Cek apakah user sudah ada di room_members
        $isJoined = DB::table('room_members')
            ->where('id_rooms', $id)
            ->where('id_user', Auth::id())
            ->exists();

        if ($isJoined) {
            return back()->with('error', 'Kamu sudah join!');
        }

        // Attach ke pivot
        $room->members()->attach(Auth::id(), ['role' => 'member']);

        return back()->with('success', 'Berhasil join room!');
    }
}
