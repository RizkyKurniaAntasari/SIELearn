@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-b from-primary to-primary_gradation flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-2xl shadow-xl">
        <h2 class="text-3xl font-bold text-center text-primary">Daftar</h2>

        <form class="space-y-5" method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Nama Lengkap -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                <input id="name" name="name" type="text" autocomplete="name" required
                    placeholder="Nama Lengkap"
                    class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary focus:outline-none placeholder-gray-400">
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input id="email" name="email" type="email" autocomplete="email" required
                    placeholder="Alamat Email"
                    class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary focus:outline-none placeholder-gray-400">
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input id="password" name="password" type="password" autocomplete="new-password" required
                    placeholder="Password"
                    class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary focus:outline-none placeholder-gray-400">
            </div>

            <!-- Tombol Daftar -->
            <button type="submit"
                class="w-full py-2 font-semibold text-white rounded-lg bg-primary hover:bg-primary_gradation focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                Daftar
            </button>
        </form>

        <p class="text-sm text-center text-gray-600">
            Sudah punya akun?
            <a href="{{ route('login') }}" class="font-medium text-primary hover:text-primary_gradation">
                Masuk sekarang
            </a>
        </p>
    </div>
</div>
@endsection
