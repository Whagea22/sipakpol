<?php

namespace App\Http\Controllers\Pegawai\UnitKerja;

use App\Models\Pegawai\UnitKerja\PengajuanBaru;
use App\Http\Controllers\Controller;

class PengajuanSelesaiController extends Controller
{
    public function index()
    {
        $data['list_pengajuanbaru'] = auth()->user()->pengajuanbaru;
        return view('pegawai.unit-kerja.pengajuan-selesai.index', $data);
    }

    function show(PengajuanBaru $PengajuanBaru)
    {
        $data['PengajuanBaru'] = $PengajuanBaru; 
        return view('pegawai.unit-kerja.pengajuan-selesai.show', $data);
    }
}
