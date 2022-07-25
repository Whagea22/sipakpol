<?php

use App\Http\Controllers\Admin\MasterData\Arsip\SuratMasukAdController;
use Illuminate\Support\Facades\Route;
use App\Models\Admin\MasterData;
use App\Models\Pegawai\UnitKerja;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontAndController;
use App\Http\Controllers\Pegawai\UnitKerja\HomeController;
use App\Http\Controllers\Pegawai\UnitKerja\ProfileController;
use App\Http\Controllers\ProfileController as ControllersProfileController;

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
    return view('welcome');
});

Route::get('index', [FrontAndController::class, 'index']);
Route::get('about', [FrontAndController::class, 'about']);
Route::get('course', [FrontAndController::class, 'course']);
Route::get('gallery', [FrontAndController::class, 'gallery']);
Route::get('news', [FrontAndController::class, 'news']);
Route::get('pages', [FrontAndController::class, 'pages']);
Route::get('contact', [FrontAndController::class, 'contact']);

Route::get('login3', [HomeController::class, 'showlogin3']);



Route::get('pegawai/unit-kerja/dashboard', function () {
    return view('pegawai.unit-kerja.dashboard');
});

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware('auth')->group(function(){

    Route::prefix('admin')
        ->middleware('can:Sipak-Admin')
        ->group(function(){
        include "_/admin.php";
    });

    Route::prefix('pegawai')
        ->middleware('can:Sipak-Pegawai')
        ->group(function() {
        include "_/pegawai.php";
    });

    Route::get('profile', ControllersProfileController::class);
});


Route::put('update-pegawai/{pegawai}', [ProfileController::class, 'updatepegawai']);

Route::put('setuju/{id}', [SuratMasukAdController::class, 'setuju']);
Route::put('ditolak/{id}', [SuratMasukAdController::class, 'ditolak']);

