<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;

use App\Http\Controllers\Admin\MahasiswaController;
use App\Http\Controllers\Admin\DosenController;
use App\Http\Controllers\Admin\KelasController;
use App\Http\Controllers\Admin\MateriController;
use App\Http\Controllers\Admin\TugasController;
use App\Http\Controllers\Admin\AbsensiController;
use App\Http\Controllers\Admin\NilaiController;
use App\Http\Controllers\Admin\PembayaranController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PendaftaranController;

/*
|--------------------------------------------------------------------------
| Halaman Welcome + Pendaftaran
|--------------------------------------------------------------------------
|
| Di sinilah Anda dapat mendaftarkan rute web untuk aplikasi Anda.
|A




*/
// ---------------------------------------------------------------------------------------------
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;

// AUTH
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

// Ubah kata 'post' menjadi 'get'
// Route::post('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
// Atau pakai closure function seperti sebelumnya



// Register
// Route::post('/register', [AuthController::class, 'register']);

// Login

// Route::post('/login', [AuthController::class, 'login']);

// Logout (Wajib POST)
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');





// DASHBOARD PER ROLE
Route::middleware(['role:admin'])->group(function () {
    Route::get('/admin/dashboard', fn() => "Admin Dashboard")
        ->name('admin.dashboard');
});

Route::middleware(['role:dosen'])->group(function () {
    Route::get('/dosen/dashboard', fn() => "Dosen Dashboard")
        ->name('dosen.dashboard');
});

Route::middleware(['role:mahasiswa'])
    ->prefix('mahasiswa')
    ->name('mahasiswa.')
    ->group(function () {

        // DASHBOARD
        Route::view('/dashboard', 'mahasiswa.dashboard')->name('dashboard');

        // CARI KELAS
        Route::view('/cari-kelas', 'mahasiswa.cari_kelas')->name('cari_kelas');

        // MATERI
        Route::view('/materi', 'mahasiswa.materi')->name('materi');
        Route::view('/materi/detail', 'mahasiswa.detail_materi')->name('materi.detail');

        // TUGAS
        Route::view('/tugas', 'mahasiswa.tugas')->name('tugas');
        Route::view('/tugas/detail', 'mahasiswa.detail_tugas')->name('tugas.detail');

        // ABSENSI
        Route::view('/absensi', 'mahasiswa.absensi')->name('absensi');

        // FORUM
        Route::view('/forum', 'mahasiswa.forum')->name('forum');

        // PROFILE
        Route::view('/profile', 'mahasiswa.profile')->name('profile');
    });




// Halaman utama (Landing Page) & Login
Route::view('/', 'welcome');
Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');

// --- GRUP ROUTE ADMIN ---
Route::prefix('admin')->name('admin.')->group(function () {
    //  Route::view('/dashboard', 'admin.dashboard')->name('dashboard');

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
Route::prefix('dosen')->name('dosen.')->group(function () {
    //  Route::view('/dashboard', 'dosen.dashboard')->name('dashboard');
    Route::view('/materi', 'dosen.materi')->name('materi');
    Route::view('/tugas', 'dosen.tugas')->name('tugas');
    Route::view('/absensi', 'dosen.absensi')->name('absensi');
    Route::view('/laporan', 'dosen.laporan')->name('laporan');
    Route::view('/forum', 'dosen.forum')->name('forum');
});
