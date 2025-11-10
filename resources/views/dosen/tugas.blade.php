@extends('layouts.dosen_app')

@section('main-content')
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-semibold">Manajemen Tugas & Evaluasi</h1>
        <button class="px-4 py-2 bg-green-600 text-white font-semibold rounded-lg shadow-md hover:bg-green-700">
            + Buat Tugas Baru
        </button>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Judul Tugas</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kelas</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Deadline</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Terkumpul</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">Tugas 1: ERD & Migrations</td>
                    <td class="px-6 py-4 whitespace-nowrap">PemWeb Lanjut A</td>
                    <td class="px-6 py-4 whitespace-nowrap text-red-600">30 Oktober 2025</td>
                    <td class="px-6 py-4 whitespace-nowrap">35 / 40</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="{{ route('dosen.tugas_submission') }}" class="text-blue-600 hover:text-blue-900">Lihat Submission</a>
                        <a href="#" class="text-indigo-600 hover:text-indigo-900 ml-4">Edit</a>
                        <a href="#" class="text-red-600 hover:text-red-900 ml-4">Hapus</a>
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">Kuis 1: HTML Dasar</td>
                    <td class="px-6 py-4 whitespace-nowrap">PemWeb Lanjut B</td>
                    <td class="px-6 py-4 whitespace-nowrap text-gray-600">20 Oktober 2025</td>
                    <td class="px-6 py-4 whitespace-nowrap">40 / 40</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="#" class="text-blue-600 hover:text-blue-900">Lihat Submission</a>
                        <a href="#" class="text-indigo-600 hover:text-indigo-900 ml-4">Edit</a>
                        <a href="#" class="text-red-600 hover:text-red-900 ml-4">Hapus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection