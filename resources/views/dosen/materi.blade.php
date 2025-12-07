@extends('layouts.dosen_app')

@section('main-content')
<div class="space-y-6">

    {{-- Header --}}
    <div class="flex justify-between items-center">
        <h1 class="text-3xl font-bold text-purple-700">Manajemen Materi</h1>

        <a href="{{ route('dosen.materi.create') }}"
           class="px-4 py-2 bg-green-600 text-white font-semibold rounded-xl shadow-md hover:bg-purple-700 transition-all duration-200">
            + Unggah Materi Baru
        </a>
    </div>

    {{-- Table --}}
    <div class="bg-white p-6 rounded-xl shadow-lg border border-purple-100">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-purple-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-bold text-purple-700 uppercase tracking-wider">Judul</th>
                    <th class="px-6 py-3 text-left text-xs font-bold text-purple-700 uppercase tracking-wider">Deskripsi</th>
                    <th class="px-6 py-3 text-left text-xs font-bold text-purple-700 uppercase tracking-wider">File</th>
                    <th class="px-6 py-3 text-left text-xs font-bold text-purple-700 uppercase tracking-wider">GMeet</th>
                    <th class="px-6 py-3 text-left text-xs font-bold text-purple-700 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            
            <tbody class="bg-white divide-y divide-gray-200">

                {{-- Contoh Data Static (Nanti ganti dengan @foreach) --}}
                <tr class="hover:bg-purple-50 transition duration-150">

                    {{-- Judul --}}
                    <td class="px-6 py-4 font-medium text-gray-700">
                        Modul 1: ERD & Migrations
                    </td>

                    {{-- Deskripsi --}}
                    <td class="px-6 py-4 text-gray-600">
                        Pengenalan database...
                    </td>

                    {{-- File --}}
                    <td class="px-6 py-4">
                        <a href="#" class="text-purple-600 font-semibold hover:underline hover:text-purple-800">
                            Modul_1.pdf
                        </a>
                    </td>

                    {{-- GMeet --}}
                    <td class="px-6 py-4">
                        <a href="https://meet.google.com/abc-defg-hij"
                           target="_blank"
                           class="px-3 py-1 bg-purple-600 text-white rounded-lg shadow hover:bg-purple-700 transition">
                            Join Meet
                        </a>
                    </td>

                    {{-- Aksi --}}
                    <td class="px-6 py-4 text-sm font-semibold">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900 transition">Edit</a>
                        <a href="#" class="text-red-600 hover:text-red-900 ml-4 transition">Hapus</a>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

</div>
@endsection
