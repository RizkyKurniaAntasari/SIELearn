@extends('layouts.dosen_app')

@section('main-content')
<div class="space-y-4">
    <h1 class="text-3xl font-bold mb-2 text-purple-600">Forum Diskusi</h1>
    <p class="mb-4 text-gray-700">Kelas: <strong>Pemrograman Web Lanjut</strong></p>

    <div class="bg-white/60 backdrop-blur-xl border border-pink-200 shadow-xl rounded-2xl overflow-hidden">
        <div class="p-6 space-y-4 h-96 overflow-y-auto bg-gradient-to-b from-pink-50 to-yellow-50">            
            <!-- Chat bubble kanan (Dosen) -->
            <div class="flex justify-end">
                <div class="text-right max-w-md">
                    <div class="bg-purple-500 text-white p-4 rounded-2xl rounded-tr-none shadow-md">
                        <p class="text-sm font-semibold">M. Iqbal Parabi (Anda)</p>
                        <p>Selamat pagi. Jika ada yang ingin ditanyakan mengenai Tugas 1, silakan di sini.</p>
                    </div>
                    <span class="text-xs text-gray-500 mt-1">10:30 AM</span>
                </div>
            </div>

            <!-- Chat bubble kiri (Mahasiswa) -->
            <div class="flex items-start max-w-md">
                <img class="h-10 w-10 rounded-full mr-3 shadow" src="https://via.placeholder.com/150" alt="Avatar Mhs">
                <div>
                    <div class="bg-white border border-yellow-300 p-4 rounded-2xl rounded-tl-none shadow">
                        <p class="text-sm font-semibold text-gray-900">Aulia Dwi Husnawati</p>
                        <p>Permisi, Pak. Untuk deadline-nya apakah benar tanggal 30 Oktober?</p>
                    </div>
                    <span class="text-xs text-gray-500 mt-1">10:32 AM</span>
                </div>
            </div>
        </div>

        <!-- Input Balasan -->
        <div class="border-t border-gray-200 p-4 bg-white/70 backdrop-blur-xl flex items-center">
            <form action="#" method="POST" class="flex items-center w-full">
                @csrf
                <textarea class="flex-1 px-4 py-2 border border-pink-300 rounded-xl bg-white shadow-sm focus:outline-none focus:ring-pink-500 focus:border-pink-500 placeholder-gray-500" rows="1" placeholder="Balas sebagai Dosen..."></textarea>
                <button type="submit" class="ml-3 px-5 py-2 bg-gradient-to-r from-purple-500 to-purple-400 text-white font-semibold rounded-xl shadow-lg hover:opacity-90">
                    Kirim
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
