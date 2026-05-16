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
                    <h1 class="text-xl font-bold">Jadwal</h1>
                    <h2 class="text-gray-600 text-sm">Lihat dan kelola jadwal Anda</h2>
                </div>

                <div>
                    <a href="#" class="flex items-center gap-3 px-3 py-2 text-sm shadow-lg text-black-500 rounded-lg bg-grey-200 hover:bg-gray-200">
                    <img src="{{ asset('images/tambah.png') }}" class="w-6 h-6 rounded-full" alt="">
                    Tambah Jadwal
                    </a>
                </div>
            </header>

            <main class="flex-1 overflow-y-auto p-6">
                <div class="grid grid-cols-2 gap-6 p-6">
                    <div class="border rounded-lg p-6">
                    <h2 class="text-center text-lg font-semibold mb-4">April 2026</h2>

                    <div class="grid grid-cols-7 gap-3 text-center" id="calendar">
                        <!-- tanggal -->
                        <span class="cursor-pointer" onclick="pilihTanggal(event,1)">1</span>
                        <span class="cursor-pointer" onclick="pilihTanggal(event,2)">2</span>
                        <span class="cursor-pointer" onclick="pilihTanggal(event,3)">3</span>
                        <span class="cursor-pointer" onclick="pilihTanggal(event,4)">4</span>
                        <span class="cursor-pointer" onclick="pilihTanggal(event,5)">5</span>
                        <span class="cursor-pointer" onclick="pilihTanggal(event,6)">6</span>
                        <span class="cursor-pointer" onclick="pilihTanggal(event,7)">7</span>

                        <span class="cursor-pointer" onclick="pilihTanggal(event,8)">8</span>
                        <span class="cursor-pointer" onclick="pilihTanggal(event,9)">9</span>
                        <span class="cursor-pointer" onclick="pilihTanggal(event,10)">10</span>
                        <span class="cursor-pointer" onclick="pilihTanggal(event,11)">11</span>

                        <span class="cursor-pointer bg-blue-200 rounded px-2" onclick="pilihTanggal(event,12)">12</span>

                        <span class="cursor-pointer" onclick="pilihTanggal(event,13)">13</span>
                        <span class="cursor-pointer" onclick="pilihTanggal(event,14)">14</span>
                        <span class="cursor-pointer" onclick="pilihTanggal(event,15)">15</span>
                        <span class="cursor-pointer" onclick="pilihTanggal(event,16)">16</span>
                        <span class="cursor-pointer" onclick="pilihTanggal(event,17)">17</span>
                        <span class="cursor-pointer" onclick="pilihTanggal(event,18)">18</span>
                        <span class="cursor-pointer" onclick="pilihTanggal(event,19)">19</span>
                        <span class="cursor-pointer" onclick="pilihTanggal(event,20)">20</span>
                        <span class="cursor-pointer" onclick="pilihTanggal(event,21)">21</span>
                        <span class="cursor-pointer" onclick="pilihTanggal(event,22)">22</span>
                        <span class="cursor-pointer" onclick="pilihTanggal(event,23)">23</span>
                        <span class="cursor-pointer" onclick="pilihTanggal(event,24)">24</span>
                        <span class="cursor-pointer" onclick="pilihTanggal(event,25)">25</span>
                        <span class="cursor-pointer" onclick="pilihTanggal(event,26)">26</span>
                        <span class="cursor-pointer" onclick="pilihTanggal(event,27)">27</span>
                        <span class="cursor-pointer" onclick="pilihTanggal(event,28)">28</span>
                        <span class="cursor-pointer" onclick="pilihTanggal(event,29)">29</span>
                        <span class="cursor-pointer" onclick="pilihTanggal(event,30)">30</span>
                    </div>
                </div>

                        <!-- KANAN (LIST) -->
                        <div class="border rounded-lg p-6 h-[400px] overflow-y-auto">
                            <div id="jadwalList" class="space-y-3">
                                <p class="text-gray-400">Pilih tanggal dulu</p>
                            </div>
                        </div>

                    </div>
                </main>
            </div>

            <script>
                const dataJadwal = {
                    12: [
                        { nama: "Statistika", waktu: "08.00 - 09.00", tipe: "Online" },
                        { nama: "Basis Data", waktu: "10.00 - 11.00", tipe: "Offline" }
                    ],
                    5: [
                        { nama: "Pemrograman", waktu: "09.00 - 10.00", tipe: "Online" }
                    ]
                };

                function pilihTanggal(el, tanggal) {

                    // reset semua warna
                    document.querySelectorAll("#calendar span").forEach(item => {
                        item.classList.remove("bg-blue-200");
                    });

                    // highlight
                    el.target.classList.add("bg-blue-200", "rounded", "px-2");

                    const list = document.getElementById("jadwalList");
                    list.innerHTML = "";

                    const jadwal = dataJadwal[tanggal];

                    if (!jadwal) {
                        list.innerHTML = "<p class='text-gray-400'>Tidak ada jadwal</p>";
                        return;
                    }

                    jadwal.forEach(item => {
                        list.innerHTML += `
                            <div class="border rounded-lg p-3 flex justify-between items-center">
                                <div>
                                    <h3 class="font-semibold">${item.nama}</h3>
                                    <p class="text-sm text-gray-500">${item.waktu} | ${item.tipe}</p>
                                </div>
                                <div class="flex gap-2">
                                    <button>✏️</button>
                                    <button>🗑️</button>
                                </div>
                            </div>
                        `;
                    });
                }
            </script>
                </div>
            </main>
        </div>
    </body>
</html>