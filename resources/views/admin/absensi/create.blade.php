@extends('layouts.master')
@section('title','Tambah Absensi')

@section('content')

<h1 class="text-2xl font-bold text-purple-700 mb-5">Tambah Absensi</h1>

<form action="{{ route('admin.absensi.store') }}" method="POST">
    @csrf

    <div class="mb-4">
        <label class="font-semibold">Mahasiswa</label>
        <select name="mahasiswa_id" class="w-full border p-2 rounded" required>
            <option value="">-- Pilih Mahasiswa --</option>
            @foreach($mahasiswa as $m)
            <option value="{{ $m->id }}">{{ $m->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-4">
        <label class="font-semibold">Kelas</label>
        <select name="kelas_id" class="w-full border p-2 rounded" required>
            <option value="">-- Pilih Kelas --</option>
            @foreach($kelas as $k)
            <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-4">
        <label class="font-semibold">Tanggal</label>
        <input type="date" name="tanggal" class="w-full border p-2 rounded" required>
    </div>

    <div class="mb-4">
        <label class="font-semibold">Status</label>
        <select name="status" class="w-full border p-2 rounded" required>
            <option value="Hadir">Hadir</option>
            <option value="Izin">Izin</option>
            <option value="Sakit">Sakit</option>
            <option value="Alpha">Alpha</option>
        </select>
    </div>

    <button class="bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700">
        Simpan
    </button>
</form>

@endsection
