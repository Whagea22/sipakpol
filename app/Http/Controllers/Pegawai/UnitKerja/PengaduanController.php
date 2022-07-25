<?php

namespace App\Http\Controllers\Pegawai\UnitKerja;

use App\Http\Controllers\Controller;
use App\Models\Admin\MasterData\PengaduanAd;
use App\Models\Pegawai\UnitKerja\Pengaduan;

class PengaduanController extends Controller
{
    public function index(PengaduanAd $PengaduanAd)
    {
        $data['list_pengaduan'] = auth()->user()->PengaduanAd;
        // $data['PengaduanAd'] = auth()->user()->PengaduanAd;
        return view('pegawai.unit-kerja.pengaduan.index', $data);
    }

    public function create()
    {
        return view('pegawai.unit-kerja.pengaduan.create');
    }

    public function store()
    {
        $pengaduan = new Pengaduan;
        $pengaduan->nama = request('nama');
        $pengaduan->id_admin__pegawai = auth()->user()->id;
        $pengaduan->id_pegawai__pengajuan = auth()->user()->id;
        $pengaduan->deskripsi = request('deskripsi');
        $pengaduan->handleUploadbukti();
        $pengaduan->save();

        return redirect('pegawai/unit-kerja/pengaduan')->with('success', 'Pengaduan Berhasil Dikirim');
        return redirect('admin/master-data/pengaduan')->with('success', 'Pengaduan Telah Masuk');
    }

    public function show(pengaduan $Pengaduan)
    {
        $data['pengaduan'] = $Pengaduan;
        return view('pegawai.unit-kerja.pengaduan.show', $data);
    }
}
