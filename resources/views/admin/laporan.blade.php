@extends('layouts.admin_app')

@section('main-content')
    <h1 class="text-2xl font-semibold mb-4">Laporan & Monitoring Sistem</h1>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="font-semibold text-lg mb-4">Pusat Laporan</h3>
        <p class="text-gray-700 mb-6">Pilih jenis laporan yang ingin Anda generate.</p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="border border-gray-200 p-4 rounded-lg">
                <h4 class="font-semibold text-gray-800">Laporan Pendaftaran Pengguna</h4>
                <p class="text-sm text-gray-600 mb-3">Melihat tren pendaftaran mahasiswa dan dosen baru.</p>
                <button class="w-full px-4 py-2 bg-gray-600 text-white font-semibold rounded-lg shadow-md hover:bg-gray-700 text-sm">
                    Generate Laporan
                </button>
            </div>
            
            <div class="border border-gray-200 p-4 rounded-lg">
                <h4 class="font-semibold text-gray-800">Laporan Aktivitas Kelas</h4>
                <p class="text-sm text-gray-600 mb-3">Melihat kelas paling aktif berdasarkan jumlah materi dan tugas.</p>
                <button class="w-full px-4 py-2 bg-gray-600 text-white font-semibold rounded-lg shadow-md hover:bg-gray-700 text-sm">
                    Generate Laporan
                </button>
            </div>

            <div class="border border-gray-200 p-4 rounded-lg">
                <h4 class="font-semibold text-gray-800">Laporan Log Sistem</h4>
                <p class="text-sm text-gray-600 mb-3">Mengekspor log aktivitas penting dalam sistem (cth: error).</p>
                <button class="w-full px-4 py-2 bg-gray-600 text-white font-semibold rounded-lg shadow-md hover:bg-gray-700 text-sm">
                    Generate Laporan
                </button>
            </div>
        </div>
    </div>
@endsection