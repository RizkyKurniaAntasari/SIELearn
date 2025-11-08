@extends('layouts.admin_app')

@section('main-content')
<div class="max-w-3xl mx-auto p-6 bg-white rounded-xl shadow-md">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Detail User</h2>

    <div class="border-t border-gray-200 pt-4">
        <p class="text-gray-600 mb-2"><span class="font-medium text-gray-800">ID:</span> {{ $user->id_mahasiswa }}</p>
        <p class="text-gray-600 mb-2"><span class="font-medium text-gray-800">Nama:</span> {{ $user->nama }}</p>
        <p class="text-gray-600 mb-2"><span class="font-medium text-gray-800">Email:</span> {{ $user->email }}</p>
        <p class="text-gray-600 mb-2"><span class="font-medium text-gray-800">Role:</span> {{ $user->role ?? '-' }}</p>
    </div>

    <a href="{{ route('admin.users') }}" 
       class="mt-6 inline-block px-4 py-2 bg-gray-200 rounded-lg text-gray-700 hover:bg-gray-300 transition">
       Kembali
    </a>
</div>
@endsection
