<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriProdukController;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// /master-data/kategori-produk/create
// master-data.kategori-produk.index

Route::middleware('auth')->group(function () {
    Route::prefix('master-data')->name('master-data.')->group(function () {
        Route::resource('kategori-produk', KategoriProdukController::class);
    });
});
