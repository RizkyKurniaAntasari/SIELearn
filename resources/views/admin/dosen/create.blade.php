@extends('layouts.master')

@section('title', 'Tambah Dosen')

@section('content')
<div class="flex justify-center">
    <div class="bg-white p-6 rounded-lg shadow-md w-full md:w-1/2">

        <h1 class="text-2xl font-bold mb-5">Tambah Dosen</h1>

        <form action="{{ route('admin.dosen.store') }}" method="POST">
            @csrf

            {{-- NAMA --}}
            <div class="mb-4">
                <label class="block mb-1 font-semibold">Nama Dosen</label>
                <input type="text" name="name"
                       class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-purple-500"
                       required>
            </div>

            {{-- EMAIL --}}
            <div class="mb-4">
                <label class="block mb-1 font-semibold">Email</label>
                <input type="email" name="email"
                       class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-purple-500"
                       required>
            </div>

            {{-- PASSWORD --}}
            <div class="mb-4">
                <label class="block mb-1 font-semibold">Password</label>
                <input type="password" name="password"
                       class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-purple-500"
                       required>
            </div>

            {{-- BUTTON --}}
            <button class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg shadow">
                Simpan
            </button>
        </form>

    </div>
</div>
@endsection
