<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Register Admin</title>
</head>
<body class="bg-gradient-to-br from-purple-700 to-purple-900 min-h-screen flex justify-center items-center">

    <div class="bg-white shadow-xl p-10 rounded-2xl w-[420px]">
        <h2 class="text-3xl font-bold text-purple-700 text-center mb-6">Register Admin</h2>

        @if(session('success'))
        <p class="text-green-500 text-center mb-4">{{ session('success') }}</p>
        @endif

        <form action="" method="POST">
            @csrf
            
            <div class="mb-4">
                <label class="font-semibold">Nama Lengkap</label>
                <input type="text" name="name"
                       class="w-full mt-1 p-3 border rounded-xl focus:ring-2 focus:ring-purple-500">
            </div>

            <div class="mb-4">
                <label class="font-semibold">Email</label>
                <input type="email" name="email"
                       class="w-full mt-1 p-3 border rounded-xl focus:ring-2 focus:ring-purple-500">
            </div>

            <div class="mb-6">
                <label class="font-semibold">Password</label>
                <input type="password" name="password"
                       class="w-full mt-1 p-3 border rounded-xl focus:ring-2 focus:ring-purple-500">
            </div>

            <button class="w-full bg-purple-700 hover:bg-purple-800 text-white p-3 rounded-xl font-semibold">
                Daftar
            </button>

            <p class="text-center text-sm mt-4">
                Sudah punya akun?
                <a href="{{ route('admin.login') }}" class="text-purple-600 font-semibold">Login</a>
            </p>

        </form>
    </div>
</body>
</html>
