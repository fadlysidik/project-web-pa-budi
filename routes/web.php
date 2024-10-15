<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
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
use App\Http\Controllers\KwitansiPemasukanController;

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
    return view('auth.login');
})->name('login');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.process');

// Rute untuk register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// HOME
Route::get('/home', [HomeController::class, 'index'])->name('home.index');

// PEMASUKAN
Route::get('/form-pemasukan', [PemasukanController::class, 'showForm'])->name('form-pemasukan');
Route::post('/proses-pemasukan', [PemasukanController::class, 'store'])->name('proses-pemasukan');

// PENGELUARAN
Route::get('/form-pengeluaran', [PengeluaranController::class, 'showForm'])->name('form-pengeluaran');
Route::post('/proses-pengeluaran', [PengeluaranController::class, 'store'])->name('proses-pengeluaran');

// JOURNAL
Route::get('/journal', [JournalController::class, 'index'])->name('journal');

// DATABASE MAHASISWA
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('proses-input-mahasiswa');
Route::get('mahasiswa/{id}/edit', [MahasiswaController::class, 'edit'])->name('edit-mahasiswa');

// PRINT KWITANSI PEMASUKAN
Route::get('/kwitansi-pemasukan', [KwitansiPemasukanController::class, 'index'])->name('kwitansi-pemasukan.index');
Route::post('/kwitansi-pemasukan', [KwitansiPemasukanController::class, 'store'])->name('kwitansi-pemasukan.store');

// PRINT KWITANSI PENGELUARAN
Route::get('/kwitansi-pengeluaran', [KwitansiPengeluaranController::class, 'index'])->name('kwitansi-pengeluaran.index');
Route::post('/kwitansi-pengeluaran', [KwitansiPengeluaranController::class, 'store'])->name('kwitansi-pengeluaran.store');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Rute untuk logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');