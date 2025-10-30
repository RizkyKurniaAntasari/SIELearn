<?php

use Illuminate\Support\Facades\Route;

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


// --- GRUP ROUTE MAHASISWA ---
// [cite: 58]
Route::prefix('mahasiswa')->name('mahasiswa.')->group(function () {
    Route::view('/dashboard', 'mahasiswa.dashboard')->name('dashboard');
    Route::view('/materi', 'mahasiswa.materi')->name('materi'); // [cite: 64]
    Route::view('/tugas', 'mahasiswa.tugas')->name('tugas'); // 
    Route::view('/absensi', 'mahasiswa.absensi')->name('absensi'); // [cite: 71]
    Route::view('/forum', 'mahasiswa.forum')->name('forum'); // [cite: 73]
});


// --- GRUP ROUTE DOSEN ---
// [cite: 58]
Route::prefix('dosen')->name('dosen.')->group(function () {
    Route::view('/dashboard', 'dosen.dashboard')->name('dashboard');
    Route::view('/materi', 'dosen.materi')->name('materi'); // 
    Route::view('/tugas', 'dosen.tugas')->name('tugas'); // [cite: 66]
    Route::view('/absensi', 'dosen.absensi')->name('absensi'); // [cite: 70]
    Route::view('/laporan', 'dosen.laporan')->name('laporan'); // [cite: 77]
    Route::view('/forum', 'dosen.forum')->name('forum'); // [cite: 73]
});


// --- GRUP ROUTE ADMIN ---
// [cite: 58]
Route::prefix('admin')->name('admin.')->group(function () {
    Route::view('/dashboard', 'admin.dashboard')->name('dashboard');
    Route::view('/manage-users', 'admin.manage_users')->name('users'); // 
    Route::view('/manage-akademik', 'admin.manage_akademik')->name('akademik'); // 
    Route::view('/laporan', 'admin.laporan')->name('laporan'); // [cite: 77]
});