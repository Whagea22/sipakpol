<?php

namespace App\Http\Controllers\Pegawai\UnitKerja;

use App\Http\Controllers\Controller;
use App\Models\Admin\MasterData\Pegawai;
use App\Models\Pegawai\UnitKerja\PengajuanBaru;
use Illuminate\Http\Request;

class PengajuanBaruController extends Controller
{
    public function __invoke()
    {
        return view('pegawai.unit-kerja.dashboard');
    }

    public function index()
    {
        $data['list_pengajuanbaru'] = auth()->user()->pengajuanbaru;
        return view('pegawai.unit-kerja.pengajuan-baru.index', $data);
    }

    public function create()
    {
        return view('pegawai.unit-kerja.pengajuan-baru.create');
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
            'docdupak' => 'required|max:1000|mimes:xls,xlsx',
            'skpengangkatan' => 'required|max:1000|mimes:pdf',
            'fcijazah' => 'required|max:1000|mimes:pdf',
            'fctranskip' => 'required|max:1000|mimes:pdf',
            'skpenyesuaian' => 'required|max:1000|mimes:pdf',
            'pernyataankarya' => 'required|max:1000|mimes:pdf',
            'pernyataanhasilkarya' => 'required|max:1000|mimes:pdf',
            'karyailmiah' => 'required|max:1000|mimes:pdf',
            'sasarankinerja' => 'required|max:1000|mimes:pdf',
            'buku' => 'required_without_all:book_chapter,prosiding,paten,jurnalilmiah|mimes:pdf',
            'book_chapter' => 'required_without_all:buku,prosiding,paten,jurnalilmiah|mimes:pdf',
            'prosiding' => 'required_without_all:buku,book_chapter,paten,jurnalilmiah|mimes:pdf',
            'paten' => 'required_without_all:buku,book_chapter,prosiding,jurnalilmiah|mimes:pdf',
            'jurnalilmiah' => 'required_without_all:buku,book_chapter,prosiding,paten|mimes:pdf',
        ];
        $messsages = [
            'required_without_all' => ':attribute wajib di isi ketika yang lain kosong',
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


        return redirect('pegawai/unit-kerja/pengajuan-baru')->with('success', 'Pengajuan Anda Berhasil Dikirim');
        return redirect('pegawai/unit-kerja/pengajuan-aktif')->with('success', 'Pengajuan Anda Sedang Diproses');
        return redirect('admin/master-data/arsip/surat-masuk')->with('success', 'Data Berhasil Ditambahkan');
        return redirect('pegawai/unit-kerja/arsip/suratkeluar')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function update(PengajuanBaru $pengajuanbaru)
    {

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


        return redirect('pegawai/unit-kerja/pengajuan-baru')->with('success', 'Pengajuan Anda Berhasil Dikirim');
        return redirect('pegawai/unit-kerja/pengajuan-aktif')->with('success', 'Pengajuan Anda Sedang Diproses');
        return redirect('admin/master-data/arsip/surat-masuk')->with('success', 'Data Berhasil Ditambahkan');
        return redirect('pegawai/unit-kerja/arsip/suratkeluar')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit(pengajuanbaru $PengajuanBaru)
    {
        $data['pengajuanbaru'] = $PengajuanBaru;
        return view('pegawai/unit-kerja/pengajuan-baru/edit', $data);
    }

    function show(pengajuanbaru $PengajuanBaru){
        $data['pengajuanbaru'] = $PengajuanBaru;
        return view('pegawai.unit-kerja.pengajuan-baru.show', $data);
    }
}
