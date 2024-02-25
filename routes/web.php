<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JenisBarangController;

Route::middleware(['guest'])->group(function () {
    Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware(['auth', 'role:admin,kasir'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/user', [UserController::class, 'user'])->name('user');
    Route::post('/user/store', [UserController::class, 'store']);
    Route::post('/user/update/{id}', [UserController::class, 'update']);
    Route::post('/user/destroy/{id}', [UserController::class, 'destroy']);
});

Route::middleware(['auth', 'role:admin,kasir'])->group(function () {
    Route::get('/jenis-barang', [JenisBarangController::class, 'jenisBarang'])->name('jenis-barang');
    Route::post('/jenis-barang/store', [JenisBarangController::class, 'store']);
    Route::post('/jenis-barang/update/{id}', [JenisBarangController::class, 'update']);
    Route::post('/jenis-barang/destroy/{id}', [JenisBarangController::class, 'destroy']);
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
