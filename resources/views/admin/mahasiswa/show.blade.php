@extends('admin.layout')

@section('content')
<div class="p-6">
    <h1 class="text-xl font-bold mb-4">Detail Mahasiswa</h1>

    <div class="bg-white p-6 rounded shadow">
        <p><strong>Nama:</strong> {{ $mhs->nama }}</p>
        <p><strong>Email:</strong> {{ $mhs->email }}</p>
        <p><strong>NIM:</strong> {{ $mhs->nim }}</p>
        <p><strong>Kelas:</strong> {{ $mhs->kelas }}</p>
        <p><strong>No HP:</strong> {{ $mhs->no_hp }}</p>
        <p><strong>Alamat:</strong> {{ $mhs->alamat }}</p>
    </div>

    <a href="{{ route('admin.mahasiswa.index') }}"
       class="mt-4 inline-block bg-gray-600 text-white px-4 py-2 rounded">Kembali</a>
</div>
@endsection
