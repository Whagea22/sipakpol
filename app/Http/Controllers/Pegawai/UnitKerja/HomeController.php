<?php

namespace App\Http\Controllers\Pegawai\UnitKerja;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    function showdashboard(){
        return view('pegawai/unit-kerja/dashboard');
    }

    function showlogin3(){
        return view('auth.login3');
    }
}
