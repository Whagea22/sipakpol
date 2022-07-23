<?php

namespace App\Http\Controllers\Pegawai\UnitKerja;

use App\Models\Pegawai\UnitKerja\PengajuanBaru;
use App\Http\Controllers\Controller;

class RiwayatPengajuanController extends Controller
{
    public function index()
    {
        $data['list_pengajuanbaru'] = auth()->user()->PengajuanBaru;
        return view('pegawai.unit-kerja.riwayat-pengajuan.index', $data);
    }

    function show(PengajuanBaru $PengajuanBaru){
        $data['PengajuanBaru'] = $PengajuanBaru; 
        return view('pegawai.unit-kerja.riwayat-pengajuan.show', $data);
    }

    function destroy(PengajuanBaru $PengajuanBaru){
        $PengajuanBaru->delete();

        return redirect('pegawai/unit-kerja/riwayat-pengajuan')->with('danger', 'Riwayat Pengajuan Berhasil Dihapus');

    }
}
