@extends('admin.layout.app')

@section('content')

<div class="bg-white p-6 rounded shadow max-w-3xl">

    <h2 class="text-xl font-semibold mb-4">Edit Mahasiswa</h2>

    <form action="{{ route('admin.mahasiswa.update', $mahasiswa->id) }}" 
          method="POST" 
          enctype="multipart/form-data"
          class="space-y-4">

        @csrf
        @method('PUT')

        {{-- Nama --}}
        <div>
            <label class="font-medium">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="w-full p-2 border rounded"
                   value="{{ $mahasiswa->nama_lengkap }}" required>
        </div>

        {{-- NIM --}}
        <div>
            <label class="font-medium">NIM</label>
            <input type="text" name="nim" class="w-full p-2 border rounded"
                   value="{{ $mahasiswa->nim }}" required>
        </div>

        {{-- Email --}}
        <div>
            <label class="font-medium">Email</label>
            <input type="email" name="email" class="w-full p-2 border rounded"
                   value="{{ $mahasiswa->email }}" required>
        </div>

        {{-- No HP --}}
        <div>
            <label class="font-medium">No HP</label>
            <input type="text" name="no_hp" class="w-full p-2 border rounded"
                   value="{{ $mahasiswa->no_hp }}">
        </div>

        {{-- Jenis Kelamin --}}
        <div>
            <label class="font-medium">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="w-full p-2 border rounded">
                <option value="L" {{ $mahasiswa->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ $mahasiswa->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        {{-- Tanggal Lahir --}}
        <div>
            <label class="font-medium">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="w-full p-2 border rounded"
                   value="{{ $mahasiswa->tanggal_lahir }}">
        </div>

        {{-- Alamat --}}
        <div>
            <label class="font-medium">Alamat</label>
            <textarea name="alamat" class="w-full p-2 border rounded" rows="3">{{ $mahasiswa->alamat }}</textarea>
        </div>

        {{-- Status --}}
        <div>
            <label class="font-medium">Status</label>
            <select name="status" class="w-full p-2 border rounded">
                <option value="aktif" {{ $mahasiswa->status == 'aktif' ? 'selected' : '' }}>Aktif</option>
                <option value="pending" {{ $mahasiswa->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="nonaktif" {{ $mahasiswa->status == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
            </select>
        </div>

        {{-- Foto --}}
        <div>
            <label class="font-medium">Foto</label>
            <input type="file" name="foto" class="w-full p-2 border rounded">

            @if ($mahasiswa->foto)
                <img src="{{ asset('storage/' . $mahasiswa->foto) }}" 
                     class="w-24 mt-2 rounded shadow">
            @endif
        </div>

        <button class="bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700">
            Update
        </button>

        <a href="{{ route('admin.mahasiswa.index') }}" 
           class="px-4 py-2 border rounded">
            Batal
        </a>

    </form>

</div>

@endsection
