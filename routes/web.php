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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route kategori
Route::get('/backend/kategori/index', [App\Http\Controllers\Backend\KategoriController::class, 'index'])->name('kategori.index');
Route::post('/backend/kategori/store', [App\Http\Controllers\Backend\KategoriController::class, 'store'])->name('kategori.store');
Route::get('/backend/kategori/edit/{kategori}', [App\Http\Controllers\Backend\KategoriController::class, 'edit'])->name('kategori.edit');
Route::post('/backend/kategori/update/{kategori}', [App\Http\Controllers\Backend\KategoriController::class, 'update'])->name('kategori.update');
Route::get('/backend/kategori/delete/{kategori}', [App\Http\Controllers\Backend\KategoriController::class, 'delete'])->name('kategori.delete');

// route produk
Route::get('/backend/produk/index', [App\Http\Controllers\Backend\ProdukController::class, 'index'])->name('produk.index');
Route::get('/backend/produk/create/', [App\Http\Controllers\Backend\ProdukController::class, 'create'])->name('produk.create');
Route::post('/backend/produk/store', [App\Http\Controllers\Backend\ProdukController::class, 'store'])->name('produk.store');

// route pesanan
Route::get('/backend/pesanan/index', [App\Http\Controllers\Backend\PesananController::class, 'index'])->name('pesanan.index');
Route::get('/backend/pesanan/create/', [App\Http\Controllers\Backend\PesananController::class, 'create'])->name('pesanan.create');
Route::post('/backend/pesanan/store', [App\Http\Controllers\Backend\PesananController::class, 'store'])->name('pesanan.store');

// route laporan
Route::get('/backend/laporan/index', [App\Http\Controllers\Backend\LaporanController::class, 'index'])->name('laporan.index');

// route pengaturan
Route::get('/backend/pengaturan/index', [App\Http\Controllers\Backend\PengaturanController::class, 'index'])->name('pengaturan.index');
Route::post('/backend/pengaturan/store', [App\Http\Controllers\Backend\PengaturanController::class, 'store'])->name('pelanggan.store');
Route::get('/backend/pengaturan/edit/{pelanggan}', [App\Http\Controllers\Backend\PengaturanController::class, 'edit'])->name('pelanggan.edit');
Route::post('/backend/pengaturan/update/{pelanggan}', [App\Http\Controllers\Backend\PengaturanController::class, 'update'])->name('pelanggan.update');
Route::get('/backend/pengaturan/delete/{pelanggan}', [App\Http\Controllers\Backend\PengaturanController::class, 'delete'])->name('pelanggan.delete');