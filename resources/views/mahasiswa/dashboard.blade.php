@extends('layouts.mahasiswa_app')

@section('main-content')
    <h1 class="text-2xl font-semibold mb-4">Dashboard Mahasiswa</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="font-semibold text-lg">Tugas Mendatang</h3>
            <p class="text-gray-600">Anda memiliki <strong>2</strong> tugas yang belum dikumpulkan.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="font-semibold text-lg">Absensi Hari Ini</h3>
            <p class="text-gray-600">Status: <span class="font-bold text-green-600">Hadir</span></p>
        </div>
    </div>
@endsection