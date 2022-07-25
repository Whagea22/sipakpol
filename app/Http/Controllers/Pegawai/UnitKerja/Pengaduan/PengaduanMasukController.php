<?php

namespace App\Http\Controllers\Pegawai\UnitKerja\Pengaduan;

use App\Http\Controllers\Controller;
use App\Models\Pegawai\UnitKerja\Pengaduan;
use App\Models\Admin\MasterData\PengaduanAd;

class PengaduanMasukController extends Controller
{
    public function index()
    {
        $data['list_pengaduan'] = PengaduanAd::all();
        return view('pegawai.unit-kerja.pengaduan.pengaduanmasuk.index', $data);
    }

    public function show(pengaduan $Pengaduan)
    {
        $data['pengaduan'] = $Pengaduan;
        return view('pegawai.unit-kerja.pengaduan.pengaduanmasuk.show', $data);
    }

    function destroy(PengaduanAd $PengaduanAd)
    {
        $PengaduanAd->delete();

        return redirect('pegawai/unit-kerja/pengaduan/pengaduanmasuk')->with('danger', 'Data Pengaduan Masuk Berhasil Dihapus');

    }
}
