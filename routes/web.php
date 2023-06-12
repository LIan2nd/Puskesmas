<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [DashboardController::class, 'index']);

// Pasien Route
// Route untuk menampilkan daftar Pasien
Route::get('/pasien', [PasienController::class, 'index']);

// Route untuk menampilkan form tambah pasien
Route::get('/pasien/create', [PasienController::class, 'create']);

// Route untuk memproses form tambah pasien
Route::post('/pasien', [PasienController::class, 'store']);

// Route untuk mengedit form pasien
Route::get('/pasien/edit/{id}', [PasienController::class, 'edit']);

// Route untuk memproses form edit pasien
Route::put('/pasien/{id}', [PasienController::class, 'update']);

// Route untuk menghapus data pasien
Route::delete('/pasien', [PasienController::class, 'destroy']);


// Dokter Route
// Route untuk menampilkan daftar Dokter
Route::get('/dokter', [DokterController::class, 'index']);

// Route untuk menampilkan form tambah Dokter
Route::get('/dokter/create', [DokterController::class, 'create']);

// Route untuk memproses form tambah Dokter
Route::post('/dokter', [DokterController::class, 'store']);

// Route untuk mengedit form Dokter
Route::get('/dokter/edit/{id}', [DokterController::class, 'edit']);

// Route untuk memproses form edit dokter
Route::put('/dokter/{id}', [DokterController::class, 'update']);

// Route untuk menghapus data dokter
Route::delete('/dokter', [DokterController::class, 'destroy']);