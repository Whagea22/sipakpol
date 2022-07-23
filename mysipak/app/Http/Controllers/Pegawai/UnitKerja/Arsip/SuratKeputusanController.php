<?php

namespace App\Http\Controllers\Pegawai\UnitKerja\Arsip;

use App\Http\Controllers\Controller;
use App\Models\Pegawai\UnitKerja\PengajuanBaru;

class SuratKeputusanController extends Controller
{
    public function index()
    {
        $data['list_pengajuanbaru'] = auth()->user()->pengajuanbaru;
        return view('pegawai.unit-kerja.arsip.suratkeputusan.index', $data);
    }
}
