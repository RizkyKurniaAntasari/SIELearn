@extends('admin.layout')

@section('title', 'Tambah Kelas')

@section('content')
<h1 class="text-2xl font-bold mb-4">Tambah Kelas</h1>

<form action="{{ route('admin.kelas.store') }}" method="POST" class="bg-white p-6 shadow rounded-lg">
    @csrf

    <div class="mb-4">
        <label class="font-semibold">Nama Kelas</label>
        <input type="text" name="nama_kelas" class="w-full p-2 border rounded" required>
    </div>

    <div class="mb-4">
        <label class="font-semibold">Jurusan</label>
        <input type="text" name="jurusan" class="w-full p-2 border rounded" required>
    </div>

    <div class="mb-4">
        <label class="font-semibold">Angkatan</label>
        <input type="text" name="angkatan" class="w-full p-2 border rounded" required>
    </div>

    <button class="px-4 py-2 bg-purple-600 text-white rounded hover:bg-purple-700">
        Simpan
    </button>

    <a href="{{ route('admin.kelas.index') }}" class="ml-3 text-gray-600 hover:underline">
        Kembali
    </a>
</form>
@endsection
