<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-25px); }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-float-delay {
            animation: float 6s ease-in-out infinite;
            animation-delay: 2s;
        }
    </style>
</head>

<body class="bg-gray-800 flex items-center justify-center min-h-screen">

    <div class="flex w-[850px] h-[520px] bg-white rounded-2xl shadow-2xl overflow-hidden">

        <!-- LEFT -->
        <div class="w-1/2 bg-[#e9eef3] relative flex items-center justify-center p-10">

            <!-- Blob Atas -->
            <img src="{{ asset('images/l-blob.png') }}"
                class="absolute top-[-30px] right-[-40px] w-[180px] animate-float z-10">

            <img src="{{ asset('images/l-blob1.png') }}"
                class="absolute bottom-[-40px] left-[1px] w-[180px] opacity-50 animate-float-delay">

            <!-- Text -->
            <div class="text-center z-10">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">
                    Selamat Datang di Studyit
                </h2>

                <p class="text-sm text-gray-600 leading-relaxed">
                    Platform kolaborasi belajar untuk mahasiswa Teknik Informatika.
                    Belajar, Diskusi bersama jadi lebih mudah dan menyenangkan.
                </p>
            </div>
        </div>

        <!-- RIGHT -->
        <div class="w-1/2 flex items-center justify-center bg-white">

            <div class="w-[85%] border border-gray-300 rounded-2xl p-8 shadow-sm">

                <h1 class="text-xl font-bold text-gray-800 mb-1">
                    Masuk ke Akun
                </h1>

                <p class="text-xs text-gray-400 mb-6">
                    Masuk menggunakan email dan password
                </p>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-4">
                        <label class="text-sm text-gray-600">Email</label>
                        <input type="email" name="email"
                            class="w-full mt-1 border border-gray-300 rounded-md px-3 py-2 text-sm
                            focus:outline-none focus:ring-2 focus:ring-blue-200 focus:border-blue-400">
                    </div>

                    <div class="mb-5">
                        <label class="text-sm text-gray-600">Password</label>
                        <input type="password" name="password"
                            class="w-full mt-1 border border-gray-300 rounded-md px-3 py-2 text-sm
                            focus:outline-none focus:ring-2 focus:ring-blue-200 focus:border-blue-400">
                    </div>

                    <button type="submit"
                        class="w-full bg-blue-300 hover:bg-blue-400 text-gray-800 font-semibold py-2 rounded-md transition">
                        MASUK
                    </button>

                </form>

                <p class="text-xs text-gray-500 text-center mt-6">
                    Belum punya akun?
                    <a href="{{ route('regis') }}" class="text-blue-400 hover:underline">
                        Daftar Sekarang
                    </a>
                </p>

            </div>

        </div>

    </div>

</body>
</html>