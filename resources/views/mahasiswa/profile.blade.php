@extends('layouts.mahasiswa_app')

@section('main-content')
<h1 class="text-2xl font-semibold mb-6">Pengaturan Profil</h1>

<div class="bg-white p-6 rounded-lg shadow-md">
    
    <form action="#" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <div class="md:col-span-1 space-y-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Foto Profil</label>
                    <div class="flex flex-col items-center">
                        <img class="h-32 w-32 rounded-full object-cover mb-4 shadow-md" src="{{ asset('images/gambar.jpg') }}" alt="Foto Profil Saat Ini">
                        <input type="file" id="foto_profil" name="foto_profil" class="w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none">
                        <p class="text-xs text-gray-500 mt-1">PNG, JPG (MAX. 2MB).</p>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Paket Aktif Anda</label>
                    <div class="mt-2 bg-blue-50 border border-blue-200 p-4 rounded-lg">
                        <p class="text-sm font-semibold text-blue-800">Premium - Paket 2</p>
                        <p class="text-xs text-blue-700">Sisa waktu: 85 / 120 Menit</p>
                        <a href="{{ route('mahasiswa.cari_kelas') }}" class="text-xs text-blue-600 hover:underline mt-1 font-medium">
                            Upgrade Paket
                        </a>
                    </div>
                </div>
            </div>

            <div class="md:col-span-2 space-y-4">
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" value="Rizky Kurnia Antasari" 
                           class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Alamat Email</label>
                    <input type="email" id="email" name="email" value="rizkypro@gmail.com" 
                           class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                </div>
                
                <div>
                    <label for="domisili" class="block text-sm font-medium text-gray-700">Domisili (Kota)</label>
                    <input type="text" id="domisili" name="domisili" value="Bandar Lampung" placeholder="Contoh: Jakarta Selatan"
                           class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div class="border-t pt-4 mt-4">
                    <p class="text-base font-medium text-gray-900">Ubah Password</p>
                    <p class="text-sm text-gray-500 mb-3">Biarkan kosong jika tidak ingin mengubah.</p>
                    <div class="space-y-4">
                        <div>
                            <label for="password_current" class="block text-sm font-medium text-gray-700">Password Saat Ini</label>
                            <input type="password" id="password_current" name="password_current" 
                                   class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label for="password_new" class="block text-sm font-medium text-gray-700">Password Baru</label>
                            <input type="password" id="password_new" name="password_new" 
                                   class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi Password Baru</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" 
                                   class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-8 pt-5 border-t border-gray-200 flex justify-end">
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>
@endsection