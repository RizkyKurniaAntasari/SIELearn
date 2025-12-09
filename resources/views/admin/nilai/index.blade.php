@extends('admin.layout')


@section('content')
<div class="p-6">
    <div class="flex justify-between items-center mb-5">
        <h1 class="text-2xl font-bold text-purple-700">Data Nilai</h1>
        <a href="{{ route('admin.nilai.create') }}"
           class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
            + Tambah Nilai
        </a>
    </div>

    <div class="bg-white p-5 rounded-lg shadow">
        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-gray-200 text-left">
                    <th class="p-3">Mahasiswa</th>
                    <th class="p-3">Kelas</th>
                    <th class="p-3">Nilai</th>
                    <th class="p-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nilai as $n)
                    <tr class="border-b">
                        <td class="p-3">{{ $n->mahasiswa->nama }}</td>
                        <td class="p-3">{{ $n->kelas->nama_kelas }}</td>
                        <td class="p-3 font-bold">{{ $n->nilai }}</td>
                        <td class="p-3 flex gap-2">
                            <a href="{{ route('admin.nilai.edit', $n->id) }}"
                               class="px-3 py-1 bg-yellow-400 text-white rounded hover:bg-yellow-500">
                                Edit
                            </a>

                            <form method="POST" action="{{ route('admin.nilai.destroy', $n->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700"
                                        onclick="return confirm('Hapus nilai ini?')">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
