<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jadwal</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/npm/lemonadejs/dist/lemonade.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@calendarjs/ce/dist/style.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons" />
        <script src="https://cdn.jsdelivr.net/npm/@calendarjs/ce/dist/index.min.js"></script>
    </head>
    <style>
        .has-jadwal {
            position: relative;
            font-weight: 600;
        }
        .has-jadwal::after {
            content: '';
            position: absolute;
            bottom: 2px;
            left: 50%;
            transform: translateX(-50%);
            width: 5px;
            height: 5px;
            background-color: #5E7C99;
            border-radius: 50%;
        }
        .lm-calendar-content div[data-selected="true"] {
            background-color: #9CCFFF ;
            color: #ffffff !important;
            font-weight: 600;
            border-radius: 100px;
        }
    </style>
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
                    <h1 class="text-xl font-bold">Jadwal</h1>
                    <h2 class="text-gray-600 text-sm">Lihat dan kelola jadwal Anda</h2>
                </div>

                <button onclick="document.getElementById('modalBuat').classList.remove('hidden')" class="flex items-center gap-3 px-3 py-2 text-sm shadow-lg text-black rounded-lg bg-grey-200 hover:bg-gray-200">
                    <img src="{{ asset('images/tambah.png') }}" class="w-5 h-5">
                    Tambah Jadwal
                </button>
            </header>

            <main class="flex-1 overflow-y-auto p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <div class="border rounded-lg p-6 bg-white shadow-sm">
                        <div id="calendar"></div>
                    </div>

                    <div class="border rounded-lg p-6 h-[400px] overflow-y-auto">
                        <div id="output" class="space-y-3">
                            <p class="text-gray-400">Pilih tanggal dulu</p>
                        </div>
                    </div>

                </div>
            </main>

            <script>
                const { Calendar } = calendarjs;

                let markedDates = [];

                fetch('/jadwal/dates')
                    .then(res => res.json())
                    .then(dates => {
                        markedDates = dates;
                        markCalendarDates();
                    });

                function markCalendarDates() {
                setTimeout(() => {

                    document.querySelectorAll('#calendar .lm-calendar-content div').forEach(el => {

                        el.classList.remove('has-jadwal');

                        const num = parseInt(el.textContent.trim());

                        if (isNaN(num)) return;

                        const selectedDate = new Date(calendar.getValue());

                        const yyyy = selectedDate.getFullYear();
                        const mm = String(selectedDate.getMonth() + 1).padStart(2, '0');
                        const dd = String(num).padStart(2, '0');

                        const fullDate = `${yyyy}-${mm}-${dd}`;

                        if (markedDates.includes(fullDate)) {
                            el.classList.add('has-jadwal');
                        }

                    });

                }, 300);
            }
                const calendar = Calendar(document.getElementById('calendar'), {
                    type: 'inline',  
                    value: new Date(),
                    onchange: function(self, value) {

                        const date = new Date(value);

                        markCalendarDates();
                        const formatted =
                            date.getFullYear() + "-" +
                            String(date.getMonth() + 1).padStart(2, '0') + "-" +
                            String(date.getDate()).padStart(2, '0');


                        const output = document.getElementById('output');
                        output.innerHTML = "<p class='text-gray-400'>Loading...</p>";

                        fetch(`/jadwal/get?date=${formatted}`)
                            .then(res => res.json())
                            .then(data => {

                                output.innerHTML = "";

                                if (data.length > 0) {
                                    data.forEach(item => {
                                        output.innerHTML += `
                                            <div class="p-3 border rounded-lg flex items-center justify-between">
                                                <div>
                                                    <p class="font-semibold">${item.title}</p>
                                                    <p class="text-sm text-gray-500">${item.start_time} - ${item.end_time} | ${item.type}</p>
                                                </div>
                                            
                                                <div class="flex items-center gap-2">
                                                    <!-- Edit -->
                                                    <button type="button" onclick="editJadwal(${item.id_jadwal})">
                                                        <img src="{{ asset('images/edit.png') }}"
                                                            class="w-4 h-4 opacity-50">

                                                    </button>
                                                    <!-- Hapus -->
                                                    <form action="/jadwal/${item.id_jadwal}" method="POST">

                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit">

                                                            <img src="{{ asset('images/sampah.png') }}"
                                                                class="w-4 h-4 opacity-50"
                                                                alt="Hapus">

                                                        </button>

                                                    </form>

                                                </div>
                                            </div>
                                        `;
                                    });
                                } else {
                                    output.innerHTML = `<p class="text-gray-400">Tidak ada jadwal</p>`;
                                }

                            })
                            .catch(err => {
                                output.innerHTML = `<p class="text-red-500">Gagal ambil data</p>`;
                            });
                    }
                });
            </script>

            <div id="modalBuat" class="hidden fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50">
                <div class="bg-white w-96 p-6 rounded-lg relative">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="font-semibold">Tambah Jadwal</h2>
                        <button 
                            onclick="document.getElementById('modalBuat').classList.add('hidden')">

                            <img src="{{ asset('images/silang.png') }}" class="w-5 h-5">    
                        </button>
                    </div>

                    <form action="{{ route('jadwal.store') }}" method="POST" class="space-y-3">
                        @csrf

                        <input type="text" name="name" placeholder="Nama Jadwal"
                            class="w-full border px-3 py-2 rounded text-sm" required>

                        <input type="date" name="tanggal" placeholder="Tanggal"
                            class="w-full border px-3 py-2 rounded text-sm" required>

                        <input type="time" name="start_time" placeholder="Waktu Mulai"
                            class="w-full border px-3 py-2 rounded text-sm" required>

                        <input type="time" name="end_time" placeholder="Waktu Selesai"
                            class="w-full border px-3 py-2 rounded text-sm" required>

                        <select name="type">
                            <option value="online">Online</option>
                            <option value="offline">Offline</option>
                        </select>

                        <button type="submit"
                            class="w-full bg-black text-white py-2 rounded">
                            Simpan
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

            <!-- Modal Edit Jadwal -->
            <div id="modalEdit" 
                class="hidden fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50">

                <div class="bg-white w-96 p-6 rounded-lg relative">

                    <div class="flex justify-between items-center mb-4">

                        <h2 class="font-semibold">
                            Edit Jadwal
                        </h2>

                        <button onclick="closeEdit()">

                            <img src="{{ asset('images/silang.png') }}" 
                                class="w-5 h-5">

                        </button>

                    </div>


                    <form id="formEdit" method="POST" class="space-y-3">
                        @csrf
                        @method('PUT')
                        <input type="text" 
                            id="edit_name"
                            name="name"
                            placeholder="Nama Jadwal"
                            class="w-full border px-3 py-2 rounded text-sm"
                            required>
                        <input type="date"
                            id="edit_tanggal"
                            name="tanggal"
                            class="w-full border px-3 py-2 rounded text-sm"
                            required>
                        <input type="time"
                            id="edit_start_time"
                            name="start_time"
                            class="w-full border px-3 py-2 rounded text-sm"
                            required>
                        <input type="time"
                            id="edit_end_time"
                            name="end_time"
                            class="w-full border px-3 py-2 rounded text-sm"
                            required>

                        <select name="type"
                                id="edit_type"
                                class="w-full border px-3 py-2 rounded text-sm">
                            <option value="online">
                                Online
                            </option>
                            <option value="offline">
                                Offline
                            </option>
                        </select>
                        <button type="submit"
                                class="w-full bg-black text-white py-2 rounded">
                            Simpan Perubahan
                        </button>
                    </form>
                </div>
            </div>
            <script>
                function editJadwal(id)
                    {
                        fetch(`/jadwal/show/${id}`)
                        .then(res => res.json())
                        .then(data => {

                            document.getElementById('modalEdit')
                                .classList.remove('hidden');


                            document.getElementById('formEdit').action =
                                `/jadwal/${id}`;


                            document.getElementById('edit_name').value =
                                data.title;


                            document.getElementById('edit_tanggal').value =
                                data.date;


                            document.getElementById('edit_start_time').value =
                                data.start_time;


                            document.getElementById('edit_end_time').value =
                                data.end_time;


                            document.getElementById('edit_type').value =
                                data.type;

                        })
                        .catch(error=>{
                            console.log(error);
                            alert("Data jadwal gagal diambil");
                        });
                    }
                    function closeEdit()
                    {
                        document.getElementById('modalEdit')
                            .classList.add('hidden');
                    }
            </script>
        </div>
    </body>
</html>