<?php

use Livewire\Component;
use App\Models\Message;
use App\Models\Room;

new class extends Component
{
    public $roomId;

    public $text='';

    public function mount()
    {
        $room = Room::first();

        if($room){
            $this->roomId = $room->id_rooms;
        }
    }

    public function selectRoom($id)
    {
        $this->roomId = $id;
    }

    public function send()
    {
        $this->validate([
            'text'=>'required|max:500'
        ]);

        Message::create([
            'id_rooms'=>$this->roomId,
            'id_user'=>session('user')->id_user,
            'message'=>$this->text,
        ]);

        $this->reset('text');
    }

    public function with()
    {
        return [
            'rooms' => Room::all(),

            'messages' => Message::with('user')
                ->where('id_rooms', $this->roomId)
                ->orderBy('created_at')
                ->get(),

            'currentRoom' => Room::find($this->roomId),
        ];
    }
};

?>

<div class="flex h-screen bg-white overflow-hidden">

    {{-- Sidebar Room --}}
    <div class="w-52 flex flex-col border-r border-gray-200">

        <div class="px-3 pt-4 pb-2 text-lg font-semibold">
            Chat
        </div>

        {{-- Search --}}
        <div class="mx-2 mb-2">
            <input
                type="text"
                placeholder="Search Room"
                class="w-full border rounded-lg px-3 py-2 text-sm">
        </div>

        {{-- Room List --}}
        <div class="overflow-y-auto flex-1">

            @foreach($rooms as $room)

            @php
                $last = $room->messages()->with('user')->latest()->first();
            @endphp

            <div
                wire:click="selectRoom({{ $room->id_rooms }})"
                class="block px-3 py-2.5 border-b border-gray-100 cursor-pointer transition
                {{ $roomId == $room->id_rooms ? 'bg-gray-100' : 'hover:bg-white' }}">

                <div class="flex items-center justify-between mb-1">

                    <span class="text-[12px] font-semibold text-gray-800 truncate">
                        {{ $room->name }}
                    </span>

                    @if($last)
                    <div class="w-4 h-4 bg-black rounded-full text-white text-[10px] flex items-center justify-center">
                        1
                    </div>
                    @endif

                </div>

                <p class="text-[10px] text-gray-400 truncate">

                    @if($last)

                        {{ $last->user->name }} :
                        {{ Str::limit($last->message,25) }}

                    @else

                        Belum ada chat

                    @endif

                </p>

            </div>

            @endforeach

        </div>

    </div>

    {{-- Area Chat --}}
    <div class="flex flex-col flex-1">

        {{-- Header --}}
       <div class="border-b border-gray-200 px-5 py-3 bg-white">

            @if($currentRoom)

            <div class="text-[15px] font-semibold">
                {{ $currentRoom->name }}
            </div>

            <div class="text-[12px] text-gray-400 mt-0.5">
                Room Belajar
            </div>

            @endif

        </div>

        {{-- Isi Chat --}}
        <div
            id="chat-box"
            wire:poll.1s
            class="flex-1 overflow-y-auto px-5 py-4 flex flex-col gap-3">

            @forelse($messages as $msg)

                @if($msg->id_user == session('user')->id_user)

                    <div class="flex justify-end">

                        <div class="bg-blue-500 text-white rounded-xl px-3 py-2 max-w-sm">

                            {{ $msg->message }}

                            <div class="text-right text-xs mt-1 text-blue-100">
                                {{ $msg->created_at->format('H:i') }}
                            </div>

                        </div>

                    </div>

                @else

                    <div class="flex justify-start">

                        <div class="bg-gray-200 rounded-xl px-3 py-2 max-w-sm">

                            <div class="font-bold text-xs">

                                {{ $msg->user->name }}

                            </div>

                            {{ $msg->message }}

                            <div class="text-right text-xs text-gray-500 mt-1">

                                {{ $msg->created_at->format('H:i') }}

                            </div>

                        </div>

                    </div>

                @endif

            @empty

            <div class="text-center text-gray-400 mt-20">

                Belum ada chat.

            </div>

            @endforelse

        </div>

        {{-- Input --}}
        <div class="border-t p-4">

            <form wire:submit.prevent="send" class="flex gap-2">

                <input
                    wire:model.live="text"
                    type="text"
                    placeholder="Tulis pesan..."
                    class="flex-1 border rounded-lg px-3 py-2">

                <button
                    type="submit"
                    class="bg-blue-500 text-white px-4 rounded-lg">
                    Kirim
                </button>

            </form>

        </div>

    </div>

</div>

<script>
document.addEventListener('livewire:init', () => {

    Livewire.hook('commit', () => {

        let chat = document.getElementById('chat-box');

        if (chat) {
            chat.scrollTop = chat.scrollHeight;
        }

    });

});
</script>