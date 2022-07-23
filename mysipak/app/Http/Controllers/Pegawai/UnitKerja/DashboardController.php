<?php

namespace App\Http\Controllers\Pegawai\UnitKerja;

use App\Http\Controllers\Controller;
use App\Models\Admin\MasterData\Pengajuan;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlah_pengajuanaktif = auth()->user()->PengajuanBaru->where('status',1)->count();
        $jumlah_pengajuanselesai = auth()->user()->PengajuanBaru->where('status',2)->count();
        $jumlah_suratmasuk = Pengajuan::all()->count();
        $jumlah_suratkeluar = auth()->user()->PengajuanBaru->count();

        return view('pegawai.unit-kerja.dashboard.index')
            ->with('jumlah_pengajuanaktif', $jumlah_pengajuanaktif)
            ->with('jumlah_pengajuanselesai', $jumlah_pengajuanselesai)
            ->with('jumlah_suratmasuk', $jumlah_suratmasuk)
            ->with('jumlah_suratkeluar', $jumlah_suratkeluar);
    }
}
