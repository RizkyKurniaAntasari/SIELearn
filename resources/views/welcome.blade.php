@extends('layouts.app')

@section('content')
    {{-- Hero Section --}}
    <div class="bg-indigo-600 rounded-lg shadow-xl text-white text-center py-20 px-6">
        <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-4">
            Selamat Datang di SIELearn
        </h1>
        <p class="text-lg md:text-xl text-indigo-200 mb-8 max-w-2xl mx-auto">
            Platform pembelajaran online yang dirancang untuk membantu Anda meraih kesuksesan akademis dengan materi yang terstruktur dan mudah diakses.
        </p>
        <a href="#kelas" class="bg-white text-indigo-600 font-bold py-3 px-8 rounded-full hover:bg-indigo-100 transition duration-300 ease-in-out transform hover:scale-105">
            Lihat Pilihan Kelas
        </a>
    </div>

    {{-- Features Section --}}
    <div class="py-16 bg-gray-50 -mx-4 sm:-mx-6 lg:-mx-8 px-4 sm:px-6 lg:px-8 mt-12">
        <div class="container mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">Kenapa Memilih SIELearn?</h2>
                <p class="text-gray-600 mt-2">Keunggulan yang kami tawarkan untuk pengalaman belajar terbaik.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
                <div class="p-6 bg-white rounded-lg shadow-md">
                    <div class="flex items-center justify-center h-12 w-12 rounded-full bg-indigo-500 text-white mx-auto mb-4">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Belajar Fleksibel</h3>
                    <p class="text-gray-600">Akses materi kapan saja dan di mana saja sesuai dengan jadwal Anda.</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-md">
                     <div class="flex items-center justify-center h-12 w-12 rounded-full bg-indigo-500 text-white mx-auto mb-4">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" /></svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Materi Berkualitas</h3>
                    <p class="text-gray-600">Dapatkan materi yang disusun oleh para dosen ahli di bidangnya.</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-md">
                     <div class="flex items-center justify-center h-12 w-12 rounded-full bg-indigo-500 text-white mx-auto mb-4">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a2 2 0 01-2-2V7a2 2 0 012-2h2m8-2H5a2 2 0 00-2 2v10a2 2 0 002 2h11l4 4V5a2 2 0 00-2-2z" /></svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Diskusi Interaktif</h3>
                    <p class="text-gray-600">Berinteraksi dengan dosen dan mahasiswa lain melalui forum diskusi.</p>
                </div>
            </div>
        </div>
    </div>
    
    {{-- Featured Courses Section --}}
    <div id="kelas" class="py-16">
        <div class="container mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">Kelas Populer</h2>
                <p class="text-gray-600 mt-2">Ikuti kelas yang paling diminati oleh mahasiswa kami.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Contoh Kartu Kelas 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                    <img src="https://placehold.co/600x400/818cf8/ffffff?text=Web+Dev" alt="Gambar Kelas" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Pengembangan Web Lanjutan</h3>
                        <p class="text-gray-600 mb-4">Pelajari teknologi web modern seperti React, Vue, dan Laravel untuk membangun aplikasi web canggih.</p>
                        <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-800">Lihat Detail →</a>
                    </div>
                </div>
                <!-- Contoh Kartu Kelas 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                    <img src="https://placehold.co/600x400/60a5fa/ffffff?text=Data+Science" alt="Gambar Kelas" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Dasar-dasar Sains Data</h3>
                        <p class="text-gray-600 mb-4">Kuasai fundamental analisis data, machine learning, dan visualisasi menggunakan Python.</p>
                        <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-800">Lihat Detail →</a>
                    </div>
                </div>
                <!-- Contoh Kartu Kelas 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                    <img src="https://placehold.co/600x400/34d399/ffffff?text=UI/UX" alt="Gambar Kelas" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Desain UI/UX Fundamental</h3>
                        <p class="text-gray-600 mb-4">Ciptakan desain antarmuka yang intuitif dan pengalaman pengguna yang memukau.</p>
                        <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-800">Lihat Detail →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
