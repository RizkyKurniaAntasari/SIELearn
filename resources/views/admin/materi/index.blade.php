@extends('layouts.master')
@section('title','Materi')

@section('content')

@if(session('success'))
<div class="bg-green-500 text-white p-3 rounded mb-4">
    {{ session('success') }}
</div>
@endif

<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold text-purple-700">Materi Pembelajaran</h1>

    <a href="{{ route('admin.materi.create') }}"
       class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded">
        + Tambah Materi
    </a>
</div>

{{-- Search & Filter --}}
<div class="flex gap-4 mb-6">
    <form class="flex-1">
        <input name="search" class="w-full border p-2 rounded"
               placeholder="Cari materi...">
    </form>

    <form>
        <select name="kelas_id" class="border p-2 rounded">
            <option value="">Filter Kelas</option>
            @foreach($kelas as $k)
                <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
            @endforeach
        </select>
    </form>
</div>

{{-- Card Grid Materi --}}
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @foreach($materi as $item)
    <div class="bg-white shadow rounded-lg p-5 hover:shadow-lg transition">

        <h2 class="font-bold text-lg text-purple-700">{{ $item->judul }}</h2>
        <p class="text-sm text-gray-600 mt-2">{{ $item->deskripsi }}</p>

        <p class="text-sm mt-3">
            <strong>Kelas:</strong> {{ $item->kelas->nama_kelas }}
        </p>
        <p class="text-sm">
            <strong>Dosen:</strong> {{ $item->dosen->name }}
        </p>

        <div class="mt-4 flex justify-between">
            <a href="{{ asset('materi/'.$item->file) }}"
               target="_blank"
               class="text-blue-600 hover:underline">
               Lihat File
            </a>

            <div class="flex gap-2">
                <a href="{{ route('admin.materi.edit', $item->id) }}"
                   class="text-yellow-500 hover:text-yellow-600">
                    <i class="fa-solid fa-edit"></i>
                </a>

                <form action="{{ route('admin.materi.destroy', $item->id) }}" method="POST"
                      onsubmit="return confirm('Hapus materi ini?')">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-500 hover:text-red-700">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </form>
            </div>
        </div>

    </div>
    @endforeach
</div>

<div class="mt-6">
    {{ $materi->links() }}
</div>

@endsection
