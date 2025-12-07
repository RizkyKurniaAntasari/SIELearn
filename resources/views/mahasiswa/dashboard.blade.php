@extends('layouts.mahasiswa_app')

@section('main-content')
    <div class="bg-gradient-to-r from-purple-800 to-purple-600 rounded-2xl p-6 mb-8 text-white shadow-lg relative overflow-hidden">
        <div class="absolute top-0 right-0 -mr-10 -mt-10 w-40 h-40 rounded-full bg-white opacity-10 blur-2xl"></div>
        <div class="absolute bottom-0 left-0 -ml-10 -mb-10 w-40 h-40 rounded-full bg-white opacity-10 blur-2xl"></div>
        
        <div class="relative z-10">
            <h1 class="text-3xl font-bold mb-2">Dashboard Mahasiswa</h1>
            <p class="text-purple-100 text-lg">
                Ringkasan aktivitas Anda untuk kelas: 
                <span class="font-bold bg-white/20 px-2 py-1 rounded text-white">Pemrograman Web Lanjut (A)</span>
            </p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

        <div class="lg:col-span-2 space-y-8">

            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="font-bold text-xl text-gray-800 flex items-center">
                        <svg class="w-6 h-6 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                        Aktivitas Terbaru
                    </h3>
                </div>
                
                <div class="relative pl-4 border-l-2 border-gray-200 space-y-8">
                    
                    <div class="relative pl-4 group">
                        <div class="absolute -left-[21px] top-1 bg-purple-600 h-4 w-4 rounded-full border-4 border-white shadow-sm group-hover:scale-125 transition duration-300"></div>
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="font-semibold text-gray-800">Dosen menambahkan materi baru</p>
                                <p class="text-sm text-purple-700 font-medium bg-purple-50 inline-block px-2 py-0.5 rounded mt-1">Modul 3: Laravel Eloquent</p>
                            </div>
                            <span class="text-xs text-gray-400 whitespace-nowrap">1 jam lalu</span>
                        </div>
                    </div>

                    <div class="relative pl-4 group">
                        <div class="absolute -left-[21px] top-1 bg-green-500 h-4 w-4 rounded-full border-4 border-white shadow-sm group-hover:scale-125 transition duration-300"></div>
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="font-semibold text-gray-800">Nilai Tugas 1 telah dirilis</p>
                                <p class="text-sm text-green-700 font-bold bg-green-50 inline-block px-2 py-0.5 rounded mt-1">Nilai: A (95)</p>
                            </div>
                            <span class="text-xs text-gray-400 whitespace-nowrap">3 jam lalu</span>
                        </div>
                    </div>

                    <div class="relative pl-4 group">
                        <div class="absolute -left-[21px] top-1 bg-gray-400 h-4 w-4 rounded-full border-4 border-white shadow-sm group-hover:scale-125 transition duration-300"></div>
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="font-semibold text-gray-800">Ada balasan di forum</p>
                                <p class="text-sm text-gray-500 italic mt-1">"Re: Pertanyaan Tugas 1"</p>
                            </div>
                            <span class="text-xs text-gray-400 whitespace-nowrap">Kemarin</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="font-bold text-xl text-gray-800 flex items-center">
                        <svg class="w-6 h-6 mr-2 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                        Tugas Mendatang <span class="ml-2 text-sm bg-red-100 text-red-600 px-2 py-0.5 rounded-full">2</span>
                    </h3>
                    <a href="{{ route('mahasiswa.tugas') }}" class="text-sm font-semibold text-purple-600 hover:text-purple-800 hover:underline">Lihat Semua</a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="border border-gray-200 rounded-xl p-4 hover:shadow-lg hover:border-purple-300 transition duration-300 group">
                        <div class="flex justify-between items-start mb-2">
                            <span class="px-2 py-1 text-[10px] font-bold uppercase tracking-wide rounded bg-red-100 text-red-600">
                                Deadline: 3 Nov
                            </span>
                        </div>
                        <a href="#" class="block text-lg font-bold text-gray-800 group-hover:text-purple-600 mb-2">Tugas 2: CRUD Laravel</a>
                        <p class="text-sm text-gray-500 line-clamp-2 mb-4">Membuat aplikasi data mahasiswa sederhana menggunakan Laravel.</p>
                        <div class="flex items-center text-sm font-medium text-amber-600">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            Belum dikumpulkan
                        </div>
                    </div>

                    <div class="border border-gray-200 rounded-xl p-4 hover:shadow-lg hover:border-purple-300 transition duration-300 group">
                        <div class="flex justify-between items-start mb-2">
                            <span class="px-2 py-1 text-[10px] font-bold uppercase tracking-wide rounded bg-yellow-100 text-yellow-700">
                                Deadline: 7 Nov
                            </span>
                        </div>
                        <a href="#" class="block text-lg font-bold text-gray-800 group-hover:text-purple-600 mb-2">Kuis 2: Blade</a>
                        <p class="text-sm text-gray-500 line-clamp-2 mb-4">Kuis online pilihan ganda seputar Blade Templating.</p>
                        <div class="flex items-center text-sm font-medium text-gray-500">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                            Belum dikerjakan
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="lg:col-span-1 space-y-6">

            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-16 h-16 bg-green-50 rounded-bl-full -mr-2 -mt-2"></div>
                <h3 class="font-bold text-lg mb-4 text-gray-800 relative z-10">Absensi Hari Ini</h3>
                
                <div class="flex items-center mb-4">
                    <div class="bg-green-100 text-green-600 rounded-full p-3 mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <div>
                        <p class="text-gray-500 text-sm">Status Kehadiran</p>
                        <p class="font-bold text-xl text-green-600">Hadir</p>
                    </div>
                </div>
                <p class="text-xs text-center text-gray-400 mb-4 bg-gray-50 py-1 rounded">Tercatat pada 08:02 WIB</p>
                <a href="{{ route('mahasiswa.absensi') }}" class="block w-full py-2.5 text-center text-sm font-semibold text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 hover:border-purple-400 hover:text-purple-600 transition">
                    Lihat Riwayat Absen
                </a>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                <h3 class="font-bold text-lg mb-4 text-gray-800">Materi Terbaru</h3>
                <div class="bg-purple-50 rounded-xl p-4 mb-4 border border-purple-100">
                    <div class="flex items-start">
                        <svg class="w-8 h-8 text-purple-600 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path d="M9 2a2 2 0 00-2 2v8a2 2 0 002 2h6a2 2 0 002-2V6.414A2 2 0 0016.414 5L14 2.586A2 2 0 0012.586 2H9z"></path><path d="M3 8a2 2 0 012-2v10h8a2 2 0 01-2 2H5a2 2 0 01-2-2V8z"></path></svg>
                        <div>
                            <p class="font-bold text-gray-800 leading-tight">Modul 3: Laravel Eloquent</p>
                            <p class="text-xs text-gray-500 mt-1">Diupload 1 jam lalu</p>
                        </div>
                    </div>
                </div>
                <a href="#" class="flex items-center justify-center w-full px-4 py-2.5 bg-purple-600 text-white font-semibold text-sm rounded-xl shadow-md shadow-purple-200 hover:bg-purple-700 hover:shadow-lg transition">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                    Unduh Materi
                </a>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                <h3 class="font-bold text-lg mb-4 text-gray-800">Dosen Pengampu</h3>
                <div class="flex items-center space-x-4 mb-4">
                    <div class="relative">
                        <img class="h-14 w-14 rounded-full border-2 border-purple-100 object-cover" src="https://i.pravatar.cc/150?img=11" alt="Foto Dosen">
                        <div class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 rounded-full border-2 border-white"></div>
                    </div>
                    <div>
                        <p class="font-bold text-gray-900 text-sm">M. Iqbal Parabi, S.SI., M.T.</p>
                        <a href="mailto:iqbal.parabi@unila.ac.id" class="text-xs text-purple-600 hover:underline">iqbal.parabi@unila.ac.id</a>
                    </div>
                </div>
                <a href="{{ route('mahasiswa.forum') }}" class="flex items-center justify-center w-full py-2.5 text-sm font-semibold text-purple-700 bg-purple-50 rounded-lg hover:bg-purple-100 transition">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                    Hubungi di Forum
                </a>
            </div>

        </div>
    </div>
@endsection