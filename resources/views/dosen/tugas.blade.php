@extends('layouts.dosen_app')

@section('main-content')
<div class="space-y-6">

    {{-- Header --}}
    <div class="flex justify-between items-center">
        <h1 class="text-3xl font-bold text-purple-700">Manajemen Tugas & Evaluasi</h1>

        <a href="{{ route('dosen.tugas.create') }}"
            class="px-4 py-2 bg-green-600 text-white font-semibold rounded-xl shadow-md hover:bg-purple-700 transition-all duration-200">
            + Buat Tugas Baru
        </a>
    </div>

    {{-- Table --}}
    <div class="bg-white p-6 rounded-xl shadow-lg border border-purple-100">
        <table class="min-w-full divide-y divide-gray-200">
            
            <thead class="bg-purple-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-bold text-purple-700 uppercase tracking-wider">Judul Tugas</th>
                    <th class="px-6 py-3 text-left text-xs font-bold text-purple-700 uppercase tracking-wider">Kelas</th>
                    <th class="px-6 py-3 text-left text-xs font-bold text-purple-700 uppercase tracking-wider">Deadline</th>
                    <th class="px-6 py-3 text-left text-xs font-bold text-purple-700 uppercase tracking-wider">Terkumpul</th>
                    <th class="px-6 py-3 text-left text-xs font-bold text-purple-700 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200">

                {{-- Row 1 --}}
                <tr class="hover:bg-purple-50 transition duration-150">
                    <td class="px-6 py-4 font-medium text-gray-700">Tugas 1: ERD & Migrations</td>
                    <td class="px-6 py-4 text-gray-600">PemWeb Lanjut A</td>
                    <td class="px-6 py-4 text-red-600 font-semibold">30 Oktober 2025</td>
                    <td class="px-6 py-4 font-semibold text-gray-700">35 / 40</td>

                    <td class="px-6 py-4 text-sm font-semibold">
                        <a href="#" class="text-purple-600 hover:text-purple-900 transition">Lihat Submission</a>
                        <a href="#" class="text-indigo-600 hover:text-indigo-900 ml-4 transition">Edit</a>
                        <a href="#" class="text-red-600 hover:text-red-900 ml-4 transition">Hapus</a>
                    </td>
                </tr>

                {{-- Row 2 --}}
                <tr class="hover:bg-purple-50 transition duration-150">
                    <td class="px-6 py-4 font-medium text-gray-700">Kuis 1: HTML Dasar</td>
                    <td class="px-6 py-4 text-gray-600">PemWeb Lanjut B</td>
                    <td class="px-6 py-4 text-gray-600">20 Oktober 2025</td>
                    <td class="px-6 py-4 font-semibold text-gray-700">40 / 40</td>

                    <td class="px-6 py-4 text-sm font-semibold">
                        <a href="#" class="text-purple-600 hover:text-purple-900 transition">Lihat Submission</a>
                        <a href="#" class="text-indigo-600 hover:text-indigo-900 ml-4 transition">Edit</a>
                        <a href="#" class="text-red-600 hover:text-red-900 ml-4 transition">Hapus</a>
                    </td>
                </tr>

            </tbody>

        </table>
    </div>

</div>
@endsection
