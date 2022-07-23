<?php

namespace App\Http\Controllers\Pegawai\UnitKerja\Pengaduan;

use App\Http\Controllers\Controller;
use App\Models\Pegawai\UnitKerja\Pengaduan;
use Illuminate\Http\Request;

class PengaduanKeluarController extends Controller
{
    public function index(Pengaduan $Pengaduan)
    {
        $data['list_pengaduan'] = auth()->user()->Pengaduan;
        $data['pengaduan'] = $Pengaduan;
        return view('pegawai.unit-kerja.pengaduan.pengaduankeluar.index', $data);
    }

    public function create()
    {
        return view('pegawai.unit-kerja.pengaduan.pengaduankeluar.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required',
        ];
        $messsages = [
            'required' => ' :attribute wajib di isi',
            'unique' => ' Nomor surat sudah ada',
            'max' => ' :attribute terlalu besar',
        ];

        $this->validate( $request, $rules, $messsages);

        $pengaduan = new Pengaduan;
        $pengaduan->nama = request('nama');
        $pengaduan->id_admin__pegawai = auth()->user()->id;
        $pengaduan->id_pegawai__pengajuan = auth()->user()->id;
        $pengaduan->id_pegawai__pengaduan = auth()->user()->id;
        $pengaduan->deskripsi = request('deskripsi');
        $pengaduan->save();
        $pengaduan->handleUploadbukti();
        

        return redirect('pegawai/unit-kerja/pengaduan/pengaduankeluar')->with('success', 'Pengaduan Berhasil Dikirim');
        return redirect('admin/master-data/pengaduan')->with('success', 'Pengaduan Telah Masuk');
    }

    public function show(pengaduan $Pengaduan)
    {
        $data['pengaduan'] = $Pengaduan;
        return view('pegawai.unit-kerja.pengaduan.pengaduankeluar.show', $data);
    }
}
