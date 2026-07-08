<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Message;
use App\Models\Room;

class Chat extends Component
{
    public $roomId;
    public $text = '';

    public function mount()
    {
        $room = Room::first();

        if ($room) {
            $this->roomId = $room->id_rooms;
        }
    }

    // Pindah room
    public function selectRoom($id)
    {
        $this->roomId = $id;
    }

    // Kirim pesan
    public function send()
    {
        $this->validate([
            'text' => 'required|max:500',
        ]);

        if (!$this->roomId) {
            return;
        }

        Message::create([
            'id_rooms' => $this->roomId,
            'id_user'  => session('user')->id_user,
            'message'  => $this->text,
        ]);

        $this->reset('text');
    }

    public function render()
    {
        $rooms = Room::all();

        $messages = collect();

        if ($this->roomId) {
            $messages = Message::with('user')
                ->where('id_rooms', $this->roomId)
                ->orderBy('created_at', 'asc')
                ->get();
        }

        $currentRoom = Room::find($this->roomId);

        return view('livewire.chat', compact(
            'rooms',
            'messages',
            'currentRoom'
        ));
    }
}