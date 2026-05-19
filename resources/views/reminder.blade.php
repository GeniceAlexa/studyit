<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Belajar</title>
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

            <div>
                <a href="#" class="flex items-center gap-3 px-3 py-2 text-sm shadow-lg text-black rounded-lg bg-grey-200 hover:bg-gray-200">
                   <img src="{{ asset('images/tambah.png') }}" class="w-6 h-6 rounded-full" alt="">
                   Buat Reminder
                </a>
            </div>
        </header>

        <main class="flex-1 overflow-y-auto p-6 space-y-6">

        <div>
            <h2 class="text-sm font-semibold text-gray-800 mb-3">Aktif <span> {{ optional(session('reminders'))->status ?? '(0)' }}</span></h2>

            <div class="space-y-3">
                <div class="bg-white rounded-xl border border-gray-200 p-4 flex justify-between items-center">
                    <div>
                        <h3 class="text-sm font-semibold text-gray-800">Statistika</h3>
                        <p class="text-xs text-gray-500">Bab 2 - Peluang</p>
                        <p class="text-xs text-gray-400">2026 - 02 - 01 | 23.59</p>
                    </div>
                    <button class="text-gray-400 hover:text-gray-600">
                        ⋮
                    </button>
                </div>
            </div>
        </div>

        <div>
            <h2 class="text-sm font-semibold text-gray-800 mb-3">Tidak Aktif <span> {{ optional(session('files'))->status ?? '(0)' }}</span></h2>

            <div class="space-y-3">
                <div class="bg-white rounded-xl border border-gray-200 p-4 flex justify-between items-center">
                    <div>
                        <h3 class="text-sm font-semibold text-gray-800">Statistika</h3>
                        <p class="text-xs text-gray-500">Bab 2 - Peluang</p>
                        <p class="text-xs text-gray-400">2026 - 02 - 01 | 23.59</p>
                    </div>
                    <button class="text-gray-400 hover:text-gray-600">
                        ⋮
                    </button>
                </div>
            </div>
        </div>

    </main>
</body>
</html>