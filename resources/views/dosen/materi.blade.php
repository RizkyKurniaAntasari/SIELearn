@extends('layouts.dosen_app')

@section('main-content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-semibold">Manajemen Materi</h1>
        <button class="px-4 py-2 bg-green-600 text-white font-semibold rounded-lg shadow-md hover:bg-green-700">
            + Unggah Materi Baru 
        </button>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Judul [cite: 213]</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Deskripsi [cite: 214]</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">File [cite: 215]</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">Modul 1: ERD & Migrations</td>
                    <td class="px-6 py-4 whitespace-nowrap">Pengenalan database...</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="#" class="text-blue-600 hover:underline">Modul_1.pdf</a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit </a>
                        <a href="#" class="text-red-600 hover:text-red-900 ml-4">Hapus </a>
                    </td>
                </tr>
                </tbody>
        </table>
    </div>
@endsection