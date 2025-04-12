<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

Route::get('/', function () {
    return redirect('/barang');
});

Route::resource('barang', BarangController::class);
