@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-b from-primary to-primary_active flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-2xl shadow-xl">
        <h2 class="text-3xl font-bold text-center text-primary">Masuk</h2>

        <form class="space-y-5" method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input id="email" name="email" type="email" autocomplete="email" required
                    class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary focus:outline-none placeholder-gray-400">
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input id="password" name="password" type="password" autocomplete="current-password" required
                    class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-primary focus:outline-none placeholder-gray-400">
            </div>

            <!-- Ingat Saya & Lupa Password -->
            <div class="flex items-center justify-between">
                <label class="flex items-center text-sm text-gray-600">
                    <input type="checkbox" name="remember" class="w-4 h-4 text-primary border-gray-300 rounded focus:ring-primary">
                    <span class="ml-2">Ingat Saya</span>
                </label>
                <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-800">Lupa Password?</a>
            </div>

            <!-- Tombol Login -->
            <button type="submit"
                class="w-full py-2 font-semibold text-white rounded-lg bg-primary hover:bg-primary_active focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                Masuk
            </button>
        </form>

        <p class="text-sm text-center text-gray-600">
            Belum punya akun?
            <a href="{{ route('register') }}" class="font-medium text-primary hover:text-primary_active">
                Daftar sekarang
            </a>
        </p>
    </div>
</div>
@endsection
