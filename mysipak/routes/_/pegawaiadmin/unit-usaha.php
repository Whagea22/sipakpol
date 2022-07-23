<?php


use Illuminate\Support\Facades\Route;

Route::redirect('/', 'unit-kerja/dashboard');
Route::get('dashboard', PengajuanBaruController::class);
Route::resource('unit-kerja/pengajuan-baru', PengajuanBaruController::class);
