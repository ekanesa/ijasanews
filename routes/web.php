<?php

use App\Http\Controllers\ArticleNewsController;
use App\Http\Controllers\BannerAdvertisemenetController;    
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PartnershipController;
use App\Http\Controllers\DukunganController;


Route::get('/', function () {
    return view('home', ['title' => 'PT Integrasi Jasa Nusantara']);
});

Route::get('/layanan', function () {
    return view('layanan', ['title' => 'Layanan']);
});

Route::get('/solusi', function () {
    return view('solusi', ['title' => 'Solusi']);
});

Route::get('/harga', function () {
    return view('harga', ['title' => 'Harga']);
});

Route::get('/berita', function () {
    return view('berita', ['title' => 'Berita']);
});

Route::get('/company', function () {
    return view('company', ['title' => 'Company']);
});


Route::get('/hubungi', function () {
    return view('hubungi', ['title' => 'Hubungi kami']);
});

Route::get('/harga/paket', function () {
    return view('paket');
});




Route::prefix('banners')->group(function () {
    Route::get('/', [BannerAdvertisemenetController::class, 'index'])->name('banners.index');
    // Add more routes for banners if needed
});

// Prefix for ArticleNews routes
Route::prefix('articles')->group(function () {
    Route::get('/', [ArticleNewsController::class, 'index'])->name('article.index');
    Route::get('/{slug}', [ArticleNewsController::class, 'show'])->name('article.show');
});


Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/partnership', [PartnershipController::class, 'index'])->name('partnership');
Route::get('/dukungan', [DukunganController::class, 'index'])->name('dukungan');

