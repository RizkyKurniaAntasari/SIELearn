@extends('layouts.app')

@section('content')
<div class="flex h-screen bg-gray-200">
    <div class="w-64 bg-gray-900 text-white p-4 flex flex-col">
        <h2 class="text-2xl font-bold mb-4">SIELearn (Dosen)</h2>
        
        <div class="mb-4">
            <label for="kelas_switcher_dosen" class="block text-sm font-medium text-gray-400 mb-1">Kelas yang Diajar:</label>
            <select id="kelas_switcher_dosen" name="kelas_switcher_dosen" class="w-full px-3 py-2 bg-gray-700 text-white border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                <option value="101" selected>PemWeb Lanjut (A) - Regular</option>
                <option value="102">PemWeb Lanjut (B) - Regular</option>
                <option value="103">PemWeb Lanjut (C) - Premium</option>
            </select>
        </div>
        <nav class="flex-1 space-y-1">
            <a href="{{ route('dosen.dashboard') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Dashboard</a>
            <a href="{{ route('dosen.materi') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Manajemen Materi</a>
            <a href="{{ route('dosen.tugas') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Manajemen Tugas</a>
            <a href="{{ route('dosen.absensi') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Manajemen Absensi</a>
            <a href="{{ route('dosen.laporan') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Laporan Mahasiswa</a>
            <a href="{{ route('dosen.forum') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Forum Diskusi</a>
        </nav>
        <div class="mt-4">
            <a href="/" class="block text-center w-full py-2 px-4 rounded bg-red-600 hover:bg-red-700">Logout</a>
        </div>
    </div>

    <div class="flex-1 flex flex-col overflow-hidden">
        <header class="bg-white shadow p-4 flex justify-between items-center">
            <h1 class="text-xl font-semibold">Selamat Datang, Dosen!</h1>
            <span class="text-sm font-medium text-gray-600">Mengelola kelas: <strong class="text-blue-600">PemWeb Lanjut (A) - Regular</strong></span>
        </header>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
            @yield('main-content')
        </main>
    </div>
</div>
@endsection