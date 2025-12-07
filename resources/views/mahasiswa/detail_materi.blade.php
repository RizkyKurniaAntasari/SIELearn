@extends('layouts.mahasiswa_app')

@section('main-content')
    
    {{-- 1. BREADCRUMB --}}
    <div class="mb-6">
        <a href="{{ route('mahasiswa.materi') }}" class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-purple-700 transition">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            Kembali ke Materi
        </a>
    </div>

    <div class="flex flex-col lg:flex-row gap-8">

        {{-- === KOLOM KIRI: KONTEN UTAMA === --}}
        <div class="w-full lg:w-3/4">
            
            {{-- A. JUDUL & DESKRIPSI --}}
            <div class="mb-8 border-b border-gray-100 pb-6">
                <h1 class="text-3xl font-bold text-gray-900 mb-3">Deep Dive: Blade Templating Engine</h1>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Materi ini berisi kumpulan file modul dan presentasi mengenai penggunaan Blade Templating pada Laravel. Silakan unduh file di bawah dan bergabung ke link GMeet jika sesi dimulai.
                </p>
                <div class="flex items-center gap-3 text-sm text-gray-500">
                    <span class="flex items-center gap-1 font-medium text-gray-700">
                        <div class="w-6 h-6 rounded-full bg-purple-100 text-purple-700 flex items-center justify-center text-xs font-bold mr-1">RK</div>
                        Rizky Kurnia
                    </span>
                    <span>•</span>
                    <span>27 Oktober 2025</span>
                </div>
            </div>

            {{-- B. SLOT LINK GMEET (KARTU KHUSUS) --}}
            {{-- 
                CATATAN BACKEND: 
                Bungkus div ini dengan @if($materi->link_gmeet) agar hanya muncul jika dosen mengisi link.
            --}}
            <div class="bg-gradient-to-r from-purple-50 to-white border border-purple-200 rounded-2xl p-6 mb-10 flex flex-col sm:flex-row items-center justify-between gap-4 shadow-sm">
                <div class="flex items-center gap-4">
                    {{-- Icon Video Call --}}
                    <div class="w-14 h-14 rounded-full bg-white border border-purple-100 flex items-center justify-center shadow-sm text-purple-600">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-gray-900 text-lg">Sesi Tatap Muka (Google Meet)</h3>
                        <p class="text-sm text-gray-500">Klik tombol di samping untuk bergabung ke kelas.</p>
                    </div>
                </div>
                
                {{-- Tombol Join GMeet --}}
                <a href="https://meet.google.com/link-dosen" target="_blank" class="w-full sm:w-auto px-6 py-3 bg-purple-600 hover:bg-purple-700 text-white font-bold rounded-xl shadow-lg shadow-purple-200 transition transform hover:scale-105 flex items-center justify-center gap-2">
                    Gabung Sekarang
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                </a>
            </div>

            {{-- C. LIST FILE MATERI (FOLDER STYLE) --}}
            <div class="mb-10">
                <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center gap-2">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    File Materi Pembelajaran
                </h3>

                <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-sm divide-y divide-gray-100">
                    
                    {{-- File 1: PDF --}}
                    <div class="flex items-center justify-between p-4 hover:bg-purple-50 transition group">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-lg bg-red-100 text-red-500 flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-gray-800 group-hover:text-purple-700 transition">Modul_Lengkap_Blade.pdf</p>
                                <p class="text-xs text-gray-400">2.4 MB • PDF Document</p>
                            </div>
                        </div>
                        <a href="#" class="px-4 py-2 bg-white border border-gray-200 text-gray-600 text-xs font-semibold rounded-lg hover:border-purple-300 hover:text-purple-600 hover:bg-purple-50 transition">
                            Download
                        </a>
                    </div>

                    {{-- File 2: PPT --}}
                    <div class="flex items-center justify-between p-4 hover:bg-purple-50 transition group">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-lg bg-orange-100 text-orange-500 flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-gray-800 group-hover:text-purple-700 transition">Slide_Presentasi_Pertemuan_2.pptx</p>
                                <p class="text-xs text-gray-400">5.1 MB • PowerPoint</p>
                            </div>
                        </div>
                        <a href="#" class="px-4 py-2 bg-white border border-gray-200 text-gray-600 text-xs font-semibold rounded-lg hover:border-purple-300 hover:text-purple-600 hover:bg-purple-50 transition">
                            Download
                        </a>
                    </div>

                    {{-- File 3: ZIP --}}
                    <div class="flex items-center justify-between p-4 hover:bg-purple-50 transition group">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-lg bg-blue-100 text-blue-500 flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-gray-800 group-hover:text-purple-700 transition">Source_Code_Latihan.zip</p>
                                <p class="text-xs text-gray-400">1.2 MB • ZIP Archive</p>
                            </div>
                        </div>
                        <a href="#" class="px-4 py-2 bg-white border border-gray-200 text-gray-600 text-xs font-semibold rounded-lg hover:border-purple-300 hover:text-purple-600 hover:bg-purple-50 transition">
                            Download
                        </a>
                    </div>

                </div>
            </div>

            {{-- NAVIGASI NEXT PREV --}}
            <div class="flex justify-between items-center pt-6 border-t border-gray-100">
                <a href="#" class="group flex items-center gap-3 px-5 py-3 rounded-xl border border-gray-200 hover:border-purple-300 hover:bg-purple-50 transition bg-white text-gray-600 hover:text-purple-700">
                    <svg class="w-4 h-4 transform group-hover:-translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    <span class="font-medium">Materi Sebelumnya</span>
                </a>

                <a href="#" class="group flex items-center gap-3 px-5 py-3 rounded-xl bg-purple-600 text-white shadow-md hover:bg-purple-700 hover:shadow-lg transition">
                    <span class="font-medium">Materi Selanjutnya</span>
                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </div>

        </div>

        {{-- === KOLOM KANAN: SIDEBAR PLAYLIST === --}}
        <div class="w-full lg:w-1/4">
            <div class="bg-white rounded-xl border border-gray-200 overflow-hidden sticky top-6">
                <div class="p-4 bg-gray-50 border-b border-gray-200">
                    <h3 class="font-bold text-gray-800 text-sm">Daftar Materi</h3>
                </div>
                
                <div class="max-h-[500px] overflow-y-auto">
                    
                    {{-- Item Selesai --}}
                    <a href="#" class="block p-4 border-b border-gray-100 hover:bg-gray-50 transition">
                        <div class="flex items-center gap-3">
                            <div class="text-green-500">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <span class="text-sm text-gray-500 line-through">ERD & Migrations</span>
                        </div>
                    </a>

                    {{-- Item Aktif (Ungu) --}}
                    <a href="#" class="block p-4 border-l-4 border-purple-600 bg-purple-50 transition">
                        <div class="flex items-center gap-3">
                            <div class="text-purple-600">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-purple-700">Blade Templating</p>
                                <p class="text-xs text-purple-500">Sedang dibuka</p>
                            </div>
                        </div>
                    </a>

                    {{-- Item Belum --}}
                    <a href="#" class="block p-4 border-b border-gray-100 hover:bg-gray-50 transition">
                        <div class="flex items-center gap-3">
                            <div class="text-gray-300 font-bold text-sm w-5 text-center">3</div>
                            <span class="text-sm text-gray-600">Laravel Eloquent</span>
                        </div>
                    </a>

                    <a href="#" class="block p-4 border-b border-gray-100 hover:bg-gray-50 transition">
                        <div class="flex items-center gap-3">
                            <div class="text-gray-300 font-bold text-sm w-5 text-center">4</div>
                            <span class="text-sm text-gray-600">Kuis: Konsep MVC</span>
                        </div>
                    </a>

                </div>
            </div>
        </div>

    </div>
@endsection