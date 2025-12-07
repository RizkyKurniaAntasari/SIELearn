@extends('layouts.mahasiswa_app')

@section('main-content')
    <div class="flex flex-col md:flex-row justify-between items-end mb-6 gap-4">
        <div>
            <p class="text-xs font-semibold text-gray-500 mb-1 uppercase tracking-wider">Materi Perkuliahan</p>
            <h1 class="text-3xl font-bold text-gray-800">Pemrograman Web Lanjut</h1>
        </div>

        <div class="relative w-full md:w-72">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </span>
            <input type="text" placeholder="Cari judul materi..." class="w-full pl-10 pr-4 py-2.5 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-transparent transition shadow-sm text-sm">
        </div>
    </div>

    <div class="flex flex-wrap items-center gap-3 mb-8 border-b border-gray-100 pb-4">
        <button class="px-5 py-2 rounded-full bg-blue-600 text-white text-sm font-semibold shadow-md shadow-blue-200 transition transform hover:scale-105">
            Semua
        </button>
        <button class="px-5 py-2 rounded-full bg-white text-gray-600 border border-gray-200 text-sm font-medium hover:bg-gray-50 hover:border-gray-300 transition">
            Modul PDF
        </button>
        <button class="px-5 py-2 rounded-full bg-white text-gray-600 border border-gray-200 text-sm font-medium hover:bg-gray-50 hover:border-gray-300 transition">
            Video
        </button>
        <button class="px-5 py-2 rounded-full bg-white text-gray-600 border border-gray-200 text-sm font-medium hover:bg-gray-50 hover:border-gray-300 transition">
            Slide PPT
        </button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col h-full group">
            <div class="p-4 flex items-center gap-3 border-b border-gray-50">
                <div class="h-9 w-9 rounded-full bg-indigo-100 text-indigo-600 flex items-center justify-center font-bold text-sm">
                    RK
                </div>
                <div>
                    <h4 class="text-xs font-bold text-gray-700">Rizky Kurnia</h4>
                    <p class="text-[10px] text-gray-400 uppercase tracking-wide">Dosen Pengampu</p>
                </div>
                <span class="ml-auto bg-red-100 text-red-600 text-[10px] font-bold px-2 py-1 rounded-md">PDF</span>
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
                   <a href="#" class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                   </a>
                </div>
            </div>
        </div>

        <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col h-full group">
            <div class="p-4 flex items-center gap-3 border-b border-gray-50">
                <div class="h-9 w-9 rounded-full bg-indigo-100 text-indigo-600 flex items-center justify-center font-bold text-sm">
                    RK
                </div>
                <div>
                    <h4 class="text-xs font-bold text-gray-700">Rizky Kurnia</h4>
                    <p class="text-[10px] text-gray-400 uppercase tracking-wide">Dosen Pengampu</p>
                </div>
                <span class="ml-auto bg-orange-100 text-orange-600 text-[10px] font-bold px-2 py-1 rounded-md">PPT</span>
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
                   <a href="#" class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                   </a>
                </div>
            </div>
        </div>

    </div>
@endsection