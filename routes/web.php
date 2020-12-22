<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KartuKeluargaController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\LaporanController;

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
    return view('penduduk/index');
});

Route::get('/kartu_keluarga', [KartuKeluargaController::class, 'index'])->name('kartu_keluarga');
Route::get('/kartu_keluarga/show/{id}', [KartuKeluargaController::class, 'show'])->name('kartu_keluarga.show');
Route::post('/kartu_keluarga/store', [KartuKeluargaController::class, 'store'])->name('kartu_keluarga.store');
Route::get('/kartu_keluarga/edit/{id}', [KartuKeluargaController::class, 'edit'])->name('kartu_keluarga.edit');
Route::post('/kartu_keluarga/update/{id}', [KartuKeluargaController::class, 'update'])->name('kartu_keluarga.update');
Route::get('/kartu_keluarga/destroy/{id}', [KartuKeluargaController::class, 'destroy'])->name('kartu_keluarga.destroy');

Route::get('/penduduk', [PendudukController::class, 'index'])->name('penduduk');
Route::get('/penduduk/create', [PendudukController::class, 'create'])->name('penduduk.create');
Route::post('/penduduk/store', [PendudukController::class, 'store'])->name('penduduk.store');
Route::get('/penduduk/show/{id}', [PendudukController::class, 'show'])->name('penduduk.show');
Route::get('/penduduk/edit/{id}', [PendudukController::class, 'edit'])->name('penduduk.edit');
Route::post('/penduduk/update/{id}', [PendudukController::class, 'update'])->name('penduduk.update');
Route::get('/penduduk/destroy/{id}', [PendudukController::class, 'destroy'])->name('penduduk.destroy');

Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan');