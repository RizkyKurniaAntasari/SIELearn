@extends('layouts.app')

@section('content')
    <div class="bg-gradient-to-b from-primary to-primary_active flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-2xl shadow-xl">
            <h2 class="text-3xl font-bold text-center text-primary">Daftar</h2>

            <form id="register-form" class="space-y-5" method="POST" action="{{ route('register.post') }}">
                @csrf

                <!-- Nama Lengkap -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                    <input id="name" name="name" type="text" required
                        class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg">
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" name="email" type="email" required
                        class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg">
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" name="password" type="password" required
                        class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg">
                </div>

                <!-- Konfirmasi Password -->
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi
                        Password</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" required
                        class="w-full px-4 py-2 mt-1 border border-gray-300 rounded-lg">
                </div>

                <button type="submit" class="w-full py-2 text-white bg-primary rounded-lg">
                    Daftar
                </button>
            </form>


            <p class="text-sm text-center text-gray-600">
                Sudah punya akun?
                <a href="{{ route('login') }}" class="font-medium text-primary hover:text-primary_active">
                    Masuk sekarang
                </a>
            </p>
        </div>
    </div>

    <!-- Script AJAX untuk dummy POST -->
    <script>
        document.getElementById('register-form').addEventListener('submit', async function(e) {
            e.preventDefault(); // cegah reload halaman
            const formData = new FormData(this);

            try {
                const response = await fetch(this.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                });

                const data = await response.json();
                alert(data.message); // tampilkan "Register dummy berhasil!"
                this.reset(); // reset form

            } catch (err) {
                alert('Terjadi kesalahan. Silakan coba lagi.');
                console.error(err);
            }
        });
    </script>
@endsection
