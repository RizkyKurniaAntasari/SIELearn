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

use App\Http\Controllers\PendaftaranController;

/*
|--------------------------------------------------------------------------
| Halaman Welcome + Pendaftaran
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran.index');
Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');

/*
|--------------------------------------------------------------------------
| Admin Auth
|--------------------------------------------------------------------------
*/
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login']);

Route::get('/admin/register', [AdminAuthController::class, 'showRegister'])->name('admin.register');
Route::post('/admin/register', [AdminAuthController::class, 'register']);

Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

/*
|--------------------------------------------------------------------------
| Admin Routes (Protected)
|--------------------------------------------------------------------------
*/
Route::middleware('adminAuth')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::resource('mahasiswa', MahasiswaController::class);
        Route::resource('dosen', DosenController::class);
        Route::resource('kelas', KelasController::class);
        Route::resource('materi', MateriController::class);
        Route::resource('tugas', TugasController::class);
        Route::resource('absensi', AbsensiController::class);
        Route::resource('nilai', NilaiController::class);
        Route::resource('pembayaran', PembayaranController::class);
    });
