<?php

namespace App\Http\Controllers\Admin\MasterData\Arsip;

use App\Http\Controllers\Controller;
use App\Models\Admin\MasterData\Pengajuan;
use App\Models\Admin\MasterData\Pegawai;
use App\Models\Pegawai\UnitKerja\PengajuanBaru;
use Illuminate\Http\Request;

class SuratKeluarAdController extends Controller
{
    public function index()
    {
        $data['list_pengajuan'] = Pengajuan::all();
        return view('admin/master-data/arsip/surat-keluar/index', $data);
    }
    
    public function create() 
    {
        $data['list_pengajuanbaru'] = PengajuanBaru::all(); 
        $data['list_pegawai'] = Pegawai::all(); 
        return view('admin/master-data/arsip/surat-keluar/create', $data);
    }
    
    public function store() 
    {
    $pengajuan = new Pengajuan;
    $pengajuan->id_admin__pegawai = request('id_admin__pegawai');
    $pengajuan->nama_pengajuan = request('nama_pengajuan');
    $pengajuan->keterangan = request('keterangan');
    $pengajuan->save();
    $pengajuan->handleUploadfile();
    
    return redirect('admin/master-data/arsip/surat-keluar')->with('success', 'Data Berhasil Ditambahkan');
    return redirect('admin/master-data/arsip/riwayat-surat')->with('success', 'Data Berhasil Ditambahkan');
    return redirect('pegawai/unit-kerja/arsip/suratmasuk')->with('success', 'Data Berhasil Ditambahkan');
 
    }


    public function edit(Pengajuan $Pengajuan)
    {
        $data['pengajuan'] = $Pengajuan;
        return view('admin/master-data/arsip/surat-keluar/edit', $data);
    }

    function show(Pengajuan $Pengajuan){
        $data['Pengajuan'] = $Pengajuan;
        $data['list_pegawai'] = Pegawai::all(); 

        return view('admin/master-data/arsip/surat-keluar/create', $data);
    }

    public function destroy(Pengajuan $Pengajuan)
    {
        $Pengajuan->delete();
        return redirect('admin/master-data/arsip/surat-keluar')->with('danger', 'Pengajuan Berhasil Dihapus');
    }

}

