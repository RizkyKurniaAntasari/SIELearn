@extends('layouts.mahasiswa_app')

@section('main-content')
    <h1 class="text-2xl font-semibold mb-4">Materi Perkuliahan</h1>

    <div class="mb-4">
        <label for="matakuliah" class="block text-sm font-medium text-gray-700">Pilih Mata Kuliah:</label>
        <select id="matakuliah" name="matakuliah" class="mt-1 block w-full max-w-xs pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
            <option>Pemrograman Web Lanjut</option>
            <option>Struktur Data</option>
            <option>Basis Data</option>
        </select>
    </div>

    <div class="space-y-4">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="font-semibold text-lg mb-2">Modul 1: ERD dan Migrations</h3>
            <p class="text-gray-600 mb-3">Pengenalan Entity Relationship Diagram dan implementasinya menggunakan Laravel Migrations.</p>
            <a href="#" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition duration-300">
                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                </svg>
                Unduh Materi (PDF)
            </a>
        </div>
        
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="font-semibold text-lg mb-2">Modul 2: Blade Templating</h3>
            <p class="text-gray-600 mb-3">Mempelajari cara kerja Blade, layout, dan component di Laravel.</p>
            <a href="#" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition duration-300">
                <svg class="w-5 h-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                </svg>
                Unduh Materi (PPT)
            </a>
        </div>
    </div>
@endsection