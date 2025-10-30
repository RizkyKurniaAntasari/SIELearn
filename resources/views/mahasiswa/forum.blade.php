@extends('layouts.mahasiswa_app')

@section('main-content')
    <h1 class="text-2xl font-semibold mb-4">Forum Diskusi</h1>
    <p class="mb-4 text-gray-700">Kelas: <strong>Pemrograman Web Lanjut</strong></p>

    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="p-6 space-y-4 h-96 overflow-y-auto">
            
            <div class="flex">
                <div class="flex-shrink-0 mr-3">
                    <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/150" alt="Avatar Dosen">
                </div>
                <div>
                    <div class="bg-gray-200 p-3 rounded-lg rounded-tl-none">
                        <p class="text-sm font-semibold text-gray-900">M. Iqbal Parabi (Dosen)</p>
                        <p class="text-gray-800">Selamat pagi. Jika ada yang ingin ditanyakan mengenai Tugas 1, silakan sampaikan di sini.</p>
                    </div>
                    <span class="text-xs text-gray-500 mt-1">10:30 AM</span>
                </div>
            </div>

            <div class="flex justify-end">
                <div class="text-right">
                    <div class="bg-blue-600 text-white p-3 rounded-lg rounded-tr-none">
                        <p class="text-sm font-semibold">Aulia Dwi Husnawati (Anda)</p>
                        <p>Permisi, Pak. Untuk deadline-nya apakah benar tanggal 30 Oktober?</p>
                    </div>
                    <span class="text-xs text-gray-500 mt-1">10:32 AM</span>
                </div>
            </div>

            <div class="flex">
                <div class="flex-shrink-0 mr-3">
                    <img class="h-10 w-10 rounded-full" src="https://via.placeholder.com/150" alt="Avatar Mhs">
                </div>
                <div>
                    <div class="bg-gray-200 p-3 rounded-lg rounded-tl-none">
                        <p class="text-sm font-semibold text-gray-900">Khomarul Hidayat</p>
                        <p>Izin bertanya, apakah boleh dikerjakan berkelompok?</p>
                    </div>
                    <span class="text-xs text-gray-500 mt-1">10:33 AM</span>
                </div>
            </div>
            
        </div>

        <div class="border-t border-gray-200 p-4 bg-gray-50">
            <form action="#" method="POST" class="flex items-center">
                @csrf
                <textarea class="flex-1 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500" rows="1" placeholder="Ketik pesan Anda..."></textarea>
                <button type="submit" class="ml-3 px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700">
                    Kirim
                </button>
            </form>
        </div>
    </div>
@endsection