<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studyit Landing Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>     

<body class="bg-white min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="bg-white w-full">
        <div class="max-w-7xl mx-auto px-10 py-4 flex justify-between items-center">
            <h1 class="font-semibold text-lg">Studyit</h1>

            <div class="flex items-center gap-4">
                <a href="{{ route('login') }}" class="text-sm text-black">Login</a>
                <button class="bg-[#7FB6D9] hover:bg-[#6aa7cf] text-black px-4 py-1 rounded-md text-sm">
                    <a href="{{ route ('regis') }}">Mulai</a>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="h-screen flex items-center justify-center text-center relative overflow-hidden bg-[#9CCFFF]/30">

        <!-- Background Gradient (kayak foto) -->
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


        <!-- Content -->
        <div class="relative z-10 max-w-2xl px-6">

            <h1 class="text-4xl md:text-5xl font-bold text-black mb-6 leading-tight">
                Belajar lebih Mudah & <br> Menyenangkan
            </h1>

            <p class="text-gray-800 text-sm md:text-base mb-10 leading-relaxed">
                StudyIT membantu mahasiswa Teknik Informatika berkolaborasi dalam belajar. 
                Kelola jadwal, materi, dan diskusi menggunakan satu platform yang sudah terintegrasi
            </p>

            <!-- Buttons -->
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

    </section>

</body>
</html>