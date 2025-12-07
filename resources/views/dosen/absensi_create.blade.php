@extends('layouts.dosen_app')

@section('main-content')

<h1 class="text-2xl font-bold text-purple-700 mb-6">Buka Sesi Absensi Baru</h1>

<div class="bg-white p-6 rounded-xl shadow-lg border border-purple-200">

    <form action="#" method="POST">
        @csrf

        <label class="font-semibold">Tanggal Sesi</label>
        <input type="date" class="w-full p-3 border rounded-lg mt-1 mb-4">

        <label class="font-semibold">Nama Kelas</label>
        <input type="text" value="PemWeb Lanjut A" class="w-full p-3 border rounded-lg mt-1 mb-4">

        <label class="font-semibold">Catatan Tambahan</label>
        <textarea class="w-full p-3 border rounded-lg mt-1 mb-4" placeholder="Opsional"></textarea>

        <button
            class="px-4 py-2 bg-purple-700 text-white font-semibold rounded-xl shadow hover:bg-purple-800">
            Buat Sesi Absensi
        </button>
    </form>

</div>

@endsection
