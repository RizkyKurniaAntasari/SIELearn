<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin SIElearn')</title>

    {{-- Tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- FontAwesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        .sidebar {
            width: 260px;
        }
        .content-area {
            margin-left: 260px;
        }
    </style>

    @yield('head')
</head>

<body class="bg-gray-100">

    <!-- SIDEBAR -->
    <aside class="sidebar fixed top-0 left-0 h-full bg-violet-700 text-white flex flex-col justify-between py-5 shadow-xl z-20">

        <div>
            <!-- Logo -->
            <h1 class="text-2xl font-bold px-6 mb-6">Admin SIElearn</h1>

            <nav>
                <ul class="flex flex-col gap-1">

                    <!-- Dashboard -->
                    <li>
                        <a href="{{ route('admin.dashboard') }}"
                           class="px-5 py-3 flex gap-3 items-center hover:bg-violet-600
                                {{ request()->is('admin/dashboard') ? 'bg-violet-600 text-white' : '' }}">
                            <i class="fa-solid fa-house"></i> Dasbor
                        </a>
                    </li>

                    <!-- Mahasiswa -->
                    <li>
                        <a href="{{ route('admin.mahasiswa.index') }}"
                           class="px-5 py-3 flex gap-3 items-center hover:bg-violet-600
                                {{ request()->is('admin/mahasiswa*') ? 'bg-violet-600 text-white' : '' }}">
                            <i class="fa-solid fa-users"></i> Mahasiswa
                        </a>
                    </li>

                    <!-- Dosen -->
                    <li>
                        <a href="{{ route('admin.dosen.index') }}"
                           class="px-5 py-3 flex gap-3 items-center hover:bg-violet-600
                                {{ request()->is('admin/dosen*') ? 'bg-violet-600 text-white' : '' }}">
                            <i class="fa-solid fa-user-tie"></i> Dosen
                        </a>
                    </li>

                    <!-- Kelas -->
                    <li>
                        <a href="{{ route('admin.kelas.index') }}"
                           class="px-5 py-3 flex gap-3 items-center hover:bg-violet-600
                                {{ request()->is('admin/kelas*') ? 'bg-violet-600 text-white' : '' }}">
                            <i class="fa-solid fa-school"></i> Kelas
                        </a>
                    </li>

                    <!-- Materi -->
                    <li>
                        <a href="{{ route('admin.materi.index') }}"
                           class="px-5 py-3 flex gap-3 items-center hover:bg-violet-600
                                {{ request()->is('admin/materi*') ? 'bg-violet-600 text-white' : '' }}">
                            <i class="fa-solid fa-book"></i> Materi
                        </a>
                    </li>

                    <!-- Absensi -->
                    <li>
                        <a href="{{ route('admin.absensi.index') }}"
                           class="px-5 py-3 flex gap-3 items-center hover:bg-violet-600
                                {{ request()->is('admin/absensi*') ? 'bg-violet-600 text-white' : '' }}">
                            <i class="fa-solid fa-check"></i> Ketidakhadiran
                        </a>
                    </li>

                    <!-- Nilai -->
                    <li>
                        <a href="{{ route('admin.nilai.index') }}"
                           class="px-5 py-3 flex gap-3 items-center hover:bg-violet-600
                                {{ request()->is('admin/nilai*') ? 'bg-violet-600 text-white' : '' }}">
                            <i class="fa-solid fa-star"></i> Nilai
                        </a>
                    </li>

                    <!-- Pembayaran -->
                    <li>
                        <a href="{{ route('admin.pembayaran.index') }}"
                           class="px-5 py-3 flex gap-3 items-center hover:bg-violet-600
                                {{ request()->is('admin/pembayaran*') ? 'bg-violet-600 text-white' : '' }}">
                            <i class="fa-solid fa-money-bill"></i> Pembayaran
                        </a>
                    </li>

                </ul>
            </nav>
        </div>

        <!-- Logout -->
        <div class="mt-10 px-5">
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button class="bg-red-500 hover:bg-red-600 px-4 py-3 w-full rounded-lg 
                               text-white font-medium flex items-center gap-3">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i> Keluar
                </button>
            </form>
        </div>

    </aside>

    <!-- MAIN CONTENT -->
    <div class="content-area min-h-screen">

        <!-- TOPBAR -->
        <header class="h-16 bg-white shadow flex items-center justify-between px-6 sticky top-0 z-10">
            <h1 class="text-2xl font-semibold">
                @yield('title', 'Dashboard')
            </h1>

            <div class="flex items-center gap-4">
                <span class="font-medium">{{ Auth::user()->name ?? 'Admin' }}</span>

                <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name ?? 'Admin' }}"
                     class="w-10 h-10 rounded-full shadow">
            </div>
        </header>

        <!-- PAGE CONTENT -->
        <main class="p-6">
            @yield('content')
        </main>

    </div>

    @yield('scripts')

</body>
</html>
