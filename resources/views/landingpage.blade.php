<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studyit</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>     

<body class="bg-white min-h-screen flex flex-col">

    <nav class="bg-white w-full">
        <div class="max-w-7xl mx-auto px-10 py-4 flex justify-between items-center">
            <h1 class="font-semibold text-lg">Studyit</h1>

            <div class="flex items-center gap-4">
                <a href="{{ route('login') }}" class="text-sm text-black hover:bg-[#5E7C99] rounded-md px-4 py-1">Login</a>
                <button class="bg-[#5E7C99] hover:bg-[#9CCFFF] text-white px-4 py-1 rounded-md text-sm">
                    <a href="{{ route ('regis') }}">Mulai</a>
                </button>
            </div>
        </div>
    </nav>

    <section class="h-screen flex items-center justify-center text-center relative overflow-hidden bg-[#9CCFFF]/30">
        <div class="absolute" style="
            width: 700px; height: 400px;
            border-radius: 50%;
            background: linear-gradient(135deg, #8EC0D9 0%, #4B6673 100%);
            top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            filter: blur(50px);
            opacity: 0.75;
            pointer-events: none;
            ">
        </div>


        <div class="relative z-10 max-w-2xl px-6">

            <h1 class="text-4xl md:text-5xl font-bold text-black mb-6 leading-tight">
                Belajar lebih Mudah & <br> Menyenangkan
            </h1>

            <p class="text-gray-800 text-sm md:text-base mb-10 leading-relaxed">
                Studyit membantu mahasiswa Teknik Informatika berkolaborasi dalam belajar. 
                Kelola jadwal, materi, dan diskusi menggunakan satu platform yang sudah terintegrasi
            </p>

            <div class="flex justify-center gap-6">
                <button class="bg-[#8FC8EB] hover:bg-[#7fbce0] text-white px-6 py-2 rounded-md shadow">
                    Mulai Sekarang
                </button>

                <button class="bg-[#8FC8EB] hover:bg-[#7fbce0] text-white px-6 py-2 rounded-md shadow">
                    Lihat Fitur
                </button>
            </div>
        </div>
    </section>

    <section class="h-screen flex flex-col items-center justify-center text-center relative overflow-hidden px-40 gap-8">
        <div>
            <h1 class="font-bold text-4xl leading-tight">
                Semua yang kamu butuhkan
            </h1>

            <p class="text-gray-800 text-sm md:text-base mt-4 leading-relaxed">
                Fitur utama yang dirancang khusus untuk mendukung proses belajar kolaboratif mahasiswa.
            </p>
        </div>

        <div class="grid grid-cols-3 gap-4">
                <div class="bg-white rounded-xl border border-gray-200 p-4 flex flex-row gap-3 hover:shadow-md transition cursor-pointer">
                    <img src="{{ asset('images/a-profile.png') }}" class="w-7 h-7" alt="profile">
                    <div class="text-left">
                        <h2 class="text-sm font-semibold text-gray-800">Room Belajar</h2>
                        <p class="text-xs text-gray-500 mt-1 leading-relaxed">Gabung dengan teman-temanmu untuk belajar bersama dalam ruang belajar virtual.</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl border border-gray-200 p-4 flex flex-row gap-3 hover:shadow-md transition cursor-pointer">
                    <img src="{{ asset('images/a-jadwal.png') }}" class="w-7 h-7" alt="jadwal">
                    <div class="text-left">
                        <h2 class="text-sm font-semibold text-gray-800">Jadwal</h2>
                        <p class="text-xs text-gray-500 mt-1 leading-relaxed">Atur jadwal belajarmu dan jangan lewatkan sesi penting.</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl border border-gray-200 p-4 flex flex-row gap-3 hover:shadow-md transition cursor-pointer">
                    <img src="{{ asset('images/a-notif.png') }}" class="w-7 h-7" alt="notif">
                    <div class="text-left">
                        <h2 class="text-sm font-semibold text-gray-800">Reminder</h2>
                        <p class="text-xs text-gray-500 mt-1 leading-relaxed">Dapatkan pengingat untuk tugas, ujian, dan kegiatan belajar lainnya.</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl border border-gray-200 p-4 flex flex-row gap-3 hover:shadow-md transition cursor-pointer">
                    <img src="{{ asset('images/a-materi.png') }}" class="w-7 h-7" alt="materi">
                    <div class="text-left">
                        <h2 class="text-sm font-semibold text-gray-800">Materi & File</h2>
                        <p class="text-xs text-gray-500 mt-1 leading-relaxed">Akses materi pembelajaran dan file penting kapan saja.</p>
                    </div>
                </div>
                <div class="bg-white rounded-xl border border-gray-200 p-4 flex flex-row gap-3 hover:shadow-md transition cursor-pointer">
                    <img src="{{ asset('images/a-chat.png') }}" class="w-7 h-7" alt="chat">
                    <div class="text-left">
                        <h2 class="text-sm font-semibold text-gray-800">Chat</h2>
                        <p class="text-xs text-gray-500 mt-1 leading-relaxed">Berkomunikasi dengan teman sekelas dan guru secara real-time.</p>
                    </div>
                </div>
            </div>
    </section>

    <section class="min-h-screen flex items-center px-10 md:px-40 py-20 h-14 bg-gradient-to-t from-[#5E7C99]/50 to-[#9CCFFF]/50 gap-10">

        <div class="flex flex-col md:flex-row items-center gap-16 w-full">
            <div class="md:w-1/2 text-left">
                <h1 class="font-bold text-4xl text-black mb-4">
                    Kenapa Studyit?
                </h1>

                <h2 class="font-semibold text-lg text-gray-800 leading-relaxed">
                    Fokus Belajar,<br>
                    Biar Kami yang Atur
                </h2>

                <ul class="mt-6 text-sm text-gray-700 space-y-2">
                    <li>Kolaborasi secara real time antar mahasiswa.</li>
                    <li>File sharing yang mudah & cepat.</li>
                    <li>Chat terintegrasi di setiap room.</li>
                    <li>Sinkronisasi jadwal otomatis.</li>
                    <li>Notifikasi pesan untuk deadline.</li>
                </ul>
            </div>

            <div class="md:w-1/2">

                <div class="bg-white/10 backdrop-blur-xl border border-white/30 rounded-2xl p-6 shadow-xl space-y-4">

                    <!-- ITEM -->
                    <div class="flex items-center gap-3 bg-white/20 rounded-lg px-4 py-2 border border-white/30">
                        <img src="{{ asset('images/a-profile.png') }}" class="w-6 h-6">
                        <p class="text-sm text-black">Belajar dan diskusi dalam satu ruang</p>
                    </div>

                    <div class="flex items-center gap-3 bg-white/20 rounded-lg px-4 py-2 border border-white/30">
                        <img src="{{ asset('images/a-jadwal.png') }}" class="w-6 h-6">
                        <p class="text-sm text-black">Semua jadwal tersusun rapi</p>
                    </div>

                    <div class="flex items-center gap-3 bg-white/20 rounded-lg px-4 py-2 border border-white/30">
                        <img src="{{ asset('images/a-notif.png') }}" class="w-6 h-6">
                        <p class="text-sm text-black">Info penting tanpa terlewat</p>
                    </div>

                    <div class="flex items-center gap-3 bg-white/20 rounded-lg px-4 py-2 border border-white/30">
                        <img src="{{ asset('images/a-materi.png') }}" class="w-6 h-6">
                        <p class="text-sm text-black">Semua file dalam satu tempat</p>
                    </div>

                    <div class="flex items-center gap-3 bg-white/20 rounded-lg px-4 py-2 border border-white/30">
                        <img src="{{ asset('images/a-chat.png') }}" class="w-6 h-6">
                        <p class="text-sm text-black">Diskusi tanpa pindah aplikasi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="min-h-screen flex items-center justify-center bg-white px-10">
        <div class="bg-[#9CCFFF]/50 rounded-2xl px-10 py-12 text-center max-w-3xl w-full">
            <h1 class="text-2xl md:text-3xl font-semibold text-black mb-4">Siap Mulai Belajar Bareng?</h1>
            <p class="ttext-gray-700 text-sm md:text-base leading-relaxed mb-8">
                Bergabung dengan ratusan mahasiswa Teknik Informatika yang sudah merasakan kemudahan kolaborasi belajar.
            </p>
            <button class="bg-[#9CCFFF]/50 hover:bg-[#5E7C99] text-white px-6 py-2 rounded-md shadow transition">
                Mulai Sekarang
            </button>
        </div>
    </section>

    <footer class="bg-[#9CCFFF] px-10 py-6">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <h1 class="font-bold">Studyit</h1>
            <p>Copyright &copy; 2026 Studyit. All Rights Reserverd</p>
        </div>
    </footer>
</body>
</html>