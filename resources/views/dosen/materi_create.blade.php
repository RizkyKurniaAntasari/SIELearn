@extends('layouts.dosen_app')

@section('main-content')
<h1 class="text-2xl font-bold mb-4">Unggah Materi Baru</h1>

<form action="#" method="POST" enctype="multipart/form-data">
    @csrf

    <label class="block mb-2 font-semibold">Judul:</label>
    <input type="text" class="border p-2 w-full mb-4">

    <label class="block mb-2 font-semibold">Deskripsi:</label>
    <textarea class="border p-2 w-full mb-4"></textarea>

    <label class="block mb-2 font-semibold">File Materi:</label>
    <input type="file" class="mb-4">

    <button class="px-4 py-2 bg-purple-700 text-white rounded-xl">
        Upload
    </button>
</form>
@endsection
