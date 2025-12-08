@extends('layouts.app')

@section('content')
<div class="flex h-screen bg-gray-200">
    <div class="w-64 bg-primary text-white p-4 flex flex-col">
        <h2 class="text-2xl font-bold mb-4">SIELearn (Mahasiswa)</h2>

        <div class="mb-2">
            <label for="kelas_switcher" class="block text-sm font-medium text-white mb-1">Kelas Aktif:</label>
            <select id="kelas_switcher" name="kelas_switcher" class="w-full px-3 py-2 bg-secondary text-white border border-border_default rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                <option value="1">Pemrograman Web Lanjut (A)</option>
                <option value="2">Basis Data (B)</option>
            </select>
        </div>
        
        {{-- <div id="info_paket_wrapper" class="mb-4">
            <div class="p-3 rounded-lg bg-blue-800 border border-blue-600 text-center shadow-lg">
                <p class="text-xs font-medium text-blue-200 uppercase tracking-wider">Paket Aktif</p>
                <p class="text-lg font-bold text-white tracking-tight">85 / 120 Menit</p>
            </div>
        </div> --}}

        <nav class="flex-1 space-y-1">
            <a href="{{ route('mahasiswa.dashboard') }}" class="block py-2 px-4 rounded hover:bg-primary_hover">Dashboard</a>
            <a href="{{ route('mahasiswa.materi') }}" class="block py-2 px-4 rounded hover:bg-primary_hover">Materi</a>
            <a href="{{ route('mahasiswa.tugas') }}" class="block py-2 px-4 rounded hover:bg-primary_hover">Tugas</a>
            <a href="{{ route('mahasiswa.absensi') }}" class="block py-2 px-4 rounded hover:bg-primary_hover">Absensi</a>
            <a href="{{ route('mahasiswa.forum') }}" class="block py-2 px-4 rounded hover:bg-primary_hover">Forum</a>
        </nav>
        
        <div class="mt-auto"> <div class="pt-4">
                <a href="{{ route('mahasiswa.cari_kelas') }}" class="block text-center w-full py-2 px-4 rounded bg-green-600 hover:bg-green-700 font-semibold">
                    + Cari & Daftar Kelas Baru
                </a>
            </div>

            <a href="{{ route('mahasiswa.profile') }}" class="block w-full text-left px-3 py-3 mt-4 rounded-lg hover:bg-gray-700 transition-colors duration-200">
                <div class="flex items-center">
                    <img class="h-10 w-10 rounded-full object-cover" src="https://i.pravatar.cc/150?img=3" alt="Foto Profil">
                    <div class="ml-3">
                        <p class="text-sm font-semibold text-white">Rizky Kurnia Antasari</p>
                        <p class="text-xs text-gray-400">Pengaturan Profil</p>
                    </div>
                </div>
            </a>
            <div class="mt-2"> <a href="/" class="block text-center w-full py-2 px-4 rounded bg-red-600 hover:bg-red-700">Logout</a>
            </div>
        </div>
    </div>

    <div class="flex-1 flex flex-col overflow-hidden">
        <header class="bg-white shadow p-4 flex justify-between items-center">
            <h1 class="text-xl font-semibold">Selamat Datang, Rizky Kurnia Antasari</h1>
            <span class="text-sm font-medium text-gray-600">Anda sedang di kelas: <strong class="text-blue-600">PemWeb Lanjut (A)</strong></span>
        </header>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
            @yield('main-content')
        </main>
    </div>

    @yield('modal')
</div>
@endsection