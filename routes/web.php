<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffGAController;
use App\Http\Controllers\HeadGAController;
use App\Http\Controllers\DivisiController;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk Admin
Route::middleware(['auth', 'role:Admin'])->group(function () {
    Route::resource('admin/divisi', DivisiController::class);
    Route::resource('admin/barang', BarangController::class);
    Route::resource('admin/users', UserController::class);
    Route::resource('admin/suppliers', SupplierController::class);
    // Tambahkan route admin lainnya
});

// Route untuk Staff GA
Route::middleware(['auth', 'role:Staff GA'])->group(function () {
    Route::resource('staff-ga/barang-masuk', BarangMasukController::class);
    Route::resource('staff-ga/barang-keluar', BarangKeluarController::class);
    Route::resource('staff-ga/pembelian', PembelianController::class);
    // Tambahkan route Staff GA lainnya
});

// Route untuk Head GA
Route::middleware(['auth', 'role:Head GA'])->group(function () {
    Route::resource('head-ga/approval', ApprovalController::class);
    // Tambahkan route Head GA lainnya
});

// Route untuk Divisi
Route::middleware(['auth', 'role:Divisi'])->group(function () {
    Route::resource('divisi/request-barang', RequestBarangController::class);
    // Tambahkan route Divisi lainnya
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
