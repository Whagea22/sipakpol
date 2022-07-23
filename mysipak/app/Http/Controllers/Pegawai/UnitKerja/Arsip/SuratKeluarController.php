<?php

namespace App\Http\Controllers\Pegawai\UnitKerja\Arsip;

use App\Http\Controllers\Controller;
use App\Models\Pegawai\UnitKerja\PengajuanBaru;
use Illuminate\Http\Request;

class SuratKeluarController extends Controller
{
    public function index()
    {
        $data['list_pengajuanbaru'] = auth()->user()->pengajuanbaru;
        return view('pegawai.unit-kerja.arsip.suratkeluar.index', $data);
    }

    public function create()
    {
        return view('pegawai.unit-kerja.arsip.suratkeluar.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'nama_pengajuan' => 'required',
            'tanggal_pengajuan' => 'required',
            'buktipenelitian' => 'required',
            'linkkarya' => 'required',
            'buktipenelitian' => 'required',
            'status' => 'required',
            'file_lampiran' => 'required|max:1000|mimes:pdf',
            'file_surat' => 'required|max:1000|mimes:pdf',
            'printoutnidn' => 'required|max:1000|mimes:pdf',
            'docdupak' => 'required|max:1000|mimes:pdf',
            'skpengangkatan' => 'required|max:1000|mimes:pdf',
            'fcijazah' => 'required|max:1000|mimes:pdf',
            'fctranskip' => 'required|max:1000|mimes:pdf',
            'skpenyesuaian' => 'required|max:1000|mimes:pdf',
            'pernyataankarya' => 'required|max:1000|mimes:pdf',
            'pernyataanhasilkarya' => 'required|max:1000|mimes:pdf',
            'karyailmiah' => 'required|max:1000|mimes:pdf',
            'lembarreview' => 'required|max:1000|mimes:pdf',
            'sasarankinerja' => 'required|max:1000|mimes:pdf',

        ];
        $messsages = [
            'required' => ' :attribute wajib di isi',
            'unique' => ' Nomor surat sudah ada',
            'max' => ' :attribute terlalu besar',
        ];
        $this->validate( $request, $rules, $messsages); 
    
        $pengajuanbaru = new PengajuanBaru;
        $pengajuanbaru->id_admin__pegawai = auth()->user()->id;
        $pengajuanbaru->nama_pengajuan = request('nama_pengajuan');
        $pengajuanbaru->tanggal_pengajuan = request('tanggal_pengajuan');
        $pengajuanbaru->buktipenelitian = request('buktipenelitian');
        $pengajuanbaru->linkkarya = request('linkkarya');
        $pengajuanbaru->status = 1;
        $pengajuanbaru->keterangan = request('keterangan');
        $pengajuanbaru->save();
        $pengajuanbaru->handleUploadlampiran('file_lampiran');
        $pengajuanbaru->handleUploadsurat('file_surat');
        $pengajuanbaru->handleUploadnidn('printoutnidn');
        $pengajuanbaru->handleUploaddupak('docdupak');
        $pengajuanbaru->handleUploadpengangkatan('skpengangkatan');
        $pengajuanbaru->handleUploadijazah('fcijazah');
        $pengajuanbaru->handleUploadtranskip('fctranskip');
        $pengajuanbaru->handleUploadjabatan('skjabatan');
        // $pengajuanbaru->handleUploadpengangkatanter('skpengangkatanter');
        $pengajuanbaru->handleUploadpenyesuaian('skpenyesuaian');
        $pengajuanbaru->handleUploadpernyataankarya('pernyataankarya');
        $pengajuanbaru->handleUploadpernyataanhasil('pernyataanhasilkarya');
        $pengajuanbaru->handleUploadbukti('buktipenelitian');
        // $pengajuanbaru->handleUploadpenelitian();
        $pengajuanbaru->handleUploadkaryailmiah('karyailmiah');
        $pengajuanbaru->handleUploadreview('lembarreview');
        $pengajuanbaru->handleUploadkinerja('sasarankinerja');


        return redirect('pegawai/unit-kerja/arsip/suratkeluar')->with('success', 'Pengajuan Anda Berhasil Dikirim');
        return redirect('pegawai/unit-kerja/pengajuan-aktif')->with('success', 'Pengajuan Anda Sedang Diproses');
        return redirect('admin/master-data/arsip/surat-masuk')->with('success', 'Data Berhasil Ditambahkan');
    }


    public function edit(pengajuanbaru $PengajuanBaru)
    {
        $data['pengajuanbaru'] = $PengajuanBaru;
        return view('pegawai/unit-kerja/arsip/suratkeluar/edit', $data);
    }

    public function show(PengajuanBaru $PengajuanBaru){
        $data['PengajuanBaru'] = $PengajuanBaru;
        return view('pegawai.unit-kerja.arsip.suratkeluar.show', $data);
    }

    function destroy(PengajuanBaru $PengajuanBaru){
        $PengajuanBaru->delete();

        return redirect('pegawai/unit-kerja/arsip/suratkeluar')->with('danger', 'Data Arsip Pengajuan Berhasil Dihapus');

    }
}
