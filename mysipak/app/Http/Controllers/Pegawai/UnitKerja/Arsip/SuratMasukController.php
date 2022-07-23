<?php

namespace App\Http\Controllers\Pegawai\UnitKerja\Arsip;

use App\Http\Controllers\Controller;
use App\Models\Admin\MasterData\Pengajuan;

class SuratMasukController extends Controller
{
    public function index()
    {
        $data['list_pengajuan'] = Pengajuan::all();
        return view('pegawai.unit-kerja.arsip.suratmasuk.index', $data);
    }

    public function create()
    {
        return view('pegawai.unit-kerja.arsip.suratmasuk.create');
    }


    public function report()
    {
        return view('pegawai.unit-kerja.arsip.suratmasuk.report');
    }

    public function show(Pengajuan $Pengajuan){
        $data['Pengajuan'] = $Pengajuan;
        return view('pegawai.unit-kerja.arsip.suratmasuk.show', $data);
    }
    function destroy(Pengajuan $Pengajuan)
    {
        $Pengajuan->delete();

        return redirect('pegawai/unit-kerja/arsip/suratmasuk')->with('danger', 'Data Pengajuan Masuk Berhasil Dihapus');

    }
}
