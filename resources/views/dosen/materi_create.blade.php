@extends('layouts.dosen_app')

@section('main-content')
<h1 class="text-2xl font-bold mb-4 text-purple-700">Unggah Materi Baru</h1>

<form action="#" method="POST" enctype="multipart/form-data" class="space-y-4 bg-white p-6 rounded-xl shadow">
    @csrf

    {{-- Judul --}}
    <div>
        <label class="block mb-2 font-semibold text-gray-700">Judul:</label>
        <input type="text" name="judul"
            class="border border-purple-300 focus:ring-purple-400 focus:border-purple-500 p-2 w-full rounded-lg">
    </div>

    {{-- Deskripsi --}}
    <div>
        <label class="block mb-2 font-semibold text-gray-700">Deskripsi:</label>
        <textarea name="deskripsi"
            class="border border-purple-300 focus:ring-purple-400 focus:border-purple-500 p-2 w-full rounded-lg"
            rows="4"></textarea>
    </div>

    {{-- File --}}
    <div>
        <label class="block mb-2 font-semibold text-gray-700">File Materi:</label>
        <input type="file" name="file"
            class="border border-purple-300 p-2 w-full rounded-lg">
    </div>

    {{-- Link Google Meet --}}
    <div>
        <label class="block mb-2 font-semibold text-gray-700">Link Google Meet:</label>
        <input type="text" name="gmeet"
            placeholder="https://meet.google.com/abc-defg-hij"
            class="border border-purple-300 focus:ring-purple-400 focus:border-purple-500 p-2 w-full rounded-lg">
    </div>

    {{-- Button --}}
    <button
        class="px-4 py-2 bg-purple-700 text-white font-semibold rounded-xl shadow-md hover:bg-purple-800 transition">
        Upload
    </button>
</form>
@endsection
