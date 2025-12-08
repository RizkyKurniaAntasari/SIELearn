@extends('layouts.mahasiswa_app')

@section('main-content')
    <h1 class="text-2xl font-semibold mb-2">Dashboard Mahasiswa</h1>
    <p class="mb-6 text-gray-700">Ini adalah ringkasan Anda untuk kelas: <strong class="text-blue-600">Pemrograman Web Lanjut (A)</strong></p>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        <div class="lg:col-span-2 space-y-6">

            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="font-semibold text-lg mb-4">Aktivitas Terbaru</h3>
                <ul class="space-y-4">
                    <li class="flex items-center justify-between pb-3 border-b">
                        <div>
                            <p class="font-medium text-gray-800">Dosen menambahkan materi baru</p>
                            <p class="text-sm text-gray-500">Modul 3: Laravel Eloquent</p>
                        </div>
                        <span class="text-sm text-gray-400">1 jam lalu</span>
                    </li>
                    <li class="flex items-center justify-between pb-3 border-b">
                        <div>
                            <p class="font-medium text-gray-800">Nilai Tugas 1 telah dirilis</p>
                            <p class="text-sm text-green-600 font-medium">Nilai: A (95)</p>
                        </div>
                        <span class="text-sm text-gray-400">3 jam lalu</span>
                    </li>
                    <li class="flex items-center justify-between">
                        <div>
                            <p class="font-medium text-gray-800">Ada balasan di forum</p>
                            <p class="text-sm text-gray-500">"Re: Pertanyaan Tugas 1"</p>
                        </div>
                        <span class="text-sm text-gray-400">Kemarin</span>
                    </li>
                </ul>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="font-semibold text-lg mb-4">Tugas Mendatang (2)</h3>
                <ul class="space-y-4">
                    <li>
                        <div class="flex justify-between items-center mb-1">
                            <a href="#" class="text-blue-600 font-medium hover:underline">Tugas 2: CRUD Laravel</a>
                            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                                Deadline: 3 Nov
                            </span>
                        </div>
                        <p class="text-sm text-gray-600">Membuat aplikasi data mahasiswa sederhana menggunakan Laravel.</p>
                        <p class="text-sm font-medium text-red-600 mt-1">Status: Belum dikumpulkan</p>
                    </li>
                    <li>
                        <div class="flex justify-between items-center mb-1">
                            <a href="#" class="text-blue-600 font-medium hover:underline">Kuis 2: Blade Templating</a>
                            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                Deadline: 7 Nov
                            </span>
                        </div>
                        <p class="text-sm text-gray-600">Kuis online pilihan ganda seputar Blade.</p>
                        <p class="text-sm font-medium text-gray-600 mt-1">Status: Belum dikerjakan</p>
                    </li>
                </ul>
                <a href="{{ route('mahasiswa.tugas') }}" class="text-sm text-blue-600 hover:underline mt-4 inline-block">Lihat semua tugas...</a>
            </div>

        </div>

        <div class="lg:col-span-1 space-y-6">

            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="font-semibold text-lg mb-3">Absensi Hari Ini</h3>
                <p class="text-gray-600">Status: <span class="font-bold text-green-600">Hadir</span></p>
                <p class="text-sm text-gray-500 mt-1">Tercatat pada 08:02 WIB</p>
                <a href="{{ route('mahasiswa.absensi') }}" class="mt-3 inline-block px-4 py-2 bg-gray-100 text-gray-700 font-medium text-sm rounded-md hover:bg-gray-200 w-full text-center">
                    Lihat Riwayat Absen
                </a>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="font-semibold text-lg mb-3">Materi Terbaru</h3>
                <p class="font-medium text-gray-800">Modul 3: Laravel Eloquent</p>
                <p class="text-sm text-gray-500 mb-3">Diupload oleh Dosen 1 jam lalu.</p>
                <a href="#" class="inline-flex items-center justify-center w-full px-4 py-2 bg-blue-600 text-white font-semibold text-sm rounded-lg shadow-md hover:bg-blue-700">
                    <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" /></svg>
                    Unduh Materi
                </a>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="font-semibold text-lg mb-3">Dosen Pengampu</h3>
                <div class="flex items-center space-x-3">
                    <img class="h-12 w-12 rounded-full" src="https://i.pravatar.cc/150?img=1" alt="Foto Dosen">
                    <div>
                        <p class="font-medium text-gray-900">M. Iqbal Parabi, S.SI., M.T.</p>
                        <p class="text-sm text-gray-500">iqbal.parabi@unila.ac.id</p>
                    </div>
                </div>
                <a href="{{ route('mahasiswa.forum') }}" class="mt-3 inline-block px-4 py-2 bg-gray-100 text-gray-700 font-medium text-sm rounded-md hover:bg-gray-200 w-full text-center">
                    Hubungi di Forum
                </a>
            </div>

        </div>
    </div>
@endsection