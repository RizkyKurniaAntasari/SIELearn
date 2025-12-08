@extends('layouts.master')
@section('title','Edit Absensi')

@section('content')

<h1 class="text-2xl font-bold text-purple-700 mb-5">Edit Absensi</h1>

<form action="{{ route('admin.absensi.update', $absensi->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-4">
        <label class="font-semibold">Mahasiswa</label>
        <select name="mahasiswa_id" class="w-full border p-2 rounded">
            @foreach($mahasiswa as $m)
            <option value="{{ $m->id }}" {{ $absensi->mahasiswa_id == $m->id ? 'selected' : '' }}>
                {{ $m->name }}
            </option>
            @endforeach
        </select>
    </div>

    <div class="mb-4">
        <label class="font-semibold">Kelas</label>
        <select name="kelas_id" class="w-full border p-2 rounded">
            @foreach($kelas as $k)
            <option value="{{ $k->id }}" {{ $absensi->kelas_id == $k->id ? 'selected' : '' }}>
                {{ $k->nama_kelas }}
            </option>
            @endforeach
        </select>
    </div>

    <div class="mb-4">
        <label class="font-semibold">Tanggal</label>
        <input type="date" name="tanggal" class="w-full border p-2 rounded"
               value="{{ $absensi->tanggal }}">
    </div>

    <div class="mb-4">
        <label class="font-semibold">Status</label>
        <select name="status" class="w-full border p-2 rounded">
            @foreach(['Hadir','Izin','Sakit','Alpha'] as $s)
            <option value="{{ $s }}" {{ $absensi->status == $s ? 'selected' : '' }}>
                {{ $s }}
            </option>
            @endforeach
        </select>
    </div>

    <button class="bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700">
        Update
    </button>
</form>

@endsection
