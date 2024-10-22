<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

// Route untuk halaman home
Route::get('/', function () {
    return view('pages.home');
});

Route::resource('produk', ProdukController::class);
