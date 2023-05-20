<?php

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

Route::get('/', function () {
    return view('welcome');
});

// Pasien Route
// Route untuk menampilkan daftar Pasien
Route::get('/pasien', [PasienController::class, 'index']);

// Route untuk menampilkan form tambah pasien
Route::get('/pasien/create', [PasienController::class, 'create']);

// Route untuk memproses form tambah pasien
Route::post('/pasien', [PasienController::class, 'store']);


// Dokter Route
// Route untuk menampilkan daftar Dokter
Route::get('/dokter', [DokterController::class, 'index']);

// Route untuk menampilkan form tambah Dokter
Route::get('/dokter/create', [DokterController::class, 'create']);

// Route untuk memproses form tambah Dokter
Route::post('/dokter', [DokterController::class, 'store']);