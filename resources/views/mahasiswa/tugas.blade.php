@extends('layouts.mahasiswa_app')

@section('main-content')
    <div class="flex flex-col lg:flex-row gap-8 h-full">
        
        <div class="w-full lg:w-80 shrink-0">
            <div class="bg-gradient-to-br from-sky-400 to-sky-500 rounded-3xl p-6 text-white relative overflow-hidden flex flex-col justify-between min-h-[350px] shadow-xl shadow-sky-100">
                
                <div class="absolute -top-6 -left-6 opacity-20 pointer-events-none">
                     <svg xmlns="http://www.w3.org/2000/svg" class="h-48 w-48" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M11.25 4.533A9.707 9.707 0 006 3a9.735 9.735 0 00-3.25.555.75.75 0 00-.5.707v14.25a.75.75 0 001 .707A8.237 8.237 0 016 18.75c1.995 0 3.823.707 5.25 1.886V4.533zM12.75 20.636A8.214 8.214 0 0118 18.75c.966 0 1.89.166 2.75.472V5.512c-1.427-1.18-3.255-1.886-5.25-1.886-.55 0-1.077.054-1.58.156v16.854z" />
                    </svg>
                </div>

                <div></div>

                <div class="relative z-10 mt-auto">
                    <div class="flex items-end gap-2 mb-1">
                        <h2 class="text-5xl font-bold tracking-tight">03</h2>
                        <span class="text-xl font-medium opacity-80 mb-2">/ 16</span>
                    </div>
                    <p class="text-sm font-medium opacity-90 mb-4 uppercase tracking-wider">Tugas Selesai</p>
                    
                    <div class="w-full bg-black/20 rounded-full h-3 backdrop-blur-sm p-0.5">
                        <div class="bg-white h-2 rounded-full shadow-sm" style="width: 18%"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex-1 flex flex-col">
            
            <div class="flex justify-between items-start mb-6">
                <div>
                    <p class="text-xs font-bold text-gray-400 uppercase tracking-wide mb-1">Mata Kuliah</p>
                    <h1 class="text-3xl font-bold text-gray-800 leading-tight">Front-End Web Developer</h1>
                </div>
                
                <button class="p-2 text-gray-400 hover:text-sky-600 hover:bg-sky-50 rounded-lg transition duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>
                </button>
            </div>

            <div class="flex flex-wrap gap-3 mb-8">
                <button class="px-5 py-2 rounded-full bg-sky-500 text-white text-sm font-semibold shadow-md shadow-sky-200 hover:bg-sky-600 transition transform hover:scale-105">
                    Semua Tugas
                </button>
                <button class="px-5 py-2 rounded-full bg-white border border-gray-200 text-gray-600 text-sm font-medium hover:border-gray-300 hover:bg-gray-50 transition flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-red-400"></span> Belum Dikerjakan
                </button>
                <button class="px-5 py-2 rounded-full bg-white border border-gray-200 text-gray-600 text-sm font-medium hover:border-gray-300 hover:bg-gray-50 transition flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-green-400"></span> Selesai
                </button>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                
                <div class="bg-white border border-l-4 border-l-sky-500 border-y-gray-100 border-r-gray-100 rounded-xl p-6 shadow-sm relative group hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col h-full">
                    <div class="flex justify-between items-start mb-3">
                        <span class="bg-sky-50 text-sky-600 text-[10px] font-bold px-2 py-1 rounded uppercase tracking-wider">Tugas 1</span>
                        <div class="flex items-center gap-1.5 text-red-500 bg-red-50 px-2 py-1 rounded-md text-xs font-semibold">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            4 Hari Lagi
                        </div>
                    </div>

                    <h3 class="font-bold text-gray-800 text-lg mb-2 group-hover:text-sky-600 transition">Pengenalan HTML & CSS</h3>
                    <p class="text-gray-500 text-sm mb-6 line-clamp-2 leading-relaxed">
                        Buat halaman web sederhana yang menampilkan profil, kontak, dan hobi menggunakan HTML & CSS.
                    </p>

                    <div class="mt-auto flex items-center justify-between border-t border-gray-50 pt-4">
                        <div class="flex items-center gap-2 text-gray-400 text-xs font-medium">
                            <span class="w-2 h-2 rounded-full bg-gray-300"></span>
                            Belum Dikerjakan
                        </div>
                        <a href="#" class="w-9 h-9 rounded-full bg-gray-800 text-white flex items-center justify-center hover:bg-sky-500 transition shadow-lg group-hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm relative group hover:shadow-xl hover:border-sky-200 hover:-translate-y-1 transition-all duration-300 flex flex-col h-full">
                    <div class="flex justify-between items-start mb-3">
                        <span class="bg-gray-100 text-gray-500 text-[10px] font-bold px-2 py-1 rounded uppercase tracking-wider">Tugas 2</span>
                        <div class="flex items-center gap-1.5 text-orange-500 bg-orange-50 px-2 py-1 rounded-md text-xs font-semibold">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            7 Hari Lagi
                        </div>
                    </div>

                    <h3 class="font-bold text-gray-800 text-lg mb-2 group-hover:text-sky-600 transition">Layouting dengan Flexbox</h3>
                    <p class="text-gray-500 text-sm mb-6 line-clamp-2 leading-relaxed">
                        Implementasikan desain mockup website menggunakan CSS Flexbox untuk layout responsif.
                    </p>

                    <div class="mt-auto flex items-center justify-between border-t border-gray-50 pt-4">
                        <div class="flex items-center gap-2 text-gray-400 text-xs font-medium">
                            <span class="w-2 h-2 rounded-full bg-gray-300"></span>
                            Belum Dikerjakan
                        </div>
                        <a href="#" class="w-9 h-9 rounded-full bg-white border border-gray-200 text-gray-600 flex items-center justify-center hover:bg-sky-500 hover:text-white hover:border-sky-500 transition shadow-sm group-hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection