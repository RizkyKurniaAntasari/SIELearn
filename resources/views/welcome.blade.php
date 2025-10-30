@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-200">
    <div class="text-center">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Selamat Datang di SIELearn</h1>
        <p class="text-lg text-gray-600 mb-8">Sistem Informasi e-Learning Universitas Lampung [cite: 28, 15]</p>
        <a href="{{ route('login') }}" class="px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition duration-300">
            Masuk ke Sistem
        </a>
    </div>
</div>
@endsection