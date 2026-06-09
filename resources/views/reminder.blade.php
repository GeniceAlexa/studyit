<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reminder</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex h-screen bg-white-100 overflow-hidden">
    <aside class="w-44 bg-white flex flex-col py-6 flex-shrink-0">
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
        <header class="bg-white border-b border-gray-200 px-6 py-3 flex items-center justify-between">
            <div>
                <h1 class="text-xl font-bold">Reminder</h1>
                <h2 class="text-gray-600 text-sm">Pengingat jadwal dan tugas</h2>
            </div>

            <button onclick="document.getElementById('modalBuat').classList.remove('hidden')" class="flex items-center gap-3 px-3 py-2 text-sm shadow-lg text-black rounded-lg bg-grey-200 hover:bg-gray-200">
                <img src="{{ asset('images/tambah.png') }}" class="w-5 h-5">
                Buat Reminder
            </button>
        </header>

        <main class="flex-1 overflow-y-auto p-6 space-y-6">

            {{-- Reminder Aktif --}}
            <div>
                <h2 class="text-sm font-semibold text-gray-800 mb-3">
                    Aktif
                    <span>({{ $reminders->where('status','aktif')->count() }})</span>
                </h2>

                <div class="space-y-3">
                    @forelse ($reminders->where('status','aktif') as $reminder)
                        <div class="bg-white rounded-xl border border-gray-200 p-4 flex justify-between items-center">
                            <div>
                                <h3 class="text-sm font-semibold text-gray-800">
                                    {{ $reminder->title }}
                                </h3>

                                <p class="text-xs text-gray-500">
                                    {{ $reminder->description }}
                                </p>

                                <p class="text-xs text-gray-400">
                                    {{ $reminder->datetime }}
                                </p>
                            </div>

                            <button class="text-gray-400 hover:text-gray-600">
                                ⋮
                            </button>
                        </div>
                    @empty
                        <p class="text-sm text-gray-400">
                            Belum ada reminder aktif
                        </p>
                    @endforelse
                </div>
            </div>


            {{-- Reminder Tidak Aktif --}}
            <div>
                <h2 class="text-sm font-semibold text-gray-800 mb-3">
                    Tidak Aktif
                    <span>({{ $reminders->where('status','tidak aktif')->count() }})</span>
                </h2>

                <div class="space-y-3">
                    @forelse ($reminders->where('status','tidak aktif') as $reminder)
                        <div class="bg-white rounded-xl border border-gray-200 p-4 flex justify-between items-center">
                            <div>
                                <h3 class="text-sm font-semibold text-gray-800">
                                    {{ $reminder->title }}
                                </h3>

                                <p class="text-xs text-gray-500">
                                    {{ $reminder->description }}
                                </p>

                                <p class="text-xs text-gray-400">
                                    {{ $reminder->datetime }}
                                </p>
                            </div>

                            <button class="text-gray-400 hover:text-gray-600">
                                ⋮
                            </button>
                        </div>
                    @empty
                        <p class="text-sm text-gray-400">
                            Belum ada reminder tidak aktif
                        </p>
                    @endforelse
                </div>
            </div>

        </main>

    <div id="modalBuat" class="hidden fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50">
        <div class="bg-white w-96 p-6 rounded-lg relative">
            <div class="flex justify-between items-center mb-4">
                <h2 class="font-semibold">Tambah Reminder</h2>
                <button 
                    onclick="document.getElementById('modalBuat').classList.add('hidden')">

                    <img src="{{ asset('images/silang.png') }}" class="w-5 h-5">    
                </button>
            </div>

            <form action="{{ route('reminder.store') }}" method="POST" class="space-y-3">
                @csrf

                <input type="text" name="judul" placeholder="Judul"
                    class="w-full border px-3 py-2 rounded text-sm" required>

                <input type="text" name="deskripsi" placeholder="Deskripsi"
                    class="w-full border px-3 py-2 rounded text-sm" required>

                <input type="datetime-local" name="waktutanggal"
                    class="w-full border px-3 py-2 rounded text-sm" required>

                <button type="submit"
                    class="w-full bg-black text-white py-2 rounded">
                    Simpan
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
</body>
</html>