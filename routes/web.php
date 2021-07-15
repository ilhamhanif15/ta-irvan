<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function () { return view('beranda'); })->name('website.home');

// BERITA
Route::prefix('berita')->group(function () {
    Route::get('/', function () { return view('berita-list'); })->name('berita.list');
    Route::get('detail', function () { return view('berita-detail'); })->name('berita.detail');
});

// KEGIATAN
Route::prefix('kegiatan')->group(function () {
    Route::get('/', function () { return view('kegiatan-list'); })->name('kegiatan.list');
    Route::get('detail', function () { return view('kegiatan-detail'); })->name('kegiatan.detail');
});

// PROFIL
Route::prefix('profil')->group(function () {
    Route::get('/', function () { return view('profil'); })->name('profil.index');
    Route::get('kurikulum', function () { return view('profil-kurikulum'); })->name('profil.kurikulum');
    Route::get('prestasi', function () { return view('profil-prestasi'); })->name('profil.prestasi');
    Route::get('program', function () { return view('profil-program'); })->name('profil.program');
    Route::get('sejarah', function () { return view('profil-sejarah'); })->name('profil.sejarah');
    Route::get('visi-misi', function () { return view('profil-visi-misi'); })->name('profil.visi-misi');
    Route::get('struktur-organisasi', function () { return view('profil-struktur-organisasi'); })->name('profil.struktur-organisasi');
    Route::get('sarana-and-prasarana', function () { return view('profil-sarana-and-prasarana'); })->name('profil.sarana-and-prasarana');
    Route::get('guru-and-staff', function () { return view('profil-guru-and-staff'); })->name('profil.guru-and-staff');
});

// PENGUMUMAN
Route::prefix('pengumuman')->group(function () {
    Route::get('/', function () { return view('pengumuman-list'); })->name('pengumuman.list');
    Route::get('detail', function () { return view('pengumuman-detail'); })->name('pengumuman.detail');
});

Route::get('e-books', function () { return view('e-books'); })->name('e-books');
Route::get('e-learning', function () { return view('e-learning'); })->name('e-learning');
