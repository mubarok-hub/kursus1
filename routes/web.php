<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\haloController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;

Route::get('/Halo', [HaloController::class, 'index']);

Route::get('/Halo/{nama}', [HaloController::class, 'tampilNama']);

Route::get('/Form', [FormController::class, 'tampilForm']);
Route::post('/Proses', [FormController::class, 'prosesForm']);

Route::get('/Kategori/{id}', [KategoriController::class, 'tampilkanKategori']);

Route::get('/Artikel/index', [ArtikelController::class, 'index'])->name('artikel.index');
Route::get('/Artikel/create', [ArtikelController::class, 'create'])->name('artikel.create');
Route::post('/Artikel/store', [ArtikelController::class, 'store'])->name('artikel.store');
Route::delete('Artikel/{id}', [ArtikelController::class, 'destroy'])->name('artikel.destroy');


Route::resource('Kontak', KontakController::class);

// Auth gawaan Laravel
Auth::routes();

// Setelah login
Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::get('/post', [PostController::class, 'index'])->name('post.index');