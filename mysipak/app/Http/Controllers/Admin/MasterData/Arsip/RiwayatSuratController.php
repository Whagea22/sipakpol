<?php

namespace App\Http\Controllers\Admin\MasterData\Arsip;

use App\Http\Controllers\Controller;
use App\Models\Admin\MasterData\Pengajuan;
use App\Models\Pegawai\UnitKerja\PengajuanBaru;
use Illuminate\Http\Request;

class RiwayatSuratController extends Controller
{
    public function index()
    {
        $data['list_pengajuanbaru'] = PengajuanBaru::all();
        $data['list_pengajuan'] = Pengajuan::all();
        return view('admin.master-data.arsip.riwayat-surat.index', $data);
    }

    public function create()
    {
        return view('admin.master-data.arsip.riwayat-surat');
    }

    public function show(PengajuanBaru $PengajuanBaru, Pengajuan $Pengajuan)
    {
        $data['PengajuanBaru'] = $PengajuanBaru;
        $data['Pengajuan'] = $Pengajuan;
        return view('admin.master-data.arsip.riwayat-surat.show', $data);
    }

    public function destroy(PengajuanBaru $PengajuanBaru, Pengajuan $Pengajuan)
    {
        $PengajuanBaru->delete();
        $Pengajuan->delete();
        return redirect('admin/master-data/arsip/riwayat-surat')->with('danger', 'Pengajuan Berhasil Dihapus');
    }
}
