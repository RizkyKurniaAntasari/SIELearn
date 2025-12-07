@extends('layouts.dosen_app')

@section('main-content')
<div class="space-y-8">

    <h1 class="text-3xl font-bold text-purple-700 tracking-wide">Dashboard Dosen</h1>

    {{-- Stats Card --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-gradient-to-br from-green-500 to-purple-700 p-6 rounded-xl shadow-lg text-white">
            <div class="flex items-center justify-between">
                <h3 class="font-semibold text-lg">Mata Kuliah Aktif</h3>
                <i class="fas fa-book-open text-3xl opacity-80"></i>
            </div>
            <p class="text-4xl font-bold mt-2">3</p>
        </div>
        
        <div class="bg-gradient-to-br from-blue-500 to-purple-700 p-6 rounded-xl shadow-lg text-white">
            <div class="flex items-center justify-between">
                <h3 class="font-semibold text-lg">Total Mahasiswa</h3>
                <i class="fas fa-users text-3xl opacity-80"></i>
            </div>
            <p class="text-4xl font-bold mt-2">120</p>
        </div>
        
        <div class="bg-gradient-to-br from-red-500 to-purple-600 p-6 rounded-xl shadow-lg text-white">
            <div class="flex items-center justify-between">
                <h3 class="font-semibold text-lg">Tugas Perlu Dinilai</h3>
                <i class="fas fa-file-alt text-3xl opacity-80"></i>
            </div>
            <p class="text-4xl font-bold mt-2">15</p>
        </div>
    </div>

    {{-- Aktivitas Terbaru --}}
    <div class="bg-white p-6 rounded-xl shadow-md border border-purple-100">
        <h3 class="font-semibold text-xl text-purple-700 mb-4">Aktivitas Terbaru</h3>

        <ul class="space-y-4">
            <li class="flex items-start">
                <div class="w-10 h-10 bg-purple-200 text-purple-700 flex items-center justify-center rounded-full text-xl">
                    <i class="fas fa-user"></i>
                </div>
                <div class="ml-4 w-full pb-3 border-b">
                    <p>
                        <span class="font-medium">Aulia Dwi Husnawati</span> mengumpulkan 
                        <span class="text-purple-700 font-medium">Tugas 1</span>
                    </p>
                    <span class="text-sm text-gray-500">2 menit lalu</span>
                </div>
            </li>

            <li class="flex items-start">
                <div class="w-10 h-10 bg-purple-200 text-purple-700 flex items-center justify-center rounded-full text-xl">
                    <i class="fas fa-comment-dots"></i>
                </div>
                <div class="ml-4 w-full pb-3 border-b">
                    <p>
                        <span class="font-medium">Khomarul Hidayat</span> bertanya di 
                        <span class="text-purple-700 font-medium">Forum PemWeb Lanjut</span>
                    </p>
                    <span class="text-sm text-gray-500">10 menit lalu</span>
                </div>
            </li>

            <li class="flex items-start">
                <div class="w-10 h-10 bg-purple-200 text-purple-700 flex items-center justify-center rounded-full text-xl">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="ml-4 w-full pb-3 border-b">
                    <p>
                        Anda membuka <span class="text-purple-700 font-medium">Sesi Absensi</span> 
                        untuk kelas <span class="text-purple-700 font-medium">PemWeb Lanjut A</span>
                    </p>
                    <span class="text-sm text-gray-500">1 jam lalu</span>
                </div>
            </li>
        </ul>
    </div>

</div>
@endsection
