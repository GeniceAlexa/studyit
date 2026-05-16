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
                <h1 class="text-xl font-bold">Reminder</h1>
                <h2 class="text-gray-600 text-sm">Pengingat jadwal dan tugas</h2>
            </div>

            <div>
                <a href="#" class="flex items-center gap-3 px-3 py-2 shadow-lgtext-sm text-black-500 rounded-lg bg-grey-200 hover:bg-gray-200">
                   <img src="{{ asset('images/tambah.png') }}" class="w-6 h-6 rounded-full" alt="">
                   Buat Reminder
                </a>
            </div>
        </header>

        <main class="flex-1 p-6 overflow-y-auto">
            <h2>Aktif (3)</h2>
            <div class="mt-4 space-y-4">
                <div class="bg-white rounded-lg border-2 border-black p-4 flex items-center justify-between">
                    <div>
                        <h3 class="font-bold text-lg">Statistika</h3>
                        <p class="text-gray-600 text-sm">Bab 2 - Peluang</p>
                        <p class="text-gray-600 text-sm">2026 - 02 - 01 | 23.59</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <button class="text-gray-400 hover:text-gray-600 px-1 flex-shrink-0">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <circle cx="12" cy="5" r="1.5"/><circle cx="12" cy="12" r="1.5"/><circle cx="12" cy="19" r="1.5"/>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg border-2 border-black p-4 flex items-center justify-between">
                    <div>
                        <h3 class="font-bold text-lg">Statistika</h3>
                        <p class="text-gray-600 text-sm">Bab 2 - Peluang</p>
                        <p class="text-gray-600 text-sm">2026 - 02 - 01 | 23.59</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <button class="text-gray-400 hover:text-gray-600 px-1 flex-shrink-0">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="5" r="1.5"/><circle cx="12" cy="12" r="1.5"/><circle cx="12" cy="19" r="1.5"/>
                        </svg>
                    </button>
                    </div>
                </div>

                <div class="bg-white rounded-lg border-2 border-black p-4 flex items-center justify-between">
                    <div>
                        <h3 class="font-bold text-lg">Statistika</h3>
                        <p class="text-gray-600 text-sm">Bab 2 - Peluang</p>
                        <p class="text-gray-600 text-sm">2026 - 02 - 01 | 23.59</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <button class="text-gray-400 hover:text-gray-600 px-1 flex-shrink-0">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="5" r="1.5"/><circle cx="12" cy="12" r="1.5"/><circle cx="12" cy="19" r="1.5"/>
                        </svg>
                    </button>
                    </div>
                </div>
            </div>

            <br> <br>
            <h2>Tidak Aktif (3)</h2>
            <div class="mt-4 space-y-4">
                <div class="bg-white rounded-lg border-2 border-black p-4 flex items-center justify-between">
                    <div>
                        <h3 class="font-bold text-lg">Statistika</h3>
                        <p class="text-gray-600 text-sm">Bab 2 - Peluang</p>
                        <p class="text-gray-600 text-sm">2026 - 02 - 01 | 23.59</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <button class="text-gray-400 hover:text-gray-600 px-1 flex-shrink-0">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="5" r="1.5"/><circle cx="12" cy="12" r="1.5"/><circle cx="12" cy="19" r="1.5"/>
                        </svg>
                    </button>
                    </div>
                </div>

                <div class="bg-white rounded-lg border-2 border-black p-4 flex items-center justify-between">
                    <div>
                        <h3 class="font-bold text-lg">Statistika</h3>
                        <p class="text-gray-600 text-sm">Bab 2 - Peluang</p>
                        <p class="text-gray-600 text-sm">2026 - 02 - 01 | 23.59</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <button class="text-gray-400 hover:text-gray-600 px-1 flex-shrink-0">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="5" r="1.5"/><circle cx="12" cy="12" r="1.5"/><circle cx="12" cy="19" r="1.5"/>
                        </svg>
                    </button>
                    </div>
                </div>

                <div class="bg-white rounded-lg border-2 border-black p-4 flex items-center justify-between">
                    <div>
                        <h3 class="font-bold text-lg">Statistika</h3>
                        <p class="text-gray-600 text-sm">Bab 2 - Peluang</p>
                        <p class="text-gray-600 text-sm">2026 - 02 - 01 | 23.59</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <button class="text-gray-400 hover:text-gray-600 px-1 flex-shrink-0">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="5" r="1.5"/><circle cx="12" cy="12" r="1.5"/><circle cx="12" cy="19" r="1.5"/>
                        </svg>
                    </button>
                    </div>
                </div>
            </div>
        </main>
</body>
</html>