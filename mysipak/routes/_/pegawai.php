<?php

use App\Http\Controllers\Pegawai\UnitKerja\RiwayatPengajuanController;
use App\Http\Controllers\Pegawai\UnitKerja\FormatSuratController;
use App\Http\Controllers\Pegawai\UnitKerja\FormatSuratAdController;
use App\Http\Controllers\Pegawai\UnitKerja\PengajuanSelesaiController;
use App\Http\Controllers\Pegawai\UnitKerja\PengajuanBaruController;
use App\Http\Controllers\Pegawai\UnitKerja\PengajuanAktifController;
use App\Http\Controllers\Pegawai\UnitKerja\PengaduanController;


use App\Http\Controllers\Pegawai\UnitKerja\Arsip\SuratMasukController;
use App\Http\Controllers\Pegawai\UnitKerja\Arsip\SuratKeluarController;
use App\Http\Controllers\Pegawai\UnitKerja\Arsip\SuratTugasController;
use App\Http\Controllers\Pegawai\UnitKerja\Arsip\SuratKeputusanController;
use App\Http\Controllers\Pegawai\UnitKerja\DashboardController;
use App\Http\Controllers\Pegawai\UnitKerja\Pengaduan\PengaduanKeluarController;
use App\Http\Controllers\Pegawai\UnitKerja\Pengaduan\PengaduanMasukController;
use App\Http\Controllers\Pegawai\UnitKerja\ProfileController;
use App\Http\Controllers\Pegawai\UnitKerja\SettingController;
use Illuminate\Support\Facades\Route;

        // Pengajuan Aktif
// Route::resource('unit-kerja/pengajuan-aktif', PengajuanAktifController::class);
Route::get('unit-kerja/pengajuan-aktif', [PengajuanAktifController::class, 'index']);
Route::get('unit-kerja/pengajuan-aktif/{PengajuanBaru}', [PengajuanAktifController::class, 'show']);

Route::resource('unit-kerja/pengajuan-baru', PengajuanBaruController::class);
Route::get('unit-kerja/pengajuan-baru/{pengajuanbaru}/edit', [PengajuanBaruController::class, 'edit']);

        // Riwayat Pengajuan
// Route::resource('unit-kerja/riwayat-pengajuan', RiwayatPengajuanController::class);
Route::get('unit-kerja/riwayat-pengajuan', [RiwayatPengajuanController::class, 'index']);
Route::get('unit-kerja/riwayat-pengajuan/{PengajuanBaru}', [RiwayatPengajuanController::class, 'show']);
Route::get('unit-kerja/riwayat-pengajuan/{Pengajuan}', [RiwayatPengajuanController::class, 'show']);
Route::delete('unit-kerja/riwayat-pengajuan/{PengajuanBaru}', [RiwayatPengajuanController::class, 'destroy']);

        // Pengajuan Selesai
// Route::resource('unit-kerja/pengajuan-selesai', PengajuanSelesaiController::class);
Route::get('unit-kerja/pengajuan-selesai/', [PengajuanSelesaiController::class, 'index']);
Route::get('unit-kerja/pengajuan-selesai/{PengajuanBaru}', [PengajuanSelesaiController::class, 'show']);
Route::resource('unit-kerja/format-surat', FormatSuratController::class);

        // Surat Masuk
// Route::resource('unit-kerja/arsip/suratmasuk', SuratMasukController::class);
Route::get('unit-kerja/arsip/suratmasuk', [SuratMasukController::class, 'index']);
Route::get('unit-kerja/arsip/suratmasuk/create', [SuratMasukController::class, 'create']);
Route::get('unit-kerja/arsip/suratmasuk/{Pengajuan}', [SuratMasukController::class, 'show']);
Route::delete('unit-kerja/arsip/suratmasuk/{Pengajuan}', [SuratMasukController::class, 'destroy']);

        // Surat Keluar
// Route::resource('unit-kerja/arsip/suratkeluar', SuratKeluarController::class);
Route::get('unit-kerja/arsip/suratkeluar', [SuratKeluarController::class, 'index']);
Route::get('unit-kerja/arsip/suratkeluar/create', [SuratKeluarController::class, 'create']);
Route::post('unit-kerja/arsip/suratkeluar', [SuratKeluarController::class, 'store']);
Route::get('unit-kerja/arsip/suratkeluar/{PengajuanBaru}/edit', [SuratKeluarController::class, 'edit']);
Route::get('unit-kerja/arsip/suratkeluar/{PengajuanBaru}', [SuratKeluarController::class, 'show']);
Route::delete('unit-kerja/arsip/suratkeluar/{PengajuanBaru}', [SuratKeluarController::class, 'destroy']);


// Route::resource('unit-kerja/arsip/surattugas', SuratTugasController::class);
// Route::resource('unit-kerja/arsip/suratkeputusan', SuratKeputusanController::class);

        // Pengaduan Keluar
// Route::resource('unit-kerja/pengaduan', PengaduanController::class);
Route::get('unit-kerja/pengaduan/pengaduankeluar', [PengaduanKeluarController::class, 'index']);
Route::get('unit-kerja/pengaduan/pengaduankeluar/create', [PengaduanKeluarController::class, 'create']);
Route::post('unit-kerja/pengaduan/pengaduankeluar', [PengaduanKeluarController::class, 'store']);
Route::get('unit-kerja/pengaduan/pengaduankeluar/{Pengaduan}', [PengaduanKeluarController::class, 'show']);

        // Pengaduan Masuk
Route::get('unit-kerja/pengaduan/pengaduanmasuk', [PengaduanMasukController::class, 'index']);
// Route::get('unit-kerja/pengaduan/pengaduanmasuk/show/{Pengaduan}', [PengaduanKeluarController::class, 'show']);
Route::delete('unit-kerja/pengaduan/pengaduanmasuk/{PengaduanAd}', [PengaduanMasukController::class, 'destroy']);

Route::resource('unit-kerja/dashboard', DashboardController::class);

        // Profile
// Route::resource('unit-kerja/profile', ProfileController::class);
Route::get('unit-kerja/profile', [ProfileController::class, 'index']);
Route::get('unit-kerja/profile/{Pegawai}/edit', [ProfileController::class, 'edit']);

Route::resource('master-data/format-surat', FormatSuratAdController::class);

Route::redirect('/', 'pegawai/unit-kerja/dashboard');
Route::get('dashboard', PengajuanBaruController::class);

        // Setting
Route::get('unit-kerja/setting', [SettingController::class, 'index']);
Route::post('unit-kerja/setting/{Pegawai}', [SettingController::class, 'store']);
