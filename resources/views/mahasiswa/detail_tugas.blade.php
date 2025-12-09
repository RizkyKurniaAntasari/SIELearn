@extends('layouts.mahasiswa_app')

@section('main-content')
    
    {{-- 1. BREADCRUMB (Navigasi Balik) --}}
    <div class="mb-6">
        <a href="{{ route('mahasiswa.tugas') }}" class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-purple-700 transition">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            Kembali ke Daftar Tugas
        </a>
    </div>

    <div class="flex flex-col lg:flex-row gap-8">

        {{-- === KOLOM KIRI: SOAL & UPLOAD === --}}
        <div class="w-full lg:w-3/4">
            
            {{-- A. HEADER TUGAS --}}
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 mb-6">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <span class="inline-block px-3 py-1 bg-purple-100 text-purple-700 text-xs font-bold rounded-full mb-2">
                            Tugas 2
                        </span>
                        <h1 class="text-2xl font-bold text-gray-900 leading-tight">Implementasi CRUD Laravel</h1>
                    </div>
                    {{-- Deadline Badge --}}
                    <div class="text-right">
                        <p class="text-xs text-gray-500 uppercase font-bold">Deadline</p>
                        <p class="text-red-600 font-bold">30 Okt 2025, 23:59</p>
                    </div>
                </div>

                <div class="border-t border-gray-100 pt-4">
                    <h3 class="text-sm font-bold text-gray-800 mb-2">Deskripsi Tugas:</h3>
                    <div class="prose max-w-none text-gray-600 text-sm leading-relaxed">
                        <p>Buatlah fitur <strong>Create, Read, Update, Delete (CRUD)</strong> untuk data mahasiswa. Pastikan menggunakan Eloquent ORM dan validasi form.</p>
                        <ul class="list-disc pl-5 mt-2 space-y-1">
                            <li>Gunakan migration untuk tabel <code>mahasiswas</code>.</li>
                            <li>Minimal ada 5 kolom data (Nama, NIM, Jurusan, dll).</li>
                            <li>Styling menggunakan Tailwind CSS sederhana.</li>
                        </ul>
                        <p class="mt-2">Kumpulkan dalam bentuk file <strong>.zip</strong> yang berisi source code dan screenshot hasil.</p>
                    </div>
                </div>
            </div>

            {{-- B. AREA PENGUMPULAN (FORM) --}}
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
                <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                    Kumpulkan Tugas
                </h3>

                {{-- FORM UPLOAD --}}
                <form action="#" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    {{-- Input File Custom Style --}}
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Upload File Jawaban</label>
                        <div class="flex items-center justify-center w-full">
                            <label for="file_tugas" class="flex flex-col items-center justify-center w-full h-32 border-2 border-purple-300 border-dashed rounded-xl cursor-pointer bg-purple-50 hover:bg-purple-100 transition">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-2 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                                    <p class="text-sm text-purple-700 font-medium">Klik untuk upload file</p>
                                    <p class="text-xs text-gray-500 mt-1">ZIP, PDF, atau DOCX (Max. 10MB)</p>
                                </div>
                                <input id="file_tugas" name="file_tugas" type="file" class="hidden" />
                            </label>
                        </div>
                    </div>

                    {{-- Input Catatan (Opsional) --}}
                    <div class="mb-6">
                        <label for="catatan" class="block text-sm font-medium text-gray-700 mb-1">Catatan Tambahan (Opsional)</label>
                        <textarea id="catatan" name="catatan" rows="2" class="w-full rounded-xl border-gray-300 shadow-sm focus:ring-purple-500 focus:border-purple-500 text-sm" placeholder="Misal: Link Github saya ada di..."></textarea>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="px-6 py-2.5 bg-purple-600 text-white font-bold rounded-xl shadow-md hover:bg-purple-700 transition transform hover:-translate-y-0.5">
                            Kirim Jawaban
                        </button>
                    </div>
                </form>
            </div>

        </div>

        {{-- === KOLOM KANAN: STATUS & NILAI === --}}
        <div class="w-full lg:w-1/4 space-y-6">
            
            {{-- KARTU STATUS --}}
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5">
                <h4 class="text-xs font-bold text-gray-400 uppercase tracking-wide mb-3">Status Pengumpulan</h4>
                
                {{-- Jika Belum Mengumpulkan --}}
                <div class="flex items-center gap-2 mb-2">
                    <span class="w-3 h-3 rounded-full bg-red-500 animate-pulse"></span>
                    <span class="text-sm font-bold text-gray-800">Belum Dikumpulkan</span>
                </div>
                <p class="text-xs text-gray-500">Silakan upload jawaban sebelum deadline berakhir.</p>

                {{-- CONTOH JIKA SUDAH MENGUMPULKAN (Nanti Backend pake If-Else) --}}
                {{-- 
                <div class="flex items-center gap-2 mb-2">
                    <span class="w-3 h-3 rounded-full bg-green-500"></span>
                    <span class="text-sm font-bold text-gray-800">Sudah Dikumpulkan</span>
                </div>
                <p class="text-xs text-gray-500">Dikirim pada: 28 Okt, 14:00</p>
                --}}
            </div>

            {{-- KARTU NILAI (Hanya tampil jika sudah dinilai) --}}
            <div class="bg-purple-50 rounded-2xl border border-purple-100 p-5 text-center opacity-60">
                <h4 class="text-xs font-bold text-purple-400 uppercase tracking-wide mb-1">Nilai Tugas</h4>
                <p class="text-3xl font-bold text-purple-800">- / 100</p>
                <p class="text-xs text-purple-500 mt-1">Belum dinilai oleh dosen</p>
            </div>

            {{-- INFO DOSEN --}}
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-5 flex items-center gap-3">
                <img class="w-10 h-10 rounded-full border border-gray-200" src="https://ui-avatars.com/api/?name=Iqbal+Parabi&background=f3e8ff&color=7e22ce" alt="Dosen">
                <div>
                    <p class="text-xs text-gray-400 font-bold uppercase">Dosen Pengampu</p>
                    <p class="text-sm font-bold text-gray-800">M. Iqbal Parabi</p>
                </div>
            </div>

        </div>

    </div>
@endsection