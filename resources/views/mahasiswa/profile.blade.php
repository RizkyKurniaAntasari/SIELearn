@extends('layouts.mahasiswa_app')

@section('main-content')
    
    {{-- 1. HEADER & BREADCRUMB --}}
    <div class="flex flex-col md:flex-row justify-between items-end mb-8 gap-4">
        <div>
            <div class="flex items-center gap-2 text-sm text-gray-500 mb-1">
                <a href="{{ route('mahasiswa.dashboard') }}" class="hover:text-purple-600 transition">Dashboard</a>
                <span>/</span>
                <span class="text-purple-700 font-medium">Profile</span>
            </div>
            <h1 class="text-3xl font-bold text-gray-900">Pengaturan Akun</h1>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        
        <form action="#" method="POST" enctype="multipart/form-data" class="p-6 md:p-8">
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                
                {{-- === KOLOM KIRI: FOTO & PAKET === --}}
                <div class="md:col-span-1 space-y-8">
                    
                    {{-- Foto Profil --}}
                    <div class="text-center">
                        <div class="relative inline-block group">
                            <img class="h-40 w-40 rounded-full object-cover shadow-lg border-4 border-white ring-2 ring-purple-100" 
                                 src="{{ asset('images/gambar.jpg') }}" 
                                 alt="Foto Profil">
                            
                            {{-- Tombol Edit Overlay (UX: Memberi tahu user foto bisa diganti) --}}
                            <label for="foto_profil" class="absolute bottom-2 right-2 bg-purple-600 text-white p-2.5 rounded-full cursor-pointer shadow-md hover:bg-purple-700 transition transform hover:scale-110" title="Ganti Foto">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </label>
                        </div>
                        
                        {{-- Input File Hidden (Agar rapi) --}}
                        <input type="file" id="foto_profil" name="foto_profil" class="hidden">
                        
                        <div class="mt-4">
                            <h3 class="font-bold text-gray-900 text-lg">Rizky Kurnia Antasari</h3>
                            <p class="text-sm text-gray-500">Mahasiswa Aktif</p>
                        </div>
                        <p class="text-xs text-gray-400 mt-2">Format: JPG, PNG (Max. 2MB)</p>
                    </div>

                    {{-- Info Paket (Card Gradient) --}}
                    <div class="rounded-2xl p-6 bg-gradient-to-br from-purple-600 to-indigo-700 text-white shadow-lg relative overflow-hidden">
                        {{-- Dekorasi Background --}}
                        <div class="absolute top-0 right-0 -mr-6 -mt-6 w-24 h-24 rounded-full bg-white opacity-10"></div>
                        
                        <p class="text-purple-200 text-xs font-semibold uppercase tracking-wider mb-1">Paket Saat Ini</p>
                        <h4 class="text-xl font-bold mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            Premium - Paket 2
                        </h4>
                        
                        <div class="space-y-3">
                            <div>
                                <div class="flex justify-between text-xs mb-1 opacity-90">
                                    <span>Sisa Waktu Belajar</span>
                                    <span class="font-bold">85 Menit</span>
                                </div>
                                <div class="w-full bg-black/20 rounded-full h-1.5">
                                    <div class="bg-white h-1.5 rounded-full" style="width: 70%"></div>
                                </div>
                            </div>
                            
                            <a href="{{ route('mahasiswa.cari_kelas') }}" class="block text-center w-full py-2 bg-white/10 hover:bg-white/20 rounded-lg text-xs font-bold transition border border-white/20 mt-4">
                                Upgrade Paket
                            </a>
                        </div>
                    </div>

                </div>

                {{-- === KOLOM KANAN: FORM === --}}
                <div class="md:col-span-2 space-y-8">
                    
                    {{-- 1. INFORMASI PRIBADI --}}
                    <div>
                        <h3 class="text-lg font-bold text-gray-800 mb-4 flex items-center gap-2 pb-2 border-b border-gray-100">
                            <svg class="w-5 h-5 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            Informasi Pribadi
                        </h3>
                        
                        <div class="space-y-5">
                            {{-- Nama --}}
                            <div>
                                <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                    </div>
                                    <input type="text" id="nama" name="nama" value="Rizky Kurnia Antasari" 
                                           class="pl-10 block w-full rounded-xl border-gray-300 shadow-sm focus:ring-purple-500 focus:border-purple-500 sm:text-sm py-2.5 transition">
                                </div>
                            </div>

                            {{-- Email --}}
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Alamat Email</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                    </div>
                                    <input type="email" id="email" name="email" value="rizkypro@gmail.com" 
                                           class="pl-10 block w-full rounded-xl border-gray-300 shadow-sm focus:ring-purple-500 focus:border-purple-500 sm:text-sm py-2.5 transition bg-gray-50 text-gray-500 cursor-not-allowed" readonly>
                                </div>
                                <p class="text-[10px] text-gray-400 mt-1">*Email tidak dapat diubah.</p>
                            </div>

                            {{-- Domisili --}}
                            <div>
                                <label for="domisili" class="block text-sm font-medium text-gray-700 mb-1">Domisili</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    </div>
                                    <input type="text" id="domisili" name="domisili" value="Bandar Lampung" 
                                           class="pl-10 block w-full rounded-xl border-gray-300 shadow-sm focus:ring-purple-500 focus:border-purple-500 sm:text-sm py-2.5 transition">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- 2. KEAMANAN (PASSWORD) --}}
                    <div class="bg-gray-50 p-6 rounded-xl border border-gray-100">
                        <h3 class="text-lg font-bold text-gray-800 mb-2 flex items-center gap-2">
                            <svg class="w-5 h-5 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                            Ubah Password
                        </h3>
                        <p class="text-sm text-gray-500 mb-5">Kosongkan jika tidak ingin mengubah password.</p>
                        
                        <div class="space-y-4">
                            <div>
                                <label for="password_current" class="block text-sm font-medium text-gray-700 mb-1">Password Saat Ini</label>
                                <input type="password" id="password_current" name="password_current" 
                                       class="block w-full rounded-xl border-gray-300 shadow-sm focus:ring-purple-500 focus:border-purple-500 sm:text-sm py-2.5 transition">
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="password_new" class="block text-sm font-medium text-gray-700 mb-1">Password Baru</label>
                                    <input type="password" id="password_new" name="password_new" 
                                           class="block w-full rounded-xl border-gray-300 shadow-sm focus:ring-purple-500 focus:border-purple-500 sm:text-sm py-2.5 transition">
                                </div>
                                <div>
                                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Konfirmasi Password</label>
                                    <input type="password" id="password_confirmation" name="password_confirmation" 
                                           class="block w-full rounded-xl border-gray-300 shadow-sm focus:ring-purple-500 focus:border-purple-500 sm:text-sm py-2.5 transition">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- TOMBOL SAVE --}}
                    <div class="pt-2 flex justify-end">
                        <button type="submit" class="inline-flex items-center px-6 py-3 bg-purple-600 border border-transparent rounded-xl font-semibold text-sm text-white shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 transition transform hover:-translate-y-0.5">
                            <svg class="w-5 h-5 mr-2 -ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Simpan Perubahan
                        </button>
                    </div>

                </div>
            </div>
        </form>
    </div>
@endsection