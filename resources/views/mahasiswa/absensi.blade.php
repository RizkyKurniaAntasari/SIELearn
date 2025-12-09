@extends('layouts.mahasiswa_app')

@section('main-content')
    
    {{-- HEADER --}}
    <div class="flex flex-col md:flex-row justify-between items-end mb-8 gap-4">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Absensi Perkuliahan</h1>
            <p class="text-gray-500 text-sm mt-1">Rekap kehadiran mata kuliah Pemrograman Web Lanjut</p>
        </div>
        <div class="text-right">
            <span class="block text-3xl font-bold text-purple-600">30 Okt</span>
            <span class="text-gray-400 text-xs font-medium uppercase tracking-wide">Hari Ini</span>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        
        {{-- KOLOM KIRI: TINDAKAN UTAMA & RIWAYAT --}}
        <div class="lg:col-span-2 space-y-8">
            
            {{-- 1. KARTU ABSENSI (Fokus Utama) --}}
            <div class="bg-gradient-to-br from-white to-purple-50 rounded-2xl p-6 shadow-sm border border-purple-100 relative overflow-hidden">
                {{-- Hiasan Background --}}
                <div class="absolute top-0 right-0 -mt-4 -mr-4 w-24 h-24 bg-purple-100 rounded-full blur-xl opacity-60"></div>

                <div class="relative z-10">
                    <div class="flex items-center justify-between mb-6">
                        <div>
                            <h2 class="text-lg font-bold text-gray-800">Sesi Absensi Dibuka</h2>
                            <p class="text-sm text-purple-600 font-medium flex items-center gap-2 mt-1">
                                <span class="relative flex h-2.5 w-2.5">
                                  <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                                  <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-green-500"></span>
                                </span>
                                Status: Belum Absen
                            </p>
                        </div>
                        <div class="text-center bg-white px-4 py-2 rounded-xl shadow-sm border border-gray-100">
                            <span class="block text-[10px] text-gray-400 uppercase font-bold">Jam</span>
                            <span class="block text-xl font-bold text-gray-800">08:00</span>
                        </div>
                    </div>

                    {{-- Tombol Aksi Besar --}}
                    <form action="#" method="POST">
                        @csrf
                        <button type="submit" class="group w-full py-3.5 bg-purple-600 hover:bg-purple-700 text-white font-bold rounded-xl shadow-md hover:shadow-lg transition-all duration-200 flex items-center justify-center gap-3">
                            <span>KONFIRMASI KEHADIRAN</span>
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </button>
                    </form>
                    <p class="text-center text-xs text-gray-400 mt-3">Lokasi: Ruang Lab Komputer 1</p>
                </div>
            </div>

            {{-- 2. TABEL RIWAYAT (Simple & Clean) --}}
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-50 flex justify-between items-center bg-gray-50/50">
                    <h3 class="font-bold text-gray-700 text-sm uppercase tracking-wide">Riwayat Terakhir</h3>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <tbody class="divide-y divide-gray-50 text-sm">
                            {{-- Row 1 --}}
                            <tr class="hover:bg-purple-50 transition duration-150 group">
                                <td class="px-6 py-4">
                                    <span class="font-medium text-gray-900 block">Pertemuan 3</span>
                                    <span class="text-xs text-gray-400">23 Oktober 2025</span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-green-100 text-green-700">
                                        Hadir
                                    </span>
                                </td>
                            </tr>
                            {{-- Row 2 --}}
                            <tr class="hover:bg-purple-50 transition duration-150 group">
                                <td class="px-6 py-4">
                                    <span class="font-medium text-gray-900 block">Pertemuan 2</span>
                                    <span class="text-xs text-gray-400">16 Oktober 2025</span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-red-100 text-red-700">
                                        Alfa
                                    </span>
                                </td>
                            </tr>
                            {{-- Row 3 --}}
                            <tr class="hover:bg-purple-50 transition duration-150 group">
                                <td class="px-6 py-4">
                                    <span class="font-medium text-gray-900 block">Pertemuan 1</span>
                                    <span class="text-xs text-gray-400">09 Oktober 2025</span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-yellow-100 text-yellow-700">
                                        Izin
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="p-4 bg-gray-50 text-center">
                    <button class="text-xs font-bold text-purple-600 hover:text-purple-800 transition uppercase tracking-wide">Lihat Semua Riwayat</button>
                </div>
            </div>

        </div>

        {{-- KOLOM KANAN: STATISTIK SIMPEL --}}
        <div class="space-y-6">
            
            {{-- STATISTIK UTAMA (Digabung jadi satu card agar ringkas) --}}
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
                <h4 class="text-sm font-bold text-gray-400 uppercase tracking-wide mb-6">Statistik Kehadiran</h4>
                
                {{-- Lingkaran Progress Besar --}}
                <div class="flex items-center justify-center mb-6 relative">
                    <svg class="w-32 h-32 transform -rotate-90">
                        <circle cx="64" cy="64" r="56" stroke="currentColor" stroke-width="8" fill="transparent" class="text-gray-100" />
                        <circle cx="64" cy="64" r="56" stroke="currentColor" stroke-width="8" fill="transparent" :stroke-dasharray="351.86" :stroke-dashoffset="351.86 - (351.86 * 85 / 100)" class="text-purple-600" />
                    </svg>
                    <div class="absolute text-center">
                        <span class="text-3xl font-bold text-gray-800">85%</span>
                        <span class="block text-[10px] text-gray-400 uppercase">Total</span>
                    </div>
                </div>

                {{-- Info Text Ringkas --}}
                <div class="space-y-3">
                    <div class="flex justify-between items-center text-sm">
                        <span class="text-gray-600 flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-green-500"></span> Hadir
                        </span>
                        <span class="font-bold text-gray-900">12</span>
                    </div>
                    <div class="flex justify-between items-center text-sm">
                        <span class="text-gray-600 flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-red-500"></span> Tidak Hadir
                        </span>
                        <span class="font-bold text-gray-900">2</span>
                    </div>
                </div>
                
                <div class="mt-6 pt-4 border-t border-gray-100">
                    <p class="text-xs text-gray-400 text-center">Minimal kehadiran ujian: <strong class="text-gray-600">80%</strong></p>
                </div>
            </div>

        </div>
    </div>
@endsection