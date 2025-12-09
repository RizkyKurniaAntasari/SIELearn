@extends('admin.layout')

@section('title', 'Data Kelas')

@section('content')

<h1 class="text-3xl font-bold mb-6">Data Kelas</h1>

<a href="{{ route('admin.kelas.create') }}" 
   class="px-4 py-2 bg-purple-600 text-white rounded hover:bg-purple-700">
    + Tambah Kelas
</a>

<div class="mt-6 bg-white p-6 rounded-lg shadow">
    <table class="w-full border border-gray-300 rounded-lg overflow-hidden">
        <thead class="bg-purple-700 text-white">
            <tr>
                <th class="p-3 text-left">Nama Kelas</th>
                <th class="p-3 text-left">Jurusan</th>
                <th class="p-3 text-left">Angkatan</th>
                <th class="p-3 text-center">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse($kelas as $item)
            <tr class="border-b hover:bg-gray-100">
                <td class="p-3">{{ $item->nama_kelas }}</td>
                <td class="p-3">{{ $item->jurusan }}</td>
                <td class="p-3">{{ $item->angkatan }}</td>

                <td class="p-3 text-center flex justify-center space-x-3">
                    <a href="{{ route('admin.kelas.edit', $item->id) }}" 
                       class="px-3 py-1 bg-blue-500 text-white rounded">
                        Edit
                    </a>

                    <form action="{{ route('admin.kelas.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="px-3 py-1 bg-red-500 text-white rounded"
                                onclick="return confirm('Yakin hapus?')">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center p-4">Belum ada data kelas.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
