@extends('layouts.app')

@section('content')
<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-primary text-white flex flex-col items-center py-8">
        <div class="flex flex-col items-center mb-6">
            <img src="{{ asset('images/gambar.jpg') }}" alt="User" class="w-20 h-20 rounded-full border-4 border-white shadow-md">
            <h3 class="mt-3 text-lg font-semibold">GUEST</h3>
        </div>

        <nav class="space-y-3 w-full text-center">
            <a href="#" class="block py-2 hover:bg-primary_gradation rounded-md mx-4 transition">Dashboard</a>
            <a href="#" class="block py-2 hover:bg-primary_gradation rounded-md mx-4 transition">Kelas</a>
        </nav>
    </aside>

    <!-- MAIN CONTENT -->
    <div class="flex-1 flex flex-col">

        <!-- HEADER -->
        <header class="flex justify-between items-center p-6 bg-white shadow-sm">
            <div class="flex items-center space-x-2">
                <button class="text-primary focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <div class="space-x-3">
                <a href="{{ route('login') }}" class="px-4 py-2 border border-primary text-primary rounded-lg hover:bg-primary hover:text-white transition">Masuk</a>
                <a href="{{ route('register') }}" class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary_gradation transition">Daftar</a>
            </div>
        </header>

        <!-- HERO SECTION -->
        <section class="flex flex-col md:flex-row items-center justify-between p-10 bg-white">
            <div class="max-w-xl space-y-4">
                <h1 class="text-4xl font-extrabold text-gray-900 leading-snug">Belajar Makin Seru!!</h1>
                <p class="text-gray-600">Langkahmu di sini baru permulaan. Terus eksplorasi minat, praktikkan ilmumu, dan wujudkan inspirasimu di dunia digital.</p>
                <a href="#" class="inline-block px-6 py-3 bg-primary text-white font-semibold rounded-lg hover:bg-primary_gradation transition">Cek Kelas</a>
            </div>

            <div class="mt-8 md:mt-0 md:ml-8">
                <img src="{{ asset('images/gambar.jpg') }}" alt="Hero" class="w-80 h-80 object-cover rounded-lg shadow-md">
            </div>
        </section>

        <!-- AVAILABLE CLASSES -->
        <section class="px-10 py-8 bg-gray-50 flex-1">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Tersedia Kelas</h2>

            <div class="space-y-5">
                <!-- Card Kelas -->
                @foreach ([
                    ['title' => 'Back-End Developer', 'desc' => 'Kelas Back-End Developer belajar membangun server, database, dan API untuk aplikasi web.', 'price' => '180K'],
                    ['title' => 'Front-End Web Developer', 'desc' => 'Kelas Front-End Web Developer belajar membuat tampilan dan interaksi website yang responsif dan menarik.', 'price' => '210K'],
                    ['title' => 'Data Analyst', 'desc' => 'Kelas Data Analyst belajar mengolah, menganalisis, dan memvisualisasikan data untuk menghasilkan insight.', 'price' => '210K'],
                ] as $class)
                <div class="flex flex-col md:flex-row bg-white rounded-xl shadow-sm overflow-hidden">
                    <img src="{{ asset('images/gambar.jpg') }}" alt="{{ $class['title'] }}" class="w-full md:w-48 h-40 object-cover">
                    <div class="flex flex-col justify-between p-5 flex-1">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">{{ $class['title'] }}</h3>
                            <p class="text-sm text-gray-600 mt-1">{{ $class['desc'] }}</p>
                        </div>
                        <div class="flex items-center justify-between mt-4 text-sm">
                            <div class="flex items-center space-x-4 text-gray-500">
                                <span>3 Materi</span>
                                <span>20 jam</span>
                            </div>
                            <span class="font-bold text-primary">≈ {{ $class['price'] }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>
</div>
@endsection
