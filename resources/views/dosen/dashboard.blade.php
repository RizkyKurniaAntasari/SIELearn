@extends('layouts.dosen_app')

@section('main-content')
    <h1 class="text-2xl font-semibold mb-4">Dashboard Dosen</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="font-semibold text-lg text-gray-700">Mata Kuliah Aktif</h3>
            <p class="text-3xl font-bold text-blue-600">3</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="font-semibold text-lg text-gray-700">Total Mahasiswa</h3>
            <p class="text-3xl font-bold text-blue-600">120</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="font-semibold text-lg text-gray-700">Tugas Perlu Dinilai</h3>
            <p class="text-3xl font-bold text-red-600">15</p>
        </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="font-semibold text-lg mb-4">Aktivitas Terbaru</h3>
        <ul class="space-y-3">
            <li class="border-b pb-2">
                <span class="font-medium">Aulia Dwi Husnawati</span> mengumpulkan <span class="text-blue-600">Tugas 1</span>
                <span class="text-sm text-gray-500 float-right">2 menit lalu</span>
            </li>
            <li class="border-b pb-2">
                <span class="font-medium">Khomarul Hidayat</span> bertanya di <span class="text-blue-600">Forum PemWeb Lanjut</span>
                <span class="text-sm text-gray-500 float-right">10 menit lalu</span>
            </li>
            <li class="border-b pb-2">
                Anda membuka <span class="text-blue-600">Sesi Absensi</span> untuk kelas <span class="text-blue-600">PemWeb Lanjut A</span>
                <span class="text-sm text-gray-500 float-right">1 jam lalu</span>
            </li>
        </ul>
    </div>
@endsection