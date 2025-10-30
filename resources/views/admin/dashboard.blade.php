@extends('layouts.admin_app')

@section('main-content')
    <h1 class="text-2xl font-semibold mb-4">Dashboard Admin</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="font-semibold text-lg text-gray-700">Total Mahasiswa</h3>
            <p class="text-3xl font-bold text-blue-600">350</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="font-semibold text-lg text-gray-700">Total Dosen</h3>
            <p class="text-3xl font-bold text-blue-600">45</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="font-semibold text-lg text-gray-700">Total Mata Kuliah</h3>
            <p class="text-3xl font-bold text-blue-600">80</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="font-semibold text-lg text-gray-700">Total Kelas</h3>
            <p class="text-3xl font-bold text-blue-600">150</p>
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="font-semibold text-lg mb-4">Log Aktivitas Admin</h3>
         <ul class="space-y-3">
            <li class="border-b pb-2">
                <span class="font-medium">Admin</span> menambahkan Dosen <span class="text-blue-600">Muhammad Ikhsan, S.Kom., M.Cs.</span>
                <span class="text-sm text-gray-500 float-right">1 hari lalu</span>
            </li>
            <li class="border-b pb-2">
                <span class="font-medium">Admin</span> menambahkan Mata Kuliah <span class="text-blue-600">Pemrograman Web Lanjut</span>
                <span class="text-sm text-gray-500 float-right">2 hari lalu</span>
            </li>
        </ul>
    </div>
@endsection