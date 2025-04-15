<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PelangganController;


Route::get('/', function () {
    return redirect('/barang');
});

Route::resource('barang', BarangController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('pelanggan', PelangganController::class);

