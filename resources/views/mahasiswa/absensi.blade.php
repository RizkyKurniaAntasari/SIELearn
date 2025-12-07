@extends('layouts.mahasiswa_app')

@section('main-content')
    <div class="flex flex-col md:flex-row justify-between items-end mb-8">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Absensi Perkuliahan</h1>
            <p class="text-gray-500 mt-1">Kelola kehadiranmu di mata kuliah Pemrograman Web Lanjut</p>
        </div>
        <div class="text-right hidden md:block">
            {{-- Menggunakan text-indigo-600 agar lebih harmonis dengan palet baru --}}
            <span class="block text-4xl font-bold text-indigo-600">30</span>
            <span class="text-gray-600 font-medium uppercase tracking-wide">Oktober 2025</span>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        
        {{-- KOLOM KIRI (Tetap didominasi Hijau karena ini aksi positif) --}}
        <div class="lg:col-span-2 space-y-8">
            
            <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 relative overflow-hidden group">
                <div class="absolute top-0 right-0 w-32 h-32 bg-green-50 rounded-bl-full -mr-8 -mt-8 transition-transform group-hover:scale-110"></div>

                <div class="relative z-10">
                    <h2 class="text-xl font-bold text-gray-800 mb-1">Sesi Absensi Dibuka</h2>
                    <p class="text-gray-500 mb-6 flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                        Status: Belum Absen
                    </p>

                    <div class="flex flex-col sm:flex-row items-center gap-4 bg-gray-50 p-4 rounded-xl border border-gray-100 mb-6">
                        <div class="bg-white p-3 rounded-lg shadow-sm text-center min-w-[80px]">
                            <span class="block text-xs text-gray-400 uppercase">Jam</span>
                            <span class="block text-xl font-bold text-gray-800">08:00</span>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-bold text-gray-800">Pemrograman Web Lanjut</h3>
                            <p class="text-sm text-gray-500">Pertemuan ke-4 • Ruang Lab Komputer 1</p>
                        </div>
                    </div>
                    
                    <form action="#" method="POST">
                        @csrf
                        <button type="submit" class="w-full py-4 bg-green-600 hover:bg-green-700 text-white font-bold rounded-xl shadow-lg shadow-green-200 hover:shadow-green-300 transform hover:-translate-y-1 transition duration-300 flex items-center justify-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            KONFIRMASI KEHADIRAN
                        </button>
                    </form>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center">
                    <h3 class="font-bold text-gray-800 text-lg">Riwayat Kehadiran</h3>
                    {{-- Ubah warna link jadi indigo --}}
                    <button class="text-sm text-indigo-600 hover:underline">Lihat Semua</button>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-gray-50/50 text-gray-500 text-xs uppercase tracking-wider">
                                <th class="px-6 py-4 font-semibold">Kelas & Matkul</th>
                                <th class="px-6 py-4 font-semibold">Tanggal</th>
                                <th class="px-6 py-4 font-semibold text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 text-sm">
                            {{-- Gunakan hover indigo agar konsisten --}}
                            <tr class="hover:bg-indigo-50/30 transition duration-200">
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-900">Front-End Developer</div>
                                    <div class="text-xs text-gray-400">Pemrograman Web Lanjut</div>
                                </td>
                                <td class="px-6 py-4 text-gray-600">23 Oktober 2025</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-green-100 text-green-700">
                                        Hadir
                                    </span>
                                </td>
                            </tr>
                            <tr class="hover:bg-indigo-50/30 transition duration-200">
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-900">Front-End Developer</div>
                                    <div class="text-xs text-gray-400">Pemrograman Web Lanjut</div>
                                </td>
                                <td class="px-6 py-4 text-gray-600">16 Oktober 2025</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-red-100 text-red-700">
                                        Alfa
                                    </span>
                                </td>
                            </tr>
                            <tr class="hover:bg-indigo-50/30 transition duration-200">
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-900">Front-End Developer</div>
                                    <div class="text-xs text-gray-400">Pemrograman Web Lanjut</div>
                                </td>
                                <td class="px-6 py-4 text-gray-600">09 Oktober 2025</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-yellow-100 text-yellow-700">
                                        Izin
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="bg-gray-50 px-6 py-3 flex justify-between items-center text-xs text-gray-500 font-medium">
                    <span>Total Pertemuan: 16</span>
                    <span>Min. Kehadiran: 80%</span>
                </div>
            </div>

        </div>

        {{-- KOLOM KANAN (PERBAIKAN HARMONISASI WARNA) --}}
        <div class="space-y-6">
            
            <div class="grid grid-cols-2 lg:grid-cols-1 gap-4">
                
                {{-- CARD 1: Kehadiran (PERSENTASE) --}}
                {{-- UBAH DARI KUNING KE INDIGO/BIRU TUA. 85% itu bagus, jadi jangan pakai kuning (warning). --}}
                {{-- Gunakan warna brand utama untuk statistik utama. --}}
                <div class="bg-indigo-50 rounded-2xl p-6 flex flex-col justify-between h-32 hover:shadow-md transition border border-indigo-100">
                    <div class="p-2 bg-indigo-100 w-fit rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                    </div>
                    <div>
                        <span class="text-3xl font-bold text-indigo-900">85%</span>
                        <p class="text-xs font-semibold text-indigo-700 uppercase mt-1">Kehadiran</p>
                    </div>
                </div>

                {{-- CARD 2: Total Hadir --}}
                {{-- UBAH DARI SKY BLUE KE BIRU YANG LEBIH LEMBUT atau HIJAU. --}}
                {{-- Mari gunakan Biru yang sedikit berbeda untuk variasi tapi tetap satu hue, atau Hijau karena "Hadir". Saya pilih Biru agar terlihat clean. --}}
                <div class="bg-blue-50 rounded-2xl p-6 flex flex-col justify-between h-32 hover:shadow-md transition border border-blue-100">
                      <div class="p-2 bg-blue-100 w-fit rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <span class="text-3xl font-bold text-blue-900">12</span>
                        <p class="text-xs font-semibold text-blue-700 uppercase mt-1">Total Hadir</p>
                    </div>
                </div>
            </div>

            {{-- SUMMARY BARS (PERBAIKAN WARNA BAR) --}}
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <h4 class="font-bold text-gray-800 mb-4">Statistik Ketidakhadiran</h4>
                
                <div class="space-y-4">
                    {{-- Item 1: Sakit --}}
                    {{-- Ubah Orange jadi Biru/Indigo (Netral/Info) --}}
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-10 bg-blue-400 rounded-full"></div>
                        <div class="flex-1">
                            <p class="text-xs text-gray-400 uppercase font-bold">Sakit</p>
                            <p class="font-semibold text-gray-800">0 Hari</p>
                        </div>
                    </div>
                     {{-- Item 2: Izin --}}
                     {{-- Ubah Teal jadi KUNING/AMBER (Agar sesuai dengan badge 'Izin' di tabel) --}}
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-10 bg-amber-400 rounded-full"></div>
                        <div class="flex-1">
                            <p class="text-xs text-gray-400 uppercase font-bold">Izin</p>
                            <p class="font-semibold text-gray-800">1 Hari</p>
                        </div>
                    </div>
                     {{-- Item 3: Alfa --}}
                     {{-- Ubah Red Pink jadi MERAH TEGAS (Agar sesuai dengan badge 'Alfa' di tabel) --}}
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-10 bg-red-500 rounded-full"></div>
                        <div class="flex-1">
                            <p class="text-xs text-gray-400 uppercase font-bold">Tanpa Keterangan</p>
                            <p class="font-semibold text-gray-800">1 Hari</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection