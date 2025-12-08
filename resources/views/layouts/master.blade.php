<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | SIELearn Admin</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="bg-gray-100 min-h-screen flex">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-purple-700 text-white min-h-screen p-6 flex flex-col justify-between">

        <div>
            <h2 class="text-2xl font-bold mb-8">Admin SIElearn</h2>

            <nav class="space-y-4 text-lg">

                <a href="{{ route('admin.dashboard') }}" class="block py-2 px-3 hover:bg-purple-800 rounded">
                    <i class="fa fa-home mr-2"></i> Dasbor
                </a>

                <a href="{{ route('admin.mahasiswa.index') }}" class="block py-2 px-3 hover:bg-purple-800 rounded">
                    <i class="fa fa-users mr-2"></i> Mahasiswa
                </a>

                <a href="{{ route('admin.dosen.index') }}" class="block py-2 px-3 hover:bg-purple-800 rounded">
                    <i class="fa fa-user-tie mr-2"></i> Dosen
                </a>

                <a href="{{ route('admin.kelas.index') }}" class="block py-2 px-3 hover:bg-purple-800 rounded">
                    <i class="fa fa-school mr-2"></i> Kelas
                </a>

                <a href="{{ route('admin.materi.index') }}" class="block py-2 px-3 hover:bg-purple-800 rounded">
                    <i class="fa fa-book mr-2"></i> Materi
                </a>

                <a href="{{ route('admin.absensi.index') }}" class="block py-2 px-3 hover:bg-purple-800 rounded">
                    <i class="fa fa-calendar-check mr-2"></i> Ketidakhadiran
                </a>

                <a href="{{ route('admin.nilai.index') }}" class="block py-2 px-3 hover:bg-purple-800 rounded">
                    <i class="fa fa-star mr-2"></i> Nilai
                </a>

                <a href="{{ route('admin.pembayaran.index') }}" class="block py-2 px-3 hover:bg-purple-800 rounded">
                    <i class="fa fa-money-bill mr-2"></i> Pembayaran
                </a>

            </nav>
        </div>

        <!-- LOGOUT BUTTON -->
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button
                class="bg-red-500 hover:bg-red-600 w-full py-3 rounded-lg text-white font-semibold mt-10">
                <i class="fa fa-right-from-bracket mr-2"></i> Keluar
            </button>
        </form>

    </aside>

    <!-- MAIN CONTENT -->
    <main class="flex-1 p-6">
        @yield('content')
    </main>

</body>
</html>
