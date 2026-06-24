<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi & File</title>
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
                <h1 class="text-xl font-bold">Materi & File</h1>
                <h2 class="text-gray-600 text-sm">Upload dan bagikan file</h2>
            </div>

            <button onclick="document.getElementById('modalBuat').classList.remove('hidden')" class="flex items-center gap-3 px-3 py-2 text-sm shadow-lg text-black rounded-lg bg-grey-200 hover:bg-gray-200">
                <img src="{{ asset('images/tambah.png') }}" class="w-5 h-5">
                Buat Reminder
            </button>
        </header>

        <main class="flex-1 overflow-y-auto p-6">
            <div class="flex items-center gap-2 bg-gray-100 border border-gray-200 rounded-lg px-3 py-2 w-300">
                <img src="{{ asset('images/search.png') }}" class="w-4 h-4 opacity-50" alt="">
                <input type="text" placeholder="Search"
                    class="bg-transparent text-sm outline-none w-full text-gray-600 placeholder-gray-400">
            </div>

            <div class="space-y-4 mt-6">
                <div class="flex items-center gap-2 bg-white-100 border border-black-100 rounded-lg px-2 py-2 w-fit">
                    <h2 class="text-sm font-medium underline underline-offset-2"> <span> {{ optional(session('reminders'))->id_user ?? '0' }}</span> Total File</h2>
                </div>
            </div>

            <div class="mt-4 space-y-4">
                @foreach ($files as $file)
                <div class="bg-white rounded-lg p-4 border border-black-100 flex items-center justify-between">
                    <div>
                        <h3>{{ $file->title }}</h3>

                        <p class="text-gray-600 text-sm">
                            {{ $file->uploader->name ?? 'Unknown' }}
                            |
                            {{ date('Y-m-d', strtotime($file->created_at)) }}
                        </p>
                    </div>

                    <div class="flex items-center gap-2">

                        <!-- Download -->
                        <a href="{{ asset('storage/'.$file->file_path) }}"
                        download
                        class="flex items-center">
                            <img src="{{ asset('images/upload.png') }}"
                                class="w-4 h-4 opacity-50"
                                alt="">
                        </a>

                        <!-- Hapus -->
                        <form action="{{ route('materifile.destroy', $file->id_file) }}"
                            method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit">
                                <img src="{{ asset('images/sampah.png') }}"
                                    class="w-4 h-4 opacity-50"
                                    alt="">
                            </button>
                        </form>

                    </div>
                </div>
                @endforeach

            </div>
        </main>
    </div>
    <div id="modalBuat" class="hidden fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50">
        <div class="bg-white w-96 p-6 rounded-lg relative">
            <div class="flex justify-between items-center mb-4">
                <h2 class="font-semibold">Upload File</h2>
                <button 
                    onclick="document.getElementById('modalBuat').classList.add('hidden')">

                    <img src="{{ asset('images/silang.png') }}" class="w-5 h-5">    
                </button>
            </div>

            <form action="{{ route('materifile.store') }}" method="POST" enctype="multipart/form-data" class="space-y-3">
                @csrf

                <input type="text" name="title" placeholder="Judul File" 
                    class="w-full border px-3 py-2 rounded">

                <input type="file" name="file" placeholder="Klik atau drag file"
                    class="w-full border px-10 py-20 rounded text-sm">

                <button type="submit"
                    class="w-full bg-black text-white py-2 rounded">
                    Upload
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