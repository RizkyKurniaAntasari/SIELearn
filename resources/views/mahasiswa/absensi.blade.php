@extends('layouts.mahasiswa_app')

@section('main-content')
    <h1 class="text-2xl font-semibold mb-4">Absensi Online</h1>

    <div class="bg-white p-6 rounded-lg shadow-md mb-6">
        <h3 class="font-semibold text-lg mb-2 text-gray-900">Sesi Absensi Hari Ini (30 Oktober 2025)</h3>
        <p class="text-gray-700 mb-4">Mata Kuliah: <strong>Pemrograman Web Lanjut</strong></p>
        
        <form action="#" method="POST">
            @csrf
            <button type_submit" class="w-full px-6 py-3 bg-green-600 text-white font-bold rounded-lg shadow-md hover:bg-green-700 transition duration-300">
                KLIK UNTUK KONFIRMASI KEHADIRAN
            </button>
        </form>

        </div>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="font-semibold text-lg mb-4">Riwayat Kehadiran Anda</h3>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Mata Kuliah</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">23 Oktober 2025</td>
                    <td class="px-6 py-4 whitespace-nowrap">Pemrograman Web Lanjut</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            Hadir
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">16 Oktober 2025</td>
                    <td class="px-6 py-4 whitespace-nowrap">Pemrograman Web Lanjut</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                            Alfa
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">09 Oktober 2025</td>
                    <td class="px-6 py-4 whitespace-nowrap">Pemrograman Web Lanjut</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                            Izin
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection