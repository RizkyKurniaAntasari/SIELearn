@extends('admin.layout')

@section('title', 'Edit Kelas')

@section('content')

<h1 class="text-2xl font-bold mb-4">Edit Kelas</h1>

<form action="{{ route('admin.kelas.update', $kelas->id) }}" method="POST" class="bg-white p-6 shadow rounded-lg">
    @csrf
    @method('PUT')

    <div class="mb-4">
        <label class="font-semibold">Nama Kelas</label>
        <input type="text" name="nama_kelas" 
               value="{{ $kelas->nama_kelas }}" 
               class="w-full p-2 border rounded" required>
    </div>

    <div class="mb-4">
        <label class="font-semibold">Jurusan</label>
        <input type="text" name="jurusan" 
               value="{{ $kelas->jurusan }}" 
               class="w-full p-2 border rounded" required>
    </div>

    <div class="mb-4">
        <label class="font-semibold">Angkatan</label>
        <input type="text" name="angkatan" 
               value="{{ $kelas->angkatan }}" 
               class="w-full p-2 border rounded" required>
    </div>

    <button class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
        Update
    </button>

    <a href="{{ route('admin.kelas.index') }}" class="ml-3 text-gray-600 hover:underline">
        Kembali
    </a>
</form>

@endsection
