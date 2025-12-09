@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 rounded shadow">

    <h1 class="text-2xl font-semibold mb-4">Form Pendaftaran</h1>

    @if(session('success'))
        <div class="bg-green-200 text-green-800 p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('pendaftaran.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="block font-medium">Nama Lengkap</label>
            <input type="text" name="nama" class="w-full p-2 border rounded" required>
        </div>

        <div class="mb-3">
            <label class="block font-medium">Email</label>
            <input type="email" name="email" class="w-full p-2 border rounded" required>
        </div>

        <div class="mb-3">
            <label class="block font-medium">No HP</label>
            <input type="text" name="no_hp" class="w-full p-2 border rounded" required>
        </div>

        <div class="mb-3">
            <label class="block font-medium">Pilih Kelas</label>
            <select name="kelas" class="w-full p-2 border rounded" required>
                <option value="">-- pilih kelas --</option>
                <option value="Kelas A">Kelas A</option>
                <option value="Kelas B">Kelas B</option>
                <option value="Kelas C">Kelas C</option>
            </select>
        </div>

        <button class="w-full bg-purple-600 text-white py-2 rounded hover:bg-purple-700">
            Daftar Sekarang
        </button>

    </form>
</div>
@endsection
