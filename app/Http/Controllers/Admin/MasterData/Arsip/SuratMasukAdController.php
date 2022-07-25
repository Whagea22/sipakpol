<?php

namespace App\Http\Controllers\Admin\MasterData\Arsip;

use App\Http\Controllers\Controller;
use App\Models\Pegawai\UnitKerja\PengajuanBaru;

class SuratMasukAdController extends Controller
{
    public function index()
    {
        $data['list_pengajuanbaru'] = PengajuanBaru::all();
        return view('admin.master-data.arsip.surat-masuk.index', $data);
    }

    public function setuju($id)
    {
        $PengajuanBaru = PengajuanBaru::find($id);
        $PengajuanBaru->status = 2;
        $PengajuanBaru->save();
        return redirect('admin/master-data/arsip/surat-masuk')->with('success', 'Pengajuan Pegawai Disetujui');
    }

    public function ditolak($id)
    {
        $PengajuanBaru = PengajuanBaru::find($id);
        $PengajuanBaru->status = 3;
        $PengajuanBaru->save();
        return redirect('admin/master-data/arsip/surat-masuk')->with('danger', 'Pengajuan Pegawai Ditolak');
    }

    public function edit()
    {
        return view('admin.master-data.arsip.surat-masuk.edit');
    }

    public function create()
    {
        return view('admin.master-data.arsip.surat-masuk.index');
    }

    public function show(PengajuanBaru $PengajuanBaru)
    {
        $data['PengajuanBaru'] = $PengajuanBaru;
        return view('admin.master-data.arsip.surat-masuk.show', $data);
    }

    public function destroy(PengajuanBaru $PengajuanBaru)
    {
        $PengajuanBaru->delete();
        return redirect('admin/master-data/arsip/surat-masuk')->with('danger', 'Pengajuan Berhasil Dihapus');
    }
}
