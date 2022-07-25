<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\Admin\MasterData\Pegawai;
use App\Models\Admin\MasterData\PengaduanAd;
use App\Models\Pegawai\UnitKerja\Pengaduan;
use App\Models\Pegawai\UnitKerja\PengajuanBaru;

class PengaduanAdController extends Controller
{
    public function index(Pegawai $Pegawai)
    {
        $data['list_pengaduan'] = Pengaduan::all();
        $data['pegawai'] = Pegawai::all();
        return view('admin.master-data.pengaduan.index', $data);
    }

    public function create(Pengaduan $Pengaduan)
    {
        $data['list_pegawai'] = Pegawai::all();
        $data['Pengaduan'] = $Pengaduan;
        return view('admin.master-data.pengaduan.create', $data);
    }

    public function store()
    {
        $pengaduan = new PengaduanAd;
        $pengaduan->id_admin__pegawai = auth()->user()->id;
        $pengaduan->id_pegawai__pengaduan = request('id_pegawai__pengaduan');
        $pengaduan->keterangan = request('keterangan');
        $pengaduan->save();

        return redirect('admin/master-data/pengaduan')->with('success', 'Pengaduan Pegawai Berhasil Ditanggapi');
        return redirect('pegawai/unit-kerja/pengaduan/pengaduanmasuk')->with('success', 'Pengaduan Pegawai Berhasil Ditanggapi');
    }

    public function show(Pengaduan $Pengaduan)
    {
        $data['pengaduan'] = $Pengaduan;
        return view('admin.master-data.pengaduan.show', $data);
    }

    public function destroy(Pengaduan $Pengaduan)
    {
        $Pengaduan->delete();
        return redirect('admin/master-data/pengaduan')->with('danger', 'Data Pengaduan Berhasil Dihapus');
    }
}
