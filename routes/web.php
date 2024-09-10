<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\JurnalController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\KwitansiController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\KwitansiPengeluaranController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view ('welcome');
});


Route::post('/login', [AuthController::class, 'login'])->name('login'); 
Route::get('/register', function () {
    return view ('register');
})->name('register');

// Rute untuk menampilkan form login
Route::get('/login', function () {
    return view('welcome');
})->name('login');

// Rute untuk memproses data login
Route::post('/login', [AuthController::class, 'login'])->name('login.process');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// homepage
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
//
// routes/web.php
Route::get('/form-pemasukan', function () {
    return view('pemasukan.index');
});
Route::get('/form-pemasukan', [PemasukanController::class, 'showForm'])->name('form-pemasukan');
Route::post('/proses-pemasukan', [PemasukanController::class, 'prosesPemasukan'])->name('proses-pemasukan');
// PENGELUARAN
Route::get('/form-pengeluaran', [PengeluaranController::class, 'showForm'])->name('form-pengeluaran');
Route::post('/proses-pengeluaran', [PengeluaranController::class, 'store'])->name('proses-pengeluaran');
// JOURNAL
Route::get('/journal', [JournalController::class, 'index'])->name('journal');
Route::post('/journal', [JournalController::class, 'store'])->name('journal.store');
// DATABASE MAHASISWA
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('proses-input-mahasiswa');
// PRINT KWITANSI PEMASUKAN
Route::get('/kwiansi_pemasukan', [KwitansiController::class, 'index'])->name('print-kwitansi-pemasukan');
Route::post('/proses-pemasukan', [KwitansiController::class, 'store'])->name('proses-pemasukan');
// PRINT KWITANSI PENGELUARAN
Route::get('/kwitansi-pengeluaran/create', [KwitansiPengeluaranController::class, 'create'])->name('kwitansi-pengeluaran.create');
Route::post('/kwitansi-pengeluaran', [KwitansiPengeluaranController::class, 'store'])->name('kwitansi-pengeluaran.store');
Route::get('/kwitansi-pengeluaran', [KwitansiPengeluaranController::class, 'index'])->name('kwitansi-pengeluaran.index');
// Route::get('/kwitansi-pengeluaran/print/{id}', [KwitansiPengeluaranController::class, 'print'])->name('kwitansi-pengeluaran.print');
Route::resource('kwitansi-pengeluaran', KwitansiPengeluaranController::class);

