@extends('layouts.master')

@section('title', 'Dosen')

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md">

    <div class="flex justify-between items-center mb-5">
        <h1 class="text-2xl font-bold">Data Dosen</h1>

        <a href="{{ route('admin.dosen.create') }}"
           class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg">
            + Tambah Dosen
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full border rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="p-3 border">No</th>
                    <th class="p-3 border">Nama</th>
                    <th class="p-3 border">Email</th>
                    <th class="p-3 border w-32 text-center">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse($dosen as $row)
                    <tr class="hover:bg-gray-50">
                        <td class="border p-3">{{ $loop->iteration }}</td>
                        <td class="border p-3">{{ $row->name }}</td>
                        <td class="border p-3">{{ $row->email }}</td>

                        <td class="border p-2">
                            <div class="flex justify-center gap-2">

                                <a href="{{ route('admin.dosen.edit', $row->id) }}"
                                   class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded-lg shadow">
                                    <i class="fa-solid fa-edit"></i>
                                </a>

                                <form action="{{ route('admin.dosen.destroy', $row->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('Yakin hapus?')">
                                    @csrf
                                    @method('DELETE')

                                    <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-lg shadow">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>

                            </div>
                        </td>
                    </tr>

                @empty
                    <tr>
                        <td colspan="4" class="text-center p-4 text-gray-500">
                            Belum ada data dosen.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
@endsection
