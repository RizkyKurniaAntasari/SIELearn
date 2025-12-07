@extends('layouts.mahasiswa_app')

@section('main-content')
    
    {{-- HEADER & SEARCH --}}
    <div class="flex flex-col md:flex-row justify-between items-end mb-8 gap-4">
        <div>
            <p class="text-xs font-bold text-purple-600 mb-1 uppercase tracking-wider">Materi Perkuliahan</p>
            <h1 class="text-3xl font-bold text-gray-900">Pemrograman Web Lanjut</h1>
        </div>

        <div class="relative w-full md:w-72">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </span>
            <input type="text" placeholder="Cari materi..." class="w-full pl-10 pr-4 py-2.5 bg-white border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent transition shadow-sm text-sm">
        </div>
    </div>

    {{-- PENGGANTI FILTER: STATISTIK RINGKAS (INFO BAR) --}}
    {{-- Ini lebih berguna daripada filter tipe file --}}
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
        
        {{-- Info 1: Total Modul --}}
        <div class="bg-white p-4 rounded-xl border border-gray-100 shadow-sm flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-purple-50 text-purple-600 flex items-center justify-center">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
            </div>
            <div>
                <p class="text-xs text-gray-500 font-medium uppercase">Total Modul</p>
                <p class="text-lg font-bold text-gray-800">14 Sesi</p>
            </div>
        </div>

        {{-- Info 2: SKS --}}
        <div class="bg-white p-4 rounded-xl border border-gray-100 shadow-sm flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <div>
                <p class="text-xs text-gray-500 font-medium uppercase">Bobot SKS</p>
                <p class="text-lg font-bold text-gray-800">3 SKS</p>
            </div>
        </div>

        {{-- Info 3: Semester --}}
        <div class="bg-white p-4 rounded-xl border border-gray-100 shadow-sm flex items-center gap-3">
            <div class="w-10 h-10 rounded-full bg-orange-50 text-orange-600 flex items-center justify-center">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
            </div>
            <div>
                <p class="text-xs text-gray-500 font-medium uppercase">Semester</p>
                <p class="text-lg font-bold text-gray-800">Ganjil 2025</p>
            </div>
        </div>

        {{-- Info 4: Progress (Visual) --}}
        <div class="bg-white p-4 rounded-xl border border-gray-100 shadow-sm flex flex-col justify-center">
            <div class="flex justify-between items-center mb-1">
                <p class="text-xs text-gray-500 font-medium uppercase">Progress Saya</p>
                <span class="text-xs font-bold text-purple-600">15%</span>
            </div>
            <div class="w-full bg-gray-100 rounded-full h-2">
                <div class="bg-purple-600 h-2 rounded-full" style="width: 15%"></div>
            </div>
        </div>

    </div>

    {{-- GRID CONTENT (KARTU MATERI) --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        {{-- CARD 1 --}}
        <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col h-full group">
            <div class="p-4 flex items-center gap-3 border-b border-gray-50">
                <div class="h-9 w-9 rounded-full bg-purple-100 text-purple-600 flex items-center justify-center font-bold text-sm">
                    RK
                </div>
                <div>
                    <h4 class="text-xs font-bold text-gray-700">Rizky Kurnia</h4>
                    <p class="text-[10px] text-gray-400 uppercase tracking-wide">Dosen Pengampu</p>
                </div>
                {{-- Status Pertemuan --}}
                <span class="ml-auto bg-green-100 text-green-700 text-[10px] font-bold px-2 py-1 rounded-md">Selesai</span>
            </div>

            <div class="h-44 bg-gray-100 relative overflow-hidden group">
                <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                     alt="Coding" 
                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-90 group-hover:opacity-100">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent"></div>
                <div class="absolute bottom-3 left-4">
                    <p class="text-white text-xs font-medium bg-black/30 backdrop-blur-sm px-2 py-1 rounded inline-block mb-1">Pertemuan 1</p>
                    <p class="text-white font-bold text-lg leading-tight shadow-sm">ERD & Migrations</p>
                </div>
            </div>

            <div class="p-5 flex-1 flex flex-col">
                <p class="text-gray-500 text-sm line-clamp-3 mb-4 leading-relaxed">
                    Pengenalan konsep Entity Relationship Diagram (ERD) untuk perancangan database dan implementasi skema menggunakan fitur Migrations pada Laravel.
                </p>
                
                <div class="mt-auto pt-4 border-t border-gray-100 flex justify-between items-center">
                   <div class="flex items-center text-gray-400 text-xs font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        20 Okt 2025
                   </div>
                   {{-- Tombol Lihat Detail --}}
                   <a href="{{ route('mahasiswa.materi.detail') }}" class="inline-flex items-center justify-center px-4 py-2 bg-purple-50 text-purple-700 font-semibold text-xs rounded-lg hover:bg-purple-600 hover:text-white transition-colors duration-300">
                        Lihat Materi
                   </a>
                </div>
            </div>
        </div>

        {{-- CARD 2 --}}
        <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col h-full group">
            <div class="p-4 flex items-center gap-3 border-b border-gray-50">
                <div class="h-9 w-9 rounded-full bg-purple-100 text-purple-600 flex items-center justify-center font-bold text-sm">
                    RK
                </div>
                <div>
                    <h4 class="text-xs font-bold text-gray-700">Rizky Kurnia</h4>
                    <p class="text-[10px] text-gray-400 uppercase tracking-wide">Dosen Pengampu</p>
                </div>
                {{-- Status Pertemuan --}}
                <span class="ml-auto bg-purple-100 text-purple-700 text-[10px] font-bold px-2 py-1 rounded-md">Baru</span>
            </div>

            <div class="h-44 bg-gray-100 relative overflow-hidden group">
                <img src="https://images.unsplash.com/photo-1587620962725-abab7fe55159?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                     alt="Coding" 
                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 opacity-90 group-hover:opacity-100">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent"></div>
                <div class="absolute bottom-3 left-4">
                    <p class="text-white text-xs font-medium bg-black/30 backdrop-blur-sm px-2 py-1 rounded inline-block mb-1">Pertemuan 2</p>
                    <p class="text-white font-bold text-lg leading-tight shadow-sm">Blade Templating</p>
                </div>
            </div>

            <div class="p-5 flex-1 flex flex-col">
                <p class="text-gray-500 text-sm line-clamp-3 mb-4 leading-relaxed">
                    Mempelajari cara kerja Blade Engine, pewarisan layout (extends), section, dan pembuatan component reusable di Laravel.
                </p>
                
                <div class="mt-auto pt-4 border-t border-gray-100 flex justify-between items-center">
                   <div class="flex items-center text-gray-400 text-xs font-medium">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        27 Okt 2025
                   </div>
                   {{-- Tombol Lihat Detail --}}
                   <a href="{{ route('mahasiswa.materi.detail') }}" class="inline-flex items-center justify-center px-4 py-2 bg-purple-50 text-purple-700 font-semibold text-xs rounded-lg hover:bg-purple-600 hover:text-white transition-colors duration-300">
                        Lihat Materi
                   </a>
                </div>
            </div>
        </div>

    </div>
@endsection