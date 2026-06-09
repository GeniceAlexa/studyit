<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Room Belajar</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="flex h-screen bg-white-100 overflow-hidden">
        <aside class="w-44 bg-white-900 flex flex-col py-6 flex-shrink-0">
            <div class="text-black font-bold text-lg px-5 mb-6">Studyit</div>

            <ul class="flex-1 px-3 space-y-1">
                <li>
                    <a href="dashboard" class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-400 hover:bg-gray-700 hover:text-white text-sm transition">
                        <img src="{{ asset('images/dashboard.png') }}" class="w-4 h-4" alt="dashboard">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="room" class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-400 hover:bg-gray-700 hover:text-white text-sm transition">
                        <img src="{{ asset('images/profile.png') }}" class="w-4 h-4" alt="Room belajar">
                        Room Belajar
                    </a>
                </li>
                <li>
                    <a href="jadwal" class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-400 hover:bg-gray-700 hover:text-white text-sm transition">
                        <img src="{{ asset('images/jadwal.png') }}" class="w-4 h-4" alt="Jadwal">
                        Jadwal
                    </a>
                </li>
                <li>
                    <a href="reminder" class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-400 hover:bg-gray-700 hover:text-white text-sm transition">
                        <img src="{{ asset('images/notif.png') }}" class="w-4 h-4" alt="Reminder">
                        Reminder
                    </a>
                </li>
                <li>
                    <a href="materifile" class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-400 hover:bg-gray-700 hover:text-white text-sm transition">
                        <img src="{{ asset('images/materi.png') }}" class="w-4 h-4" alt="Materi & File">
                        Materi & File
                    </a>
                </li>
                <li>
                    <a href="chat" class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-400 hover:bg-gray-700 hover:text-white text-sm transition">
                        <img src="{{ asset('images/chat.png') }}" class="w-4 h-4" alt="Chat">
                        Chat
                    </a>
                </li>
            </ul>

            <div class="px-3">
                <a href="pengaturan" class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-400 hover:bg-gray-700 hover:text-white text-sm transition">
                    <img src="{{ asset('images/pengaturan.png') }}" class="w-4 h-4" alt="Pengaturan">
                    Pengaturan
                </a>
            </div>
        </aside>

        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="bg-white border-b border-gray-200 px-6 py-4 flex items-center justify-between">
                <div>
                    <h1 class="text-xl font-bold">Room Belajar</h1>
                    <h2 class="text-gray-600 text-sm">Diskusi pelajaran dengan temanmu</h2>
                </div>

                <button onclick="document.getElementById('modalBuat').classList.remove('hidden')" class="flex items-center gap-3 px-3 py-2 text-sm shadow-lg text-black rounded-lg bg-grey-200 hover:bg-gray-200">
                    <img src="{{ asset('images/tambah.png') }}" class="w-5 h-5">
                    Buat Room
                </button>
            </header>

            <main class="flex-1 p-6 overflow-y-auto space-y-4">
                
                @if (session('success'))
                <div class="text-sm text-green-700 bg-green-50 border border-green-200 rounded-lg px-4 py-2">
                    {{ session('success') }}
                </div>
                @endif
                @if (session('error'))
                    <div class="text-sm text-red-700 bg-red-50 border border-red-200 rounded-lg px-4 py-2">
                        {{ session('error') }}
                    </div>
                @endif

                <form method="GET" action="{{ route('room') }}">
                    <div class="flex items-center gap-2 bg-gray-100 border border-gray-200 rounded-lg px-3 py-2 w-300">
                        <img src="{{ asset('images/search.png') }}" class="w-4 h-4 opacity-50" alt="">
                        <input type="text" placeholder="Search" class="bg-transparent text-sm outline-none w-full text-gray-600 placeholder-gray-400">
                    </div>
                </form>


                <div class="space-y-3">
                    @forelse ($rooms as $room)
                    <div class="bg-white rounded-xl border border-gray-200 px-5 py-4 flex items-center gap-4 hover:shadow-sm transition">
                        <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center flex-shrink-0">
                            <i class="ti ti-users text-gray-500 text-xl"></i>
                        </div>
                        <div class="flex-1 min-w-0">
                            <h2 class="text-sm font-semibold text-gray-900">{{ $room->name }}</h2>
                            <p class="text-xs text-gray-500">Dibuat oleh {{ $room->creator->name ?? 'Unknown' }}</p>
                            <p class="text-xs text-gray-400">{{ $room->members_count }} / {{ $room->max_members }} anggota</p>
                        </div>

                        <form action="{{ route('room.gabung', $room->id_rooms) }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="flex items-center gap-2 bg-zinc-900 text-white text-xs font-medium px-4 py-2 rounded-lg hover:bg-zinc-700 transition flex-shrink-0">
                                <i class="ti ti-user-plus text-sm"></i> Gabung
                            </button>
                        </form>

                        <button class="text-gray-400 hover:text-gray-600 px-1 flex-shrink-0">
                            <i class="ti ti-dots-vertical text-lg"></i>
                        </button>
                    </div>
                        @empty
                        <div class="text-center py-16 text-gray-400">
                            <i class="ti ti-users-off text-4xl block mb-2"></i>
                            <p class="text-sm">Belum ada room. Buat room pertamamu!</p>
                        </div>
                        @endforelse
                </div>
            </main>
            
            <div id="modalBuat" class="hidden fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50">
                <div class="bg-white w-96 p-6 rounded-lg relative">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="font-semibold">Buat Room</h2>
                        <button 
                            onclick="document.getElementById('modalBuat').classList.add('hidden')">

                            <img src="{{ asset('images/silang.png') }}" class="w-5 h-5">
                        </button>
                    </div>

                    <form action="{{ route('room.store') }}" method="POST" class="space-y-3">
                        @csrf

                        <input type="text" name="name" placeholder="Nama Room"
                            class="w-full border px-3 py-2 rounded text-sm" required>

                        <input type="number" name="max_members" placeholder="Jumlah Anggota"
                            class="w-full border px-3 py-2 rounded text-sm" required>

                        <div class="flex gap-2">
                            <label class="flex-1 border rounded-lg p-2 text-center cursor-pointer has-[:checked]:bg-black has-[:checked]:text-white">
                                <input type="radio" name="tipe" value="publik" class="hidden" checked>
                                Publik
                            </label>

                            <label class="flex-1 border rounded-lg p-2 text-center cursor-pointer has-[:checked]:bg-black has-[:checked]:text-white">
                                <input type="radio" name="tipe" value="private" class="hidden">
                                Private
                            </label>
                        </div>

                        <button type="submit"
                            class="w-full bg-black text-white py-2 rounded">
                            Buat Room
                        </button>
                    </form>
                </div>
            </div>

            <script>
                document.getElementById('modalBuat').addEventListener('click', function(e) {
                    if (e.target === this) {
                        this.classList.add('hidden');
                    }
                });
            </script>
        </div>
    </body>
</html>