@extends('layouts.dosen_app')

@section('main-content')
<div class="space-y-6">

    <h1 class="text-3xl font-bold text-purple-700">Buat Tugas Baru</h1>

    <div class="bg-white p-6 rounded-xl shadow-lg border border-purple-200">

        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Judul --}}
            <label class="block font-semibold text-gray-700">Judul Tugas</label>
            <input type="text" class="w-full mt-1 mb-4 p-3 border-gray-300 rounded-lg" placeholder="Masukkan judul">

            {{-- Kelas --}}
            <label class="block font-semibold text-gray-700">Kelas</label>
            <select class="w-full mt-1 mb-4 p-3 border-gray-300 rounded-lg">
                <option>PemWeb Lanjut A</option>
                <option>PemWeb Lanjut B</option>
                <option>PemWeb Lanjut C</option>
            </select>

            {{-- Deadline --}}
            <label class="block font-semibold text-gray-700">Deadline</label>
            <input type="datetime-local" class="w-full mt-1 mb-4 p-3 border-gray-300 rounded-lg">

            {{-- Deskripsi --}}
            <label class="block font-semibold text-gray-700">Deskripsi Tugas</label>
            <textarea class="w-full mt-1 mb-4 p-3 border-gray-300 rounded-lg" rows="4"
                placeholder="Instruksi tugas"></textarea>

            {{-- Lampiran --}}
            <label class="block font-semibold text-gray-700">Lampiran (Opsional)</label>
            <input type="file" class="w-full mt-1 mb-6">

            <button class="px-4 py-2 bg-purple-700 text-white rounded-xl hover:bg-purple-800 transition">
                Simpan Tugas
            </button>
        </form>

    </div>

</div>
@endsection
