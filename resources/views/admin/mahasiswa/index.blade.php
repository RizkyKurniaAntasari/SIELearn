@extends('admin.layouts.master')

@section('content')
<div class="bg-white p-6 rounded shadow">

    <div class="flex justify-between mb-4">
        <h2 class="text-xl font-semibold">Data Mahasiswa</h2>
        <a href="{{ route('admin.mahasiswa.create') }}" 
           class="bg-purple-600 px-4 py-2 text-white rounded hover:bg-purple-700">
            + Tambah Mahasiswa
        </a>
    </div>

    <table class="w-full border">
        <thead>
    <tr class="bg-purple-800 text-white">
        <th class="px-4 py-3">Nama</th>
        <th class="px-4 py-3">NIM</th>
        <th class="px-4 py-3">E-mail</th>
        <th class="px-4 py-3">Status</th>
        <th class="px-4 py-3">Aksi</th>
    </tr>
</thead>
        <tbody>
    @forelse ($mahasiswa as $mhs)
        <tr class="border-b hover:bg-gray-100">
            <td class="px-4 py-3">{{ $mhs->nama_lengkap }}</td>
            <td class="px-4 py-3">{{ $mhs->nim }}</td>
            <td class="px-4 py-3">{{ $mhs->email }}</td>
            <td class="px-4 py-3">
                <span class="px-2 py-1 rounded text-white 
                    {{ $mhs->status == 'aktif' ? 'bg-green-500' : 'bg-red-500' }}">
                    {{ ucfirst($mhs->status) }}
                </span>
            </td>
            <td class="px-4 py-3">
                <div class="flex gap-2">
                    <a href="{{ route('admin.mahasiswa.edit', $mhs->id) }}"
                       class="px-3 py-1 bg-blue-500 text-white rounded">
                       Edit
                    </a>

                    <form action="{{ route('admin.mahasiswa.destroy', $mhs->id) }}" method="POST"
                          onsubmit="return confirm('Yakin hapus mahasiswa?');">
                        @csrf
                        @method('DELETE')
                        <button class="px-3 py-1 bg-red-500 text-white rounded">
                            Hapus
                        </button>
                    </form>
                </div>
            </td>
        </tr>

    @empty
        <tr>
            <td colspan="5" class="text-center py-6 text-gray-500">
                Belum ada data mahasiswa.
            </td>
        </tr>
    @endforelse
</tbody>

    </table>

    <div class="mt-4">
        {{ $mahasiswa->links() }}
    </div>

</div>
@endsection
