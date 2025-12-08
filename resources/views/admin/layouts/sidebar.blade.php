<aside class="w-64 bg-purple-700 text-white fixed h-screen z-50">

    <!-- HEADER -->
    <div class="text-center py-4 text-xl font-bold border-b border-purple-500">
        Admin SIELearn
    </div>

    <!-- NAV -->
    <nav class="mt-4 space-y-1">

        <a href="{{ route('admin.dashboard') }}"
           class="block px-4 py-2 rounded hover:bg-purple-600 
           {{ request()->is('admin/dashboard') ? 'bg-purple-600' : '' }}">
            Dasbor
        </a>

        <a href="{{ route('admin.mahasiswa.index') }}"
           class="block px-4 py-2 rounded hover:bg-purple-600
           {{ request()->is('admin/mahasiswa*') ? 'bg-purple-600' : '' }}">
            Mahasiswa
        </a>

        <a href="{{ route('admin.dosen.index') }}"
           class="block px-4 py-2 rounded hover:bg-purple-600
           {{ request()->is('admin/dosen*') ? 'bg-purple-600' : '' }}">
            Dosen
        </a>

        <a href="{{ route('admin.kelas.index') }}"
           class="block px-4 py-2 rounded hover:bg-purple-600
           {{ request()->is('admin/kelas*') ? 'bg-purple-600' : '' }}">
            Kelas
        </a>

        <a href="{{ route('admin.materi.index') }}"
           class="block px-4 py-2 rounded hover:bg-purple-600
           {{ request()->is('admin/materi*') ? 'bg-purple-600' : '' }}">
            Materi
        </a>

        <a href="{{ route('admin.absensi.index') }}"
           class="block px-4 py-2 rounded hover:bg-purple-600
           {{ request()->is('admin/absensi*') ? 'bg-purple-600' : '' }}">
            Kehadiran
        </a>

        <a href="{{ route('admin.nilai.index') }}"
           class="block px-4 py-2 rounded hover:bg-purple-600
           {{ request()->is('admin/nilai*') ? 'bg-purple-600' : '' }}">
            Nilai
        </a>

        <a href="{{ route('admin.pembayaran.index') }}"
           class="block px-4 py-2 rounded hover:bg-purple-600
           {{ request()->is('admin/pembayaran*') ? 'bg-purple-600' : '' }}">
            Pembayaran
        </a>

    </nav>

    <!-- LOGOUT -->
    <div class="absolute bottom-5 w-full px-4">
        <a href="{{ route('admin.logout') }}"
           class="block text-center bg-red-500 hover:bg-red-600 text-white py-3 rounded-lg font-semibold">
            Keluar
        </a>
    </div>

</aside>
