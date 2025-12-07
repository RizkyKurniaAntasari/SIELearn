@extends('layouts.dosen_app')

@section('main-content')
<div class="space-y-6">

    {{-- Header --}}
    <div class="flex justify-between items-center">
        <h1 class="text-3xl font-bold text-purple-700">Manajemen Absensi</h1>

        <button
            class="px-4 py-2 bg-green-600 text-white font-semibold rounded-xl shadow-md hover:bg-purple-700 transition-all duration-200">
            Buka Sesi Absensi Baru
        </button>
    </div>

    {{-- Card --}}
    <div class="bg-white p-6 rounded-xl shadow-lg border border-purple-100">
        <h3 class="font-semibold text-xl text-gray-800 mb-4">
            Riwayat Sesi Absensi <span class="text-purple-600 font-bold">(Kelas: PemWeb Lanjut A)</span>
        </h3>

        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-purple-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-bold text-purple-700 uppercase tracking-wider">Tanggal Sesi</th>
                    <th class="px-6 py-3 text-left text-xs font-bold text-purple-700 uppercase tracking-wider">Status Sesi</th>
                    <th class="px-6 py-3 text-left text-xs font-bold text-purple-700 uppercase tracking-wider">Hadir</th>
                    <th class="px-6 py-3 text-left text-xs font-bold text-purple-700 uppercase tracking-wider">Izin</th>
                    <th class="px-6 py-3 text-left text-xs font-bold text-purple-700 uppercase tracking-wider">Alfa</th>
                    <th class="px-6 py-3 text-left text-xs font-bold text-purple-700 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200">

                {{-- Row 1 --}}
                <tr class="hover:bg-purple-50 transition duration-150">
                    <td class="px-6 py-4 font-medium text-gray-700">30 Oktober 2025</td>
                    
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-3 py-1 text-xs font-bold rounded-full bg-green-100 text-green-700 shadow-sm">
                            Dibuka
                        </span>
                    </td>

                    <td class="px-6 py-4 text-gray-700 font-semibold">5</td>
                    <td class="px-6 py-4 text-gray-700 font-semibold">0</td>
                    <td class="px-6 py-4 text-gray-700 font-semibold">35</td>

                    <td class="px-6 py-4 text-sm font-semibold">
                        <a href="#" class="text-red-600 hover:text-red-900 transition">Tutup Sesi</a>
                    </td>
                </tr>

                {{-- Row 2 --}}
                <tr class="hover:bg-purple-50 transition duration-150">
                    <td class="px-6 py-4 font-medium text-gray-700">23 Oktober 2025</td>
                    
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-3 py-1 text-xs font-bold rounded-full bg-gray-200 text-gray-700 shadow-sm">
                            Ditutup
                        </span>
                    </td>

                    <td class="px-6 py-4 text-gray-700 font-semibold">38</td>
                    <td class="px-6 py-4 text-gray-700 font-semibold">1</td>
                    <td class="px-6 py-4 text-gray-700 font-semibold">1</td>

                    <td class="px-6 py-4 text-sm font-semibold">
                        <a href="#" class="text-purple-600 hover:text-purple-900 transition">Lihat Detail</a>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

</div>
@endsection
