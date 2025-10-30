@extends('layouts.admin_app')

@section('main-content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-semibold">Manajemen Pengguna</h1>
        <button class="px-4 py-2 bg-green-600 text-white font-semibold rounded-lg shadow-md hover:bg-green-700">
            + Tambah Pengguna Baru
        </button>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <h3 class="font-semibold text-lg mb-4">Daftar Mahasiswa</h3>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">NPM [cite: 181]</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama [cite: 182]</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email [cite: 183]</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Angkatan [cite: 185]</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">2317051003</td>
                    <td class="px-6 py-4 whitespace-nowrap">Aulia Dwi Husnawati [cite: 12]</td>
                    <td class="px-6 py-4 whitespace-nowrap">aulia@mail.com</td>
                    <td class="px-6 py-4 whitespace-nowrap">2023</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        <a href="#" class="text-red-600 hover:text-red-900 ml-4">Hapus</a>
                    </td>
                </tr>
                 <tr>
                    <td class="px-6 py-4 whitespace-nowrap">2317051088</td>
                    <td class="px-6 py-4 whitespace-nowrap">Wiranti Oktaviani Tanwin [cite: 12]</td>
                    <td class="px-6 py-4 whitespace-nowrap">wiranti@mail.com</td>
                    <td class="px-6 py-4 whitespace-nowrap">2023</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                        <a href="#" class="text-red-600 hover:text-red-900 ml-4">Hapus</a>
                    </td>
                </tr>
                </tbody>
        </table>
    </div>
@endsection