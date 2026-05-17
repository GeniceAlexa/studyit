<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    // Simulasi data room (ganti dengan database sesuai kebutuhan)
    private array $rooms = [
        ['id' => 1, 'name' => 'Statistika', 'subtitle' => 'Room Belajar', 'preview' => 'Sasa: Sudah submit belum?'],
        ['id' => 2, 'name' => 'Matematika', 'subtitle' => 'Room Belajar', 'preview' => 'Budi: Ada yang bisa bantu?'],
        ['id' => 3, 'name' => 'Fisika',     'subtitle' => 'Room Belajar', 'preview' => 'Ani: Tugasnya susah banget'],
        ['id' => 4, 'name' => 'Kimia',      'subtitle' => 'Room Belajar', 'preview' => 'Dani: Kapan UTS?'],
    ];

    // Simulasi pesan per room
    private array $messages = [
        1 => [
            ['sender' => 'Cika', 'text' => 'Halo, sudah ada yang belajar?', 'time' => '10.00', 'self' => false],
            ['sender' => 'Cika', 'text' => 'Halo, sudah ada yang belajar?', 'time' => '10.00', 'self' => false],
            ['sender' => 'Kamu', 'text' => 'Halo, sudah ada yang belajar?', 'time' => '10.00', 'self' => true],
        ],
    ];

    public function index()
    {
        $rooms    = $this->rooms;
        $activeId = 1;
        $active   = collect($rooms)->firstWhere('id', $activeId);
        $messages = $this->messages[$activeId] ?? [];

        return view('chat.index', compact('rooms', 'active', 'messages', 'activeId'));
    }

    public function getMessages(int $room)
    {
        $messages = $this->messages[$room] ?? [];
        return response()->json($messages);
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'room_id' => 'required|integer',
            'text'    => 'required|string|max:500',
        ]);

        // Simpan ke database di sini jika diperlukan
        $message = [
            'sender' => 'Kamu',
            'text'   => $request->text,
            'time'   => now()->format('H.i'),
            'self'   => true,
        ];

        return response()->json(['success' => true, 'message' => $message]);
    }
}