<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use app\Models\Mahasiswa;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sinilah Anda dapat mendaftarkan rute web untuk aplikasi Anda.
|
*/

// Halaman utama (Landing Page) & Login
Route::view('/', 'welcome');
Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');


Route::prefix('mahasiswa')->name('mahasiswa.')->group(function () {
    Route::view('/dashboard', 'mahasiswa.dashboard')->name('dashboard');
    
    // --- RUTE BARU UNTUK MELIHAT/MENGAJUKAN KELAS ---
    Route::view('/cari_kelas', 'mahasiswa.cari_kelas')->name('cari_kelas');
    // --------------------------------------------------

    Route::view('/materi', 'mahasiswa.materi')->name('materi'); 
    Route::view('/tugas', 'mahasiswa.tugas')->name('tugas'); 
    Route::view('/absensi', 'mahasiswa.absensi')->name('absensi'); 
    Route::view('/forum', 'mahasiswa.forum')->name('forum'); 

    Route::view('/profile', 'mahasiswa.profile')->name('profile'); // untuk profile
});


// --- GRUP ROUTE ADMIN ---
//
Route::prefix('admin')->name('admin.')->group(function () {
    Route::view('/dashboard', 'admin.dashboard')->name('dashboard');
    
    Route::get('/manage-users', [AdminController::class, 'index'])->name('users');
    Route::get('/manage-user/{id}', [AdminController::class, 'detail'])->name('user.detail');

    
    // --- Mengganti nama rute agar lebih jelas ---
    Route::view('/konfirmasi_pendaftaran', 'admin.konfirmasi_pendaftaran')->name('konfirmasi');
    // ---------------------------------------------
    
    Route::view('/manage-akademik', 'admin.manage_akademik')->name('akademik'); 
    Route::view('/manage-pembayaran', 'admin.manage_pembayaran')->name('pembayaran'); 
    
    Route::view('/laporan', 'admin.laporan')->name('laporan'); 
});

// --- GRUP ROUTE DOSEN ---
// [cite: 58]
Route::prefix('dosen')->name('dosen.')->group(function () {
    Route::view('/materi/create', 'dosen.materi_create')->name('materi.create');
    Route::view('/dashboard', 'dosen.dashboard')->name('dashboard');
    Route::view('/materi', 'dosen.materi')->name('materi'); // 
    Route::view('/tugas', 'dosen.tugas')->name('tugas'); // [cite: 66]
    Route::view('/tugas/create', 'dosen.tugas_create')->name('tugas.create');
    Route::view('/absensi', 'dosen.absensi')->name('absensi'); // [cite: 70]
    Route::view('/laporan', 'dosen.laporan')->name('laporan'); // [cite: 77]
    Route::view('/forum', 'dosen.forum')->name('forum'); // [cite: 73]
    Route::view('/absensi/create', 'dosen.absensi_create')->name('absensi.create');
    
});
