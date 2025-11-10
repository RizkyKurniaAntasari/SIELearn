@extends('layouts.dosen_app')

@section('main-content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-semibold">Submission Mahasiswa</h1>
        <a href="" 
           class="px-4 py-2 bg-gray-500 text-white font-semibold rounded-lg shadow-md hover:bg-gray-600">
           ← Kembali
        </a>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="mb-4">
            <h2 class="text-lg font-semibold">Tugas: ERD & Migrations</h2>
            <p class="text-gray-600 text-sm">Kelas: PemWeb Lanjut A | Deadline: 30 Oktober 2025</p>
        </div>

        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">NIM</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama Mahasiswa</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal Upload</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">File</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nilai</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">21111001</td>
                    <td class="px-6 py-4 whitespace-nowrap">Rizky Kurnia Antasari</td>
                    <td class="px-6 py-4 whitespace-nowrap">28 Oktober 2025</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="#" class="text-blue-600 hover:underline">Lihat File</a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="text-gray-800 font-semibold">90</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="#" class="text-green-600 hover:text-green-800">Beri Nilai</a>
                        <a href="#" class="text-red-600 hover:text-red-800 ml-4">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">21111002</td>
                    <td class="px-6 py-4 whitespace-nowrap">Ahmad Fadhil</td>
                    <td class="px-6 py-4 whitespace-nowrap">29 Oktober 2025</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="#" class="text-blue-600 hover:underline">Lihat File</a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="text-gray-500 italic">Belum Dinilai</span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="#" class="text-green-600 hover:text-green-800">Beri Nilai</a>
                        <a href="#" class="text-red-600 hover:text-red-800 ml-4">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
