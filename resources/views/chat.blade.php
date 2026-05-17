<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal</title>
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
                <a href="materifile" class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-400 hover:bg-gray-700 hover:text-white text-sm transition">
                    <img src="{{ asset('images/materi.png') }}" class="w-4 h-4" alt="">
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

    <div class="flex-1 flex flex-col overflow-hidden p-6 bg-white">
        <div class="flex flex-1 overflow-hidden border border-gray-200 rounded-lg">

            {{-- Sidebar Room List --}}
            <div class="w-52 flex flex-col bg-white-100 border-r border-gray-200 flex-shrink-0">

                <div class="px-3 pt-4 pb-2 text-[16px] font-semibold tracking-wide">
                    Chat
                </div>

                {{-- Search --}}
                <div class="mx-2 mb-2 flex items-center gap-2 bg-white border border-gray-200 rounded-lg px-2 py-1.5 text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <circle cx="11" cy="11" r="8"/>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                    </svg>
                    <span class="text-[11px]">Search Room</span>
                </div>

                {{-- Daftar Room (statis) --}}
                <div class="overflow-y-auto flex-1">

                    <a href="#" class="block px-3 py-2.5 border-b border-gray-100 bg-white">
                        <div class="flex items-center justify-between mb-0.5">
                            <span class="text-[12px] font-semibold text-gray-800 truncate">Statistika</span>
                            <div class="w-4 h-4 bg-blue-400 rounded-full flex items-center justify-center flex-shrink-0 ml-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <circle cx="12" cy="12" r="10"/>
                                    <line x1="12" y1="8" x2="12" y2="12"/>
                                    <line x1="12" y1="16" x2="12.01" y2="16"/>
                                </svg>
                            </div>
                        </div>
                        <p class="text-[10px] text-gray-400 truncate">Sasa: Sudah submit belum?</p>
                    </a>

                    <a href="#" class="block px-3 py-2.5 border-b border-gray-100 hover:bg-white transition-colors">
                        <div class="flex items-center justify-between mb-0.5">
                            <span class="text-[12px] font-semibold text-gray-800 truncate">Matematika</span>
                            <div class="w-4 h-4 bg-blue-400 rounded-full flex items-center justify-center flex-shrink-0 ml-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <circle cx="12" cy="12" r="10"/>
                                    <line x1="12" y1="8" x2="12" y2="12"/>
                                    <line x1="12" y1="16" x2="12.01" y2="16"/>
                                </svg>
                            </div>
                        </div>
                        <p class="text-[10px] text-gray-400 truncate">Budi: Ada yang bisa bantu?</p>
                    </a>

                    <a href="#" class="block px-3 py-2.5 border-b border-gray-100 hover:bg-white transition-colors">
                        <div class="flex items-center justify-between mb-0.5">
                            <span class="text-[12px] font-semibold text-gray-800 truncate">Fisika</span>
                            <div class="w-4 h-4 bg-blue-400 rounded-full flex items-center justify-center flex-shrink-0 ml-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <circle cx="12" cy="12" r="10"/>
                                    <line x1="12" y1="8" x2="12" y2="12"/>
                                    <line x1="12" y1="16" x2="12.01" y2="16"/>
                                </svg>
                            </div>
                        </div>
                        <p class="text-[10px] text-gray-400 truncate">Ani: Tugasnya susah banget</p>
                    </a>

                    <a href="#" class="block px-3 py-2.5 border-b border-gray-100 hover:bg-white transition-colors">
                        <div class="flex items-center justify-between mb-0.5">
                            <span class="text-[12px] font-semibold text-gray-800 truncate">Kimia</span>
                            <div class="w-4 h-4 bg-blue-400 rounded-full flex items-center justify-center flex-shrink-0 ml-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                    <circle cx="12" cy="12" r="10"/>
                                    <line x1="12" y1="8" x2="12" y2="12"/>
                                    <line x1="12" y1="16" x2="12.01" y2="16"/>
                                </svg>
                            </div>
                        </div>
                        <p class="text-[10px] text-gray-400 truncate">Dani: Kapan UTS?</p>
                    </a>

                </div>
            </div>

            {{-- Area Pesan --}}
            <div class="flex flex-col flex-1 min-w-0">

                {{-- Header Room Aktif --}}
                <div class="px-5 py-3 border-b border-gray-200 bg-white flex-shrink-0">
                    <div class="text-[15px] font-semibold">Statistika</div>
                    <div class="text-[12px] text-gray-400 mt-0.5">Room Belajar</div>
                </div>

                {{-- Daftar Pesan (statis) --}}
                <div class="flex-1 overflow-y-auto px-5 py-4 flex flex-col gap-2 bg-white-100">

                    {{-- Pesan masuk --}}
                    <div class="flex flex-col gap-1 items-start">
                        <span class="text-[10px] text-gray-400 px-1">Cika</span>
                        <div class="max-w-[75%] px-3 py-2 bg-blue-200 rounded-2xl rounded-bl-sm">
                            <p class="text-[12px] text-blue-900 leading-relaxed">Halo, sudah ada yang belajar?</p>
                            <p class="text-[9px] text-blue-600 mt-1 text-right">10.00</p>
                        </div>
                    </div>

                    {{-- Pesan masuk --}}
                    <div class="flex flex-col gap-1 items-start">
                        <span class="text-[10px] text-gray-400 px-1">Cika</span>
                        <div class="max-w-[75%] px-3 py-2 bg-blue-200 rounded-2xl rounded-bl-sm">
                            <p class="text-[12px] text-blue-900 leading-relaxed">Ada yang mau diskusi bareng?</p>
                            <p class="text-[9px] text-blue-600 mt-1 text-right">10.01</p>
                        </div>
                    </div>

                    {{-- Pesan keluar --}}
                    <div class="flex flex-col gap-1 items-end">
                        <div class="max-w-[75%] px-3 py-2 bg-blue-200 rounded-2xl rounded-br-sm opacity-80">
                            <p class="text-[12px] text-blue-900 leading-relaxed">Siap, aku udah di sini!</p>
                            <p class="text-[9px] text-blue-600 mt-1 text-right">10.02</p>
                        </div>
                    </div>

                </div>

                {{-- Form Kirim Pesan --}}
                <div class="px-5 py-3 border-t border-gray-200 bg-white flex-shrink-0">
                    <div class="flex items-center gap-3">
                        <input
                            type="text"
                            placeholder="Tulis pesan..."
                            disabled
                            class="flex-1 bg-gray-100 rounded-full px-4 py-2 text-[12px] text-gray-800
                                   outline-none border border-transparent placeholder-gray-400"
                        />
                        <button type="button"
                                class="w-8 h-8 bg-blue-400 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="22" y1="2" x2="11" y2="13"/>
                                <polygon points="22 2 15 22 11 13 2 9 22 2"/>
                            </svg>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
</body>
</html>