<?php

use App\Http\Controllers\Admin\MasterData\Arsip\RiwayatSuratController;
use App\Http\Controllers\Admin\MasterData\Arsip\SuratKeluarAdController;
use App\Http\Controllers\Admin\MasterData\Arsip\SuratMasukAdController;
use App\Http\Controllers\Admin\MasterData\PegawaiController;
use App\Http\Controllers\Admin\MasterData\FormatSuratAdController;
use App\Http\Controllers\Admin\MasterData\ModuleController;
// use App\Http\Controllers\Admin\MasterData\PengajuanPegawaiController;
use App\Http\Controllers\Admin\MasterData\PengaduanAdController;
use App\Http\Controllers\Pegawai\UnitKerja\Arsip\SuratMasukController;
use App\Models\Admin\MasterData\PengaduanAd;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'admin/master-data/pegawai');
Route::resource('master-data/pegawai', PegawaiController::class);
// Route::get('master-data/pegawai', [PegawaiController::class, 'index']);
// Route::get('master-data/pegawai/create', [PegawaiController::class, 'create']);
// Route::get('master-data/pegawai/{pegawai}', [PegawaiController::class, 'show']);
// Route::post('master-data/pegawai', [PegawaiController::class, 'store']);
// Route::get('master-data/pegawai/{pegawai}', [PegawaiController::class, 'update']);
// Route::put('master-data/pegawai/{pegawai}', [PegawaiController::class, 'destroy']);
Route::delete('master-data/pegawai/{pegawai}', [PegawaiController::class, 'destroy']);
Route::get('master-data/pegawai/{pegawai}/edit', [PegawaiController::class, 'edit']);



Route::post('master-data/module/add-role', [ModuleController::class, 'addRole']);
Route::get('master-data/module/delete-role/{role}', [ModuleController::class, 'deleteRole']);

    // Module
Route::resource('master-data/module', ModuleController::class);
Route::get('master-data/module', [ModuleController::class, 'index']);
Route::get('master-data/module/create', [ModuleController::class, 'create']);
Route::get('master-data/module/{module}', [ModuleController::class, 'show']);
Route::delete('master-data/module/{module}', [ModuleController::class, 'destroy']);
Route::get('master-data/module/{module}/edit', [ModuleController::class, 'edit']);

// Format-surat
// Route::resource('master-data/format-surat', FormatSuratAdController::class);
Route::get('master-data/format-surat', [FormatSuratAdController::class, 'index']);
Route::get('master-data/format-surat/create', [FormatSuratAdController::class, 'create']);
Route::get('master-data/format-surat/{Format}', [FormatSuratAdController::class, 'show']);
Route::post('master-data/format-surat', [FormatSuratAdController::class, 'store']);
Route::delete('master-data/format-surat/{Format}', [FormatSuratAdController::class, 'destroy']);
// Route::resource('master-data/pengajuan-pegawai', PengajuanPegawaiController::class);

Route::get('master-data/arsip/surat-masuk/{PengajuanBaru}', [SuratMasukAdController::class, 'show']);


    // Surat Masuk
// Route::resource('master-data/arsip/surat-masuk', SuratMasukAdController::class);
Route::get('master-data/arsip/surat-masuk', [SuratMasukAdController::class, 'index']);
Route::get('master-data/arsip/surat-masuk/{PengajuanBaru}', [SuratMasukAdController::class, 'show']);
Route::delete('master-data/arsip/surat-masuk/{PengajuanBaru}', [SuratMasukAdController::class, 'destroy']);

    // Surat Keluar
// Route::resource('master-data/arsip/surat-keluar', SuratKeluar::class);
Route::get('master-data/arsip/surat-keluar', [SuratKeluarAdController::class, 'index']);
Route::get('master-data/arsip/surat-keluar/create', [SuratKeluarAdController::class, 'create']);
Route::post('master-data/arsip/surat-keluar', [SuratKeluarAdController::class, 'store']);
Route::delete('master-data/arsip/surat-keluar/{Pengajuan}', [SuratKeluarAdController::class, 'destroy']);
// Route::get('master-data/arsip/surat-keluar/create', SuratKeluarController::class, 'create');
// Route::get('master-data/arsip/surat-keluar/{}', SuratKeluarController::class, 'create');

    // Riwayat Surat
// Route::resource('master-data/arsip/riwayat-surat', RiwayatSuratController::class);
Route::get('master-data/arsip/riwayat-surat', [RiwayatSuratController::class, 'index']);
Route::get('master-data/arsip/riwayat-surat/{PengajuanBaru}', [RiwayatSuratController::class, 'show']);
Route::get('master-data/arsip/riwayat-surat/{Pengajuan}', [RiwayatSuratController::class, 'show']);
Route::delete('master-data/arsip/riwayat-surat/{PengajuanBaru}', [RiwayatSuratController::class, 'destroy']);
Route::delete('master-data/arsip/riwayat-surat/{Pengajuan}', [RiwayatSuratController::class, 'destroy']);

    // Pengaduan
// Route::resource('master-data/pengaduan', PengaduanAdController::class);
Route::get('master-data/pengaduan', [PengaduanAdController::class, 'index']);
Route::get('master-data/pengaduan/create', [PengaduanAdController::class, 'create']);
Route::post('master-data/pengaduan', [PengaduanAdController::class, 'store']);
Route::get('master-data/pengaduan/{Pengaduan}', [PengaduanAdController::class, 'show']);
Route::delete('master-data/pengaduan/{Pengaduan}', [PengaduanAdController::class, 'destroy']);
