<?php

use Illuminate\Support\Facades\Artisan;
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

Route::get('/run-optimize', function () {
    Artisan::call('optimize');
    return 'The route has been optimize';
});

Route::get('/', function () {
    return view('dashboard.index');
});
Route::get('/tentang', function () {
    return view('tentang.index');
});
Route::prefix('/profil')->group(function () {
    Route::get('/', function () {
        return view('profil.index');
    });
    Route::get('pendidik', function () {
        return view('profil.pendidik');
    });
    Route::get('tenaga-pendidik', function () {
        return view('profil.tenagapendidik');
    });
});
Route::prefix('kegiatan')->group(function () {
    Route::get('/', function () {
        return view('kegiatan.index');
    });
    Route::get('/prestasi', function () {
        return view('kegiatan.prestasi');
    });
    Route::get('detail-prestasi', function () {
        return view('kegiatan.detail-prestasi');
    });
    Route::get('detail-ekstrakurikuler', function () {
        return view('kegiatan.detail-ekstrakurikuler');
    });
});

Route::prefix('informasi')->group(function () {
    Route::get('/', function () {
        return view('informasi.index');
    });
    Route::get('berita', function () {
        return view('informasi.berita');
    });
    Route::get('detail-berita', function () {
        return view('informasi.detail-berita');
    });
});

Route::prefix('kontak')->group(function () {
    Route::get('/', function () {
        return view('kontak.index');
    });
    Route::get('/buku-tamu', function () {
        return view('kontak.buku-tamu');
    });
});
