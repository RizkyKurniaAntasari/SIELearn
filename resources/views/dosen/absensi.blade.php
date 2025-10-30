@extends('layouts.dosen_app')

@section('main-content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-semibold">Manajemen Absensi</h1>
        <button class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700">
            Buka Sesi Absensi Baru
        </button>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="font-semibold text-lg mb-4">Riwayat Sesi Absensi (Kelas: PemWeb Lanjut A)</h3>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal Sesi</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status Sesi</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Hadir</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Izin</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Alfa</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">30 Oktober 2025</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            Dibuka
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">5</td>
                    <td class="px-6 py-4 whitespace-nowrap">0</td>
                    <td class="px-6 py-4 whitespace-nowrap">35</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="#" class="text-red-600 hover:text-red-900">Tutup Sesi</a>
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">23 Oktober 2025</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                            Ditutup
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">38</td>
                    <td class="px-6 py-4 whitespace-nowrap">1</td>
                    <td class="px-6 py-4 whitespace-nowrap">1</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="#" class="text-blue-600 hover:text-blue-900">Lihat Detail</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection