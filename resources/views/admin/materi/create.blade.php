@extends('layouts.master')
@section('title','Tambah Materi')

@section('content')

<h1 class="text-2xl font-bold mb-5 text-purple-700">Tambah Materi</h1>

<form action="{{ route('admin.materi.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-4">
        <label class="font-semibold">Judul Materi</label>
        <input name="judul" class="w-full border p-2 rounded" required>
    </div>

    <div class="mb-4">
        <label class="font-semibold">Deskripsi</label>
        <textarea name="deskripsi" rows="4" class="w-full border p-2 rounded"></textarea>
    </div>

    <div class="mb-4">
        <label class="font-semibold">File Materi (PDF/DOC/PPT/ZIP)</label>
        <input type="file" name="file" class="w-full border p-2 rounded">
    </div>

    <div class="mb-4">
        <label class="font-semibold">Kelas</label>
        <select name="kelas_id" class="w-full border p-2 rounded" required>
            @foreach($kelas as $k)
                <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-4">
        <label class="font-semibold">Dosen</label>
        <select name="dosen_id" class="w-full border p-2 rounded" required>
            @foreach($dosen as $d)
                <option value="{{ $d->id }}">{{ $d->name }}</option>
            @endforeach
        </select>
    </div>

    <button class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded">
        Simpan
    </button>

</form>

@endsection
