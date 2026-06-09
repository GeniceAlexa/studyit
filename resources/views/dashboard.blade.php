<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
        <header class="bg-white border-b border-gray-200 px-6 py-3 flex items-center justify-between">
            <div class="flex items-center gap-2 bg-gray-100 border border-gray-200 rounded-lg px-3 py-2 w-56">
                <img src="{{ asset('images/search.png') }}" class="w-4 h-4 opacity-50" alt="">
                <input type="text" placeholder="Search"
                    class="bg-transparent text-sm outline-none w-full text-gray-600 placeholder-gray-400">
            </div>
            <div class="flex items-center gap-2 text-sm text-gray-500 cursor-pointer">
                <img src="{{ asset('images/user.png') }}" class="w-5 h-5" alt="">
                <span>{{ session('user')->name ?? 'Username' }}</span>
            </div>
        </header>

        <div class="flex-1 overflow-y-auto p-6 space-y-6">
            <div class="bg-white rounded-xl border border-gray-200 px-6 py-5">
                <h1 class="text-base font-semibold text-gray-800">Selamat Datang di Dashboard Studyit</h1>
                <p class="text-sm text-gray-500 mt-1">Temukan semua yang Anda butuhkan untuk belajar dengan mudah dan efisien.</p>
            </div>
            <div class="grid grid-cols-3 gap-4">
                <div class="bg-white rounded-xl border border-gray-200 p-4 flex flex-col gap-3 hover:shadow-md transition cursor-pointer">
                    <img src="{{ asset('images/a-profile.png') }}" class="w-7 h-7" alt="profile">
                    <div>
                        <h2 class="text-sm font-semibold text-gray-800">Room Belajar</h2>
                        <p class="text-xs text-gray-500 mt-1 leading-relaxed">Gabung dengan teman-temanmu untuk belajar bersama dalam ruang belajar virtual.</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl border border-gray-200 p-4 flex flex-col gap-3 hover:shadow-md transition cursor-pointer">
                    <img src="{{ asset('images/a-jadwal.png') }}" class="w-7 h-7" alt="jadwal">
                    <div>
                        <h2 class="text-sm font-semibold text-gray-800">Jadwal</h2>
                        <p class="text-xs text-gray-500 mt-1 leading-relaxed">Atur jadwal belajarmu dan jangan lewatkan sesi penting.</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl border border-gray-200 p-4 flex flex-col gap-3 hover:shadow-md transition cursor-pointer">
                    <img src="{{ asset('images/a-notif.png') }}" class="w-7 h-7" alt="notif">
                    <div>
                        <h2 class="text-sm font-semibold text-gray-800">Reminder</h2>
                        <p class="text-xs text-gray-500 mt-1 leading-relaxed">Dapatkan pengingat untuk tugas, ujian, dan kegiatan belajar lainnya.</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl border border-gray-200 p-4 flex flex-col gap-3 hover:shadow-md transition cursor-pointer">
                    <img src="{{ asset('images/a-materi.png') }}" class="w-7 h-7" alt="materi">
                    <div>
                        <h2 class="text-sm font-semibold text-gray-800">Materi & File</h2>
                        <p class="text-xs text-gray-500 mt-1 leading-relaxed">Akses materi pembelajaran dan file penting kapan saja.</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl border border-gray-200 p-4 flex flex-col gap-3 hover:shadow-md transition cursor-pointer">
                    <img src="{{ asset('images/a-chat.png') }}" class="w-7 h-7" alt="chat">
                    <div>
                        <h2 class="text-sm font-semibold text-gray-800">Chat</h2>
                        <p class="text-xs text-gray-500 mt-1 leading-relaxed">Berkomunikasi dengan teman sekelas dan guru secara real-time.</p>
                    </div>
                </div>
            </div>

            <div>
                <h2 class="text-sm font-semibold text-gray-800 mb-3">Aktivitas Terbaru</h2>
                <div class="bg-white rounded-xl border border-gray-200 overflow-hidden divide-y divide-gray-100">
                    <div class="flex items-center justify-between px-4 py-3 hover:bg-gray-50 transition">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('images/materi.png') }}" class="w-4 h-4 opacity-60" alt="">
                            <span class="text-sm text-gray-700">David mengunggah materi peluang.pdf</span>
                        </div>
                        <div class="flex items-center gap-1 text-xs text-gray-400">
                            <img src="{{ asset('images/time.png') }}" class="w-3 h-3 opacity-50" alt="">
                            2 jam yang lalu
                        </div>
                    </div>
                    <div class="flex items-center justify-between px-4 py-3 hover:bg-gray-50 transition">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('images/jadwal.png') }}" class="w-4 h-4 opacity-60" alt="">
                            <span class="text-sm text-gray-700">Room 'Basis Data' ditambahkan</span>
                        </div>
                        <div class="flex items-center gap-1 text-xs text-gray-400">
                            <img src="{{ asset('images/time.png') }}" class="w-3 h-3 opacity-50" alt="">
                            2 jam yang lalu
                        </div>
                    </div>
                    <div class="flex items-center justify-between px-4 py-3 hover:bg-gray-50 transition">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('images/materi.png') }}" class="w-4 h-4 opacity-60" alt="">
                            <span class="text-sm text-gray-700">David mengunggah materi peluang.pdf</span>
                        </div>
                        <div class="flex items-center gap-1 text-xs text-gray-400">
                            <img src="{{ asset('images/time.png') }}" class="w-3 h-3 opacity-50" alt="">
                            2 jam yang lalu
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>