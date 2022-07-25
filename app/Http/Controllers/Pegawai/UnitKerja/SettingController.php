<?php

namespace App\Http\Controllers\Pegawai\UnitKerja;

use App\Http\Controllers\Controller;
use Auth;

class SettingController extends Controller
{
    public function index()
    {
        $data['pegawai'] = Auth::pegawai();
        return view('pegawai.unit-kerja.setting.index', $data);
    }

    public function store()
    {

    }

}
