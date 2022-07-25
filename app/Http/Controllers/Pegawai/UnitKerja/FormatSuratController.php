<?php

namespace App\Http\Controllers\Pegawai\UnitKerja;

use App\Http\Controllers\Controller;
use App\Models\Admin\MasterData\Format;

class FormatSuratController extends Controller
{
    public function index()
    {
        $data['list_format'] = Format::all();
        return view('pegawai.unit-kerja.format-surat.index', $data);
    }
    
}
