<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login Admin</title>
</head>
<body class="bg-gradient-to-br from-purple-700 to-purple-900 min-h-screen flex justify-center items-center">

    <div class="bg-white shadow-xl p-10 rounded-2xl w-[420px]">
        <h2 class="text-3xl font-bold text-purple-700 text-center mb-6">Login Admin</h2>

        @if(session('error'))
        <p class="text-red-500 text-center mb-4">{{ session('error') }}</p>
        @endif

        <form action="" method="POST">
            @csrf
            
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
                Login
            </button>

            <p class="text-center text-sm mt-4">
                Belum punya akun?
                <a href="{{ route('admin.register') }}" class="text-purple-600 font-semibold">Register</a>
            </p>

        </form>
    </div>
</body>
</html>
