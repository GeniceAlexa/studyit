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
                <a href="dashboard" class="flex items-center gap-3 px-3 py-2 rounded-lg text-white bg-gray-700 text-sm">
                    <img src="{{ asset('images/dashboard.png') }}" class="w-4 h-4" alt="">
                    Dashboard
                </a>
            </li>
            <li>
                <a href="room" class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-400 hover:bg-gray-700 hover:text-white text-sm transition">
                    <img src="{{ asset('images/profile.png') }}" class="w-4 h-4" alt="">
                    Room Belajar
                </a>
            </li>
            <li>
                <a href="jadwal" class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-400 hover:bg-gray-700 hover:text-white text-sm transition">
                    <img src="{{ asset('images/jadwal.png') }}" class="w-4 h-4" alt="">
                    Jadwal
                </a>
            </li>
            <li>
                <a href="reminder" class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-400 hover:bg-gray-700 hover:text-white text-sm transition">
                    <img src="{{ asset('images/notif.png') }}" class="w-4 h-4" alt="">
                    Reminder
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-400 hover:bg-gray-700 hover:text-white text-sm transition">
                    <img src="{{ asset('images/materi.png') }}" class="w-4 h-4" alt="">
                    Materi & File
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-400 hover:bg-gray-700 hover:text-white text-sm transition">
                    <img src="{{ asset('images/chat.png') }}" class="w-4 h-4" alt="">
                    Chat
                </a>
            </li>
        </ul>

        <div class="px-3">
            <a href="#" class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-400 hover:bg-gray-700 hover:text-white text-sm transition">
                <img src="{{ asset('images/pengaturan.png') }}" class="w-4 h-4" alt="">
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

            <div>
                <a href="#" class="flex items-center gap-3 px-3 py-2 text-sm text-black-500 background-gray-200 rounded-lg hover:bg-gray-200 transition">
                   <img src="{{ asset('images/tambah.png') }}" class="w-6 h-6 rounded-full" alt="">
                   Buat Room
                </a>
            </div>
        </header>

        <main class="flex-1 p-6 overflow-y-auto">
            <div class="flex items-center gap-2 bg-gray-100 border border-gray-200 rounded-lg px-3 py-2 w-300">
                <img src="{{ asset('images/search.png') }}" class="w-4 h-4 opacity-50" alt="">
                <input type="text" placeholder="Search"
                    class="bg-transparent text-sm outline-none w-full text-gray-600 placeholder-gray-400">
            </div>
            
            <div class="space-y-3">

                <!-- Room Item -->
                <div class="bg-white rounded-xl border border-gray-200 px-5 py-4 flex items-center gap-4 hover:shadow-sm transition">
                    <div class="w-12 h-12 bg-gray-200 rounded-lg flex-shrink-0"></div>
                    <div class="flex-1 min-w-0">
                        <h2 class="text-sm font-semibold text-gray-900">Statistika</h2>
                        <p class="text-xs text-gray-500">Dibuat oleh Rara</p>
                        <p class="text-xs text-gray-500">5/10 anggota</p>
                    </div>
                    <button class="flex items-center gap-2 bg-gray-900 text-white text-xs font-medium px-4 py-2 rounded-lg hover:bg-gray-700 transition flex-shrink-0">
                        <img src="{{ asset('images/usertambah.png') }}" class="w-4 h-4 opacity-50" alt="">
                        Gabung
                    </button>
                    <button class="text-gray-400 hover:text-gray-600 px-1 flex-shrink-0">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="5" r="1.5"/><circle cx="12" cy="12" r="1.5"/><circle cx="12" cy="19" r="1.5"/>
                        </svg>
                    </button>
                </div>

                <div class="bg-white rounded-xl border border-gray-200 px-5 py-4 flex items-center gap-4 hover:shadow-sm transition">
                    <div class="w-12 h-12 bg-gray-200 rounded-lg flex-shrink-0"></div>
                    <div class="flex-1 min-w-0">
                        <h2 class="text-sm font-semibold text-gray-900">Algoritma & Pemrograman</h2>
                        <p class="text-xs text-gray-500">Dibuat oleh gara</p>
                        <p class="text-xs text-gray-500">5/10 anggota</p>
                    </div>
                    <button class="flex items-center gap-2 bg-gray-900 text-white text-xs font-medium px-4 py-2 rounded-lg hover:bg-gray-700 transition flex-shrink-0">
                        <img src="{{ asset('images/usertambah.png') }}" class="w-4 h-4 opacity-50" alt="">
                        Gabung
                    </button>
                    <button class="text-gray-400 hover:text-gray-600 px-1 flex-shrink-0">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="5" r="1.5"/><circle cx="12" cy="12" r="1.5"/><circle cx="12" cy="19" r="1.5"/>
                        </svg>
                    </button>
                </div>

                <div class="bg-white rounded-xl border border-gray-200 px-5 py-4 flex items-center gap-4 hover:shadow-sm transition">
                    <div class="w-12 h-12 bg-gray-200 rounded-lg flex-shrink-0"></div>
                    <div class="flex-1 min-w-0">
                        <h2 class="text-sm font-semibold text-gray-900">Basis Data</h2>
                        <p class="text-xs text-gray-500">Dibuat oleh Kina</p>
                        <p class="text-xs text-gray-500">5/10 anggota</p>
                    </div>
                    <button class="flex items-center gap-2 bg-gray-900 text-white text-xs font-medium px-4 py-2 rounded-lg hover:bg-gray-700 transition flex-shrink-0">
                        <img src="{{ asset('images/usertambah.png') }}" class="w-4 h-4 opacity-50" alt="">
                        Gabung
                    </button>
                    <button class="text-gray-400 hover:text-gray-600 px-1 flex-shrink-0">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="5" r="1.5"/><circle cx="12" cy="12" r="1.5"/><circle cx="12" cy="19" r="1.5"/>
                        </svg>
                    </button>
                </div>

                <div class="bg-white rounded-xl border border-gray-200 px-5 py-4 flex items-center gap-4 hover:shadow-sm transition">
                    <div class="w-12 h-12 bg-gray-200 rounded-lg flex-shrink-0"></div>
                    <div class="flex-1 min-w-0">
                        <h2 class="text-sm font-semibold text-gray-900">Pemrograman Berorientasi Objek</h2>
                        <p class="text-xs text-gray-500">Dibuat oleh Cia</p>
                        <p class="text-xs text-gray-500">5/10 anggota</p>
                    </div>
                    <button class="flex items-center gap-2 bg-gray-900 text-white text-xs font-medium px-4 py-2 rounded-lg hover:bg-gray-700 transition flex-shrink-0">
                        <img src="{{ asset('images/usertambah.png') }}" class="w-4 h-4 opacity-50" alt="">
                        Gabung
                    </button>
                    <button class="text-gray-400 hover:text-gray-600 px-1 flex-shrink-0">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="5" r="1.5"/><circle cx="12" cy="12" r="1.5"/><circle cx="12" cy="19" r="1.5"/>
                        </svg>
                    </button>
                </div>
        </main>
</body>
</html>