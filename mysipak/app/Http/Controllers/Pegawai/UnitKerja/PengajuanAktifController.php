<?php

namespace App\Http\Controllers\Pegawai\UnitKerja;

use App\Http\Controllers\Controller;
use App\Models\Pegawai\UnitKerja\PengajuanBaru;
use Faker;


class PengajuanAktifController extends Controller
{
    public function index()
    {
        // $id_admin__pegawai= request()->admin__pegawai()->id;
        $data['list_pengajuanbaru'] = auth()->user()->pengajuanbaru;
        return view('pegawai.unit-kerja.pengajuan-aktif.index', $data);
    }

    public function edit()
    {
        // $data['list_pengajuanbaru'] = PengajuanBaru::all();
        return view('pegawai.unit-kerja.pengajuan-aktif.index');
    }

    public function show(PengajuanBaru $PengajuanBaru)
    {
        $data['PengajuanBaru'] = $PengajuanBaru;
        return view('pegawai.unit-kerja.pengajuan-aktif.show', $data);
    }
}
