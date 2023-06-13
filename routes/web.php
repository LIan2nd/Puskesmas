<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route untuk menampilkan Dashboard admin
Route::get('/', [DashboardController::class, 'index'])->middleware('auth');

// Pasien Route
// Route untuk menampilkan daftar Pasien
Route::get('/pasien', [PasienController::class, 'index'])->middleware('auth');

// Route untuk menampilkan form tambah pasien
Route::get('/pasien/create', [PasienController::class, 'create'])->middleware('auth');

// Route untuk memproses form tambah pasien
Route::post('/pasien', [PasienController::class, 'store'])->middleware('auth');

// Route untuk mengedit form pasien
Route::get('/pasien/edit/{id}', [PasienController::class, 'edit'])->middleware('auth');

// Route untuk memproses form edit pasien
Route::put('/pasien/{id}', [PasienController::class, 'update'])->middleware('auth');

// Route untuk menghapus data pasien
Route::delete('/pasien', [PasienController::class, 'destroy'])->middleware('auth');


// Dokter Route
// Route untuk menampilkan daftar Dokter
Route::get('/dokter', [DokterController::class, 'index'])->middleware('auth');

// Route untuk menampilkan form tambah Dokter
Route::get('/dokter/create', [DokterController::class, 'create'])->middleware('auth');

// Route untuk memproses form tambah Dokter
Route::post('/dokter', [DokterController::class, 'store'])->middleware('auth');

// Route untuk mengedit form Dokter
Route::get('/dokter/edit/{id}', [DokterController::class, 'edit'])->middleware('auth');

// Route untuk memproses form edit dokter
Route::put('/dokter/{id}', [DokterController::class, 'update'])->middleware('auth');

// Route untuk menghapus data dokter
Route::delete('/dokter', [DokterController::class, 'destroy'])->middleware('auth');

// Route untuk Otentikasi
auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');