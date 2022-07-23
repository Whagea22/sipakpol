<?php

namespace App\Http\Controllers\Pegawai\UnitKerja;

use App\Http\Controllers\Controller;
use App\Models\Admin\MasterData\Pegawai;


class ProfileController extends Controller
{
    public function index(Pegawai $Pegawai)
    {
        $data['list_pegawai'] = auth()->user()->pegawai;
        $data['pegawai'] = $Pegawai;
        $data['data_pegawai'] = Pegawai::all();
        return view('pegawai.unit-kerja.profile.index', $data);
    }

    public function create()
    {
        return view('pegawai.unit-kerja.profile.create');
    }

    public function edit(Pegawai $Pegawai)
    {
        $data['pegawai'] = $Pegawai;
        return view('pegawai.unit-kerja.profile.edit', $data);
    }

    public function show()
    {
        return view('pegawai.unit-kerja.profile.show');
    }

    public function updatepegawai(Pegawai $pegawai)
    {
        $pegawai->nip = request('nip');
        $pegawai->nama = request('nama');
        $pegawai->tempatlahir = request('tempatlahir');
        $pegawai->tanggallahir = request('tanggallahir');
        $pegawai->agama = request('agama');
        $pegawai->jeniskelamin = request('jeniskelamin');
        $pegawai->unitkerja = request('unitkerja');
        $pegawai->jabatan = request('jabatan');
        $pegawai->email = request('email');
        $pegawai->username = request('username');

        if (request('password')) $pegawai->password = request('password');

        $pegawai->handleUploadprofile();
        $pegawai->save();

        return back()->with('success', 'Data Profile Pegawai Berhasil Diedit');
    }
}
