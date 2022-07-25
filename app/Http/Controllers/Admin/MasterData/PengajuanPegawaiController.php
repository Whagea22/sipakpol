<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;

use App\Models\Pegawai\UnitKerja\PengajuanBaru;

class PengajuanPegawaiController extends Controller
{
    public function index()
    {
        $data['list_pengajuanbaru'] = PengajuanBaru::all();
        return view('admin.master-data.pengajuan-pegawai.index', $data);
    }

    public function setuju( $id)
    {
        $PengajuanBaru = PengajuanBaru::find($id);
        $PengajuanBaru->status = 2;
        $PengajuanBaru->save();
        return redirect('admin/master-data/pengajuan-pegawai')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function ditolak($id)
    {
        $PengajuanBaru = PengajuanBaru::find($id);
        $PengajuanBaru->status = 3;
        $PengajuanBaru->save();
        return redirect('admin/master-data/pengajuan-pegawai')->with('success', 'Data Berhasil Ditambahkan');
    }
}
