<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DosenController;


Route::prefix('')->group(function(){
    Route::get('/', [SiswaController::class, 'login']);


    # DASHBOARD
        Route::get('dashboard', [SiswaController::class, 'dashboard']);

        Route::get('daftar_nilai', [SiswaController::class, 'daftar_nilai']);

        Route::get('sertifikat', [SiswaController::class, 'sertifikat']);

        Route::get('daftar_dosen', [SiswaController::class, 'daftar_dosen']);
    # DASHBOARD


        Route::get('jalur', [SiswaController::class, 'pilih_jalur']);

        Route::get('register', [SiswaController::class, 'register']);

        Route::get('pembayaran', [SiswaController::class, 'pembayaran']);

        Route::get('upload_dokumen', [SiswaController::class, 'upload_dokumen']);
});


Route::prefix('admin')->group(function(){
    Route::get('/', [AdminController::class, 'login']);

    Route::get('dashboard', [AdminController::class, 'dashboard']);
});

Route::prefix('dosen')->group(function(){
    Route::get('/', [DosenController::class, 'login']);

    Route::get('dashboard', [DosenController::class, 'dashboard']);
});