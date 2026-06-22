<?php

use Illuminate\Support\Facades\Route;

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Halaman layanan (buat view-nya nanti)
Route::get('/layanan', function () {
    return view('welcome'); // ganti dengan view('layanan') jika sudah ada
})->name('layanan');

// Halaman dokter (buat view-nya nanti)
Route::get('/dokter', function () {
    return view('welcome'); // ganti dengan view('dokter') jika sudah ada
})->name('dokter');