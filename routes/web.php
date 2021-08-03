<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WebController;

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

// HOME
Route::get('/', [WebController::class, 'homeView'])->name('website.home');

// BERITA
Route::prefix('berita')->group(function () {
    Route::get('/', [WebController::class, 'beritaList'])->name('berita.list');
    Route::get('detail/{idBerita}', [WebController::class, 'beritaDetail'])->name('berita.detail');
});

// KEGIATAN
Route::prefix('kegiatan')->group(function () {
    Route::get('/', [WebController::class, 'kegiatanList'])->name('kegiatan.list');
    Route::get('detail/{idKegiatan}', [WebController::class, 'kegiatanDetail'])->name('kegiatan.detail');
});

// PROFIL
Route::prefix('profil')->group(function () {
    Route::get('/', function () { return view('profil'); })->name('profil.index');
    Route::get('kurikulum', function () { return view('profil-kurikulum'); })->name('profil.kurikulum');
    Route::get('prestasi', [WebController::class, 'prestasiView'])->name('profil.prestasi');
    Route::get('program', function () { return view('profil-program'); })->name('profil.program');
    Route::get('sejarah', function () { return view('profil-sejarah'); })->name('profil.sejarah');
    Route::get('visi-misi', function () { return view('profil-visi-misi'); })->name('profil.visi-misi');
    Route::get('struktur-organisasi', function () { return view('profil-struktur-organisasi'); })->name('profil.struktur-organisasi');
    Route::get('sarana-and-prasarana', function () { return view('profil-sarana-and-prasarana'); })->name('profil.sarana-and-prasarana');
    Route::get('guru-and-staff', [WebController::class, 'guruAndStaffView'])->name('profil.guru-and-staff');
});

// PENGUMUMAN
Route::prefix('pengumuman')->group(function () {
    Route::get('/', [WebController::class, 'pengumumanList'])->name('pengumuman.list');
    Route::get('detail/{idPengumuman}', [WebController::class, 'pengumumanDetail'])->name('pengumuman.detail');
});

Route::get('/pencarian', [WebController::class, 'searchList'])->name('search.list');

Route::get('e-books', function () { return view('e-books'); })->name('e-books');
Route::get('e-learning', function () { return view('e-learning'); })->name('e-learning');
