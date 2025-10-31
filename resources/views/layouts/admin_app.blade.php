@extends('layouts.app')

@section('content')
<div class="flex h-screen bg-gray-200">
    <div class="w-64 bg-gray-900 text-white p-4 flex flex-col">
        <h2 class="text-2xl font-bold mb-6">SIELearn (Admin)</h2>
        <nav class="flex-1 space-y-1">
            <a href="{{ route('admin.dashboard') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Dashboard</a>
            <a href="{{ route('admin.users') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Manajemen Pengguna</a>
            
            <a href="{{ route('admin.konfirmasi') }}" class="block py-2 px-4 rounded hover:bg-gray-700 relative">
                Konfirmasi Akun
                <span class="absolute top-2 right-2 flex h-3 w-3">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-red-500"></span>
                </span>
            </a>
            <a href="{{ route('admin.akademik') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Manajemen Akademik</a>
            <a href="{{ route('admin.laporan') }}" class="block py-2 px-4 rounded hover:bg-gray-700">Laporan & Monitoring</a>
        </nav>
        <div class="mt-4">
            <a href="/" class="block text-center w-full py-2 px-4 rounded bg-red-600 hover:bg-red-700">Logout</a>
        </div>
    </div>

    <div class="flex-1 flex flex-col overflow-hidden">
        <header class="bg-white shadow p-4">
            <h1 class="text-xl font-semibold">Selamat Datang, Admin!</h1>
        </header>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
            @yield('main-content')
        </main>
    </div>

    @yield('modal')

</div>
@endsection