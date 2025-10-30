@extends('layouts.mahasiswa_app')

@section('main-content')
    <h1 class="text-2xl font-semibold mb-4">Tugas & Evaluasi</h1>
    
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="font-semibold text-lg mb-4">Pemrograman Web Lanjut - Tugas 1</h3>
        <p class="text-gray-700 mb-2">Deskripsi: Buat ERD dan Tabel Migrations [cite: 3]</p>
        <p class="text-gray-700 mb-4">Deadline: <span class="font-medium text-red-600">30 Oktober 2025</span></p>
        
        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="file_tugas" class="block text-sm font-medium text-gray-700">Upload File Jawaban</label>
            <input type="file" id="file_tugas" name="file_tugas" class="w-full max-w-xs mt-1 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none">
            
            <button type="submit" class="mt-4 px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700">
                Kumpulkan Tugas
            </button>
        </form>

        <div class="mt-6">
            <h4 class="font-semibold">Status Pengumpulan</h4>
            <p>Status: <span class="font-medium text-green-600">Sudah Dinilai</span></p>
            <p>Nilai: <span class="font-bold text-2xl">A (95)</span></p>
            <p>Umpan Balik Dosen: <span class="italic text-gray-600">"Kerja bagus!"</span></p>
        </div>
    </div>
@endsection