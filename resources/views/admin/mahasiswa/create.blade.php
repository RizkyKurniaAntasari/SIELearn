@extends('admin.layouts.master')

@section('content')
<div class="bg-white p-6 rounded shadow max-w-3xl mx-auto">

    <h2 class="text-2xl font-semibold mb-4">Tambah Mahasiswa</h2>

    <form action="{{ route('admin.mahasiswa.store') }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf

        {{-- Nama --}}
        <div class="mb-4">
            <label class="block font-semibold">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" 
                   class="w-full border p-2 rounded"
                   placeholder="Masukkan nama lengkap" required>
        </div>

        {{-- NIM --}}
        <div class="mb-4">
            <label class="block font-semibold">NIM</label>
            <input type="text" name="nim" 
                   class="w-full border p-2 rounded"
                   placeholder="Masukkan NIM" required>
        </div>

        {{-- Email --}}
        <div class="mb-4">
            <label class="block font-semibold">Email</label>
            <input type="email" name="email" 
                   class="w-full border p-2 rounded"
                   placeholder="Masukkan email" required>
        </div>

        {{-- No HP --}}
        <div class="mb-4">
            <label class="block font-semibold">No HP</label>
            <input type="text" name="no_hp" 
                   class="w-full border p-2 rounded"
                   placeholder="08xxxxxxxxxx">
        </div>

        {{-- Jenis Kelamin --}}
        <div class="mb-4">
            <label class="block font-semibold">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="w-full border p-2 rounded" required>
                <option value="">-- Pilih --</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>

        {{-- Tanggal Lahir --}}
        <div class="mb-4">
            <label class="block font-semibold">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" 
                   class="w-full border p-2 rounded">
        </div>

        {{-- Alamat --}}
        <div class="mb-4">
            <label class="block font-semibold">Alamat</label>
            <textarea name="alamat"
                      class="w-full border p-2 rounded"
                      rows="3"
                      placeholder="Masukkan alamat"></textarea>
        </div>

        {{-- Status --}}
        <div class="mb-4">
            <label class="block font-semibold">Status</label>
            <select name="status" class="w-full border p-2 rounded" required>
                <option value="aktif">Aktif</option>
                <option value="pending" selected>Pending</option>
                <option value="nonaktif">Nonaktif</option>
            </select>
        </div>

        {{-- Foto --}}
        <div class="mb-4">
            <label class="block font-semibold">Foto</label>
            <input type="file" name="foto" 
                   class="w-full border p-2 rounded">
        </div>

        {{-- Tombol --}}
        <div class="flex justify-between">
            <a href="{{ route('admin.mahasiswa.index') }}" 
               class="bg-gray-500 px-4 py-2 text-white rounded hover:bg-gray-600">
               Kembali
            </a>

            <button type="submit"
                    class="bg-purple-600 px-4 py-2 text-white rounded hover:bg-purple-700">
                Simpan
            </button>
        </div>

    </form>

</div>
@endsection
