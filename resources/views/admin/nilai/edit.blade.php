@extends('admin.layout')


@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold text-purple-700 mb-5">Edit Nilai</h1>

    <div class="bg-white shadow p-6 rounded-lg">
        <form action="{{ route('admin.nilai.update', $nilai->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="font-semibold">Mahasiswa</label>
                <select name="mahasiswa_id" class="w-full border p-2 rounded mt-1">
                    @foreach ($mahasiswa as $m)
                        <option value="{{ $m->id }}" {{ $nilai->mahasiswa_id == $m->id ? 'selected' : '' }}>
                            {{ $m->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label class="font-semibold">Kelas</label>
                <select name="kelas_id" class="w-full border p-2 rounded mt-1">
                    @foreach ($kelas as $k)
                        <option value="{{ $k->id }}" {{ $nilai->kelas_id == $k->id ? 'selected' : '' }}>
                            {{ $k->nama_kelas }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label class="font-semibold">Nilai</label>
                <input type="number" name="nilai"
                       class="w-full border p-2 rounded"
                       value="{{ $nilai->nilai }}"
                       required>
            </div>

            <div class="flex justify-end">
                <button class="px-4 py-2 bg-purple-600 text-white rounded hover:bg-purple-700">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
