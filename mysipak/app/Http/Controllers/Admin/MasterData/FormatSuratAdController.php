<?php

namespace App\Http\Controllers\Admin\MasterData;
use App\Models\Admin\MasterData\Format;
use App\Http\Controllers\Controller;

class FormatSuratAdController extends Controller
{
    public function index(format $Format)
    {
        $data['list_format'] = Format::all();
        $data['format'] = $Format;
        return view('admin.master-data.format-surat.index', $data);
    }

    public function create()
    {
        return view('admin.master-data.format-surat.create');
    }

    public function store()
    {
        $format = new Format;
        $format->nama = request('nama');
        // $format->handleUploadformat();
        $format->handleUploadformatword();
        $format->save();

        return redirect('admin/master-data/format-surat')->with('success', 'Format Surat Berhasil Ditambahkan');
        return redirect('pegawai/unit-kerja/format-surat')->with('success', 'Data Berhasil Ditambahkan');
    }

    function show(Format $Format){
        $data['format'] = $Format; 
        return view('admin.master-data.format-surat.show', $data);
    }

    function destroy(Format $Format){
        $Format->delete();

        return redirect('admin/master-data/format-surat')->with('danger', 'Format Surat Berhasil Dihapus');

    }
}
