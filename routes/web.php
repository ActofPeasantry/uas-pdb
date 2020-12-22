<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KartuKeluargaController;
use App\Http\Controllers\PendudukController;

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
    return view('index');
});

Route::get('/kartu_keluarga', [KartuKeluargaController::class, 'index'])->name('kartu_keluarga');
Route::get('/kartu_keluarga/show/{id}', [KartuKeluargaController::class, 'show'])->name('kartu_keluarga.show');
Route::post('/kartu_keluarga/store', [KartuKeluargaController::class, 'store'])->name('kartu_keluarga.store');
Route::post('/kartu_keluarga/update', [KartuKeluargaController::class, 'update'])->name('kartu_keluarga.update');

Route::get('/penduduk', [PendudukController::class, 'index'])->name('penduduk');