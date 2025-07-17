<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrunController;
use App\Http\Controllers\SiparisController;

Route::get('/home', function () {
    return view('home');
})->name('anasayfa');


// Ürünler için gerekli rotalar
Route::get('/urunler', [UrunController::class, 'index']);
Route::get('/urunler/create', [UrunController::class, 'create']);
Route::post('/urunler', [UrunController::class, 'store']);
Route::get('/urunler/{kategori}/{alt_kategori}', [UrunController::class, 'filtrele']);
Route::resource('urunler', UrunController::class);
Route::get('/siparis/ver/{id}', [App\Http\Controllers\SiparisController::class, 'create'])->name('siparis.create');
Route::post('/siparis/kaydet', [App\Http\Controllers\SiparisController::class, 'store'])->name('siparis.store');

Route::get('/siparis/create/{id}', [SiparisController::class, 'create']);
Route::post('/siparis', [SiparisController::class, 'store']);

Route::get('/siparisler', [SiparisController::class, 'index']);

// Anasayfa rotası
Route::get('/', function () {
    return view('home');
});

// Kullanıcı ana sayfası
Route::get('/user', function () {
    return view('user_home');
})->name('user.home');
