@extends('layouts.master')
@section('title','Absensi')

@section('content')

@if(session('success'))
<div class="bg-green-500 text-white p-3 rounded mb-4">
    {{ session('success') }}
</div>
@endif

<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold text-purple-700">Data Absensi</h1>

    <a href="{{ route('admin.absensi.create') }}"
       class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded">
        + Tambah Absensi
    </a>
</div>

<table class="w-full bg-white shadow rounded overflow-hidden">
    <thead class="bg-purple-600 text-white">
        <tr>
            <th class="p-3">Mahasiswa</th>
            <th class="p-3">Kelas</th>
            <th class="p-3">Tanggal</th>
            <th class="p-3">Status</th>
            <th class="p-3">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($absensi as $item)
        <tr class="border-b">
            <td class="p-3">{{ $item->mahasiswa->name }}</td>
            <td class="p-3">{{ $item->kelas->nama_kelas }}</td>
            <td class="p-3">{{ $item->tanggal }}</td>
            <td class="p-3 font-semibold">
                <span class="text-blue-600">{{ $item->status }}</span>
            </td>
            <td class="p-3 flex gap-3">

                <a href="{{ route('admin.absensi.edit', $item->id) }}"
                   class="text-yellow-500 text-xl">
                    <i class="fa-solid fa-edit"></i>
                </a>

                <form method="POST" action="{{ route('admin.absensi.destroy', $item->id) }}"
                      onsubmit="return confirm('Hapus data ini?')">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-600 text-xl">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="mt-4">
    {{ $absensi->links() }}
</div>

@endsection
