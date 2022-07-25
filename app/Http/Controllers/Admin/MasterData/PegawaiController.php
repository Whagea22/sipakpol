<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\Admin\MasterData\Pegawai;
use App\Models\Admin\MasterData\Role;

class PegawaiController extends Controller
{
    public function index()
    {
        $data['list_pegawai'] = Pegawai::all();
        return view('admin.master-data.pegawai.index', $data);
    }

    public function create()
    {
        return view('admin.master-data.pegawai.create');
    }

    public function store()
    {
        $pegawai = new Pegawai;
        $pegawai->nip = request('nip');
        $pegawai->nidn = request('nidn');
        $pegawai->nup = request('nup');
        $pegawai->nik_ktp = request('nik_ktp');
        $pegawai->nama = request('nama');
        $pegawai->gelar_depan = request('gelar_depan');
        $pegawai->gelar_belakang = request('gelar_belakang');
        $pegawai->tempatlahir = request('tempatlahir');
        $pegawai->tanggallahir = request('tanggallahir');
        $pegawai->agama = request('agama');
        $pegawai->jeniskelamin = request('jeniskelamin');
        $pegawai->unitkerja = request('unitkerja');
        $pegawai->jabatan = request('jabatan');
        $pegawai->email = request('email');

        if (request('password')) $pegawai->password = request('password');

        $pegawai->handleUploadprofile();
        $pegawai->save();

        return redirect('admin/master-data/pegawai')->with('success', 'Data Pegawai Berhasil Disimpan');
    }

    public function show(Pegawai $pegawai)
    {
        $data['pegawai'] = $pegawai;
        return view('admin.master-data.pegawai.show', $data);
    }

    public function edit(Pegawai $pegawai)
    {
        $data['pegawai'] = $pegawai;
        return view('admin/master-data/pegawai.edit', $data)->with('success', 'Data Pegawai Berhasil Diedit');
    }

    function update(Pegawai $pegawai){

        $pegawai->nip = request('nip');
        $pegawai->nidn = request('nidn');
        $pegawai->nup = request('nup');
        $pegawai->nik_ktp = request('nik_ktp');
        $pegawai->nama = request('nama');
        $pegawai->gelar_depan = request('gelar_depan');
        $pegawai->gelar_belakang = request('gelar_belakang');
        $pegawai->tempatlahir = request('tempatlahir');
        $pegawai->tanggallahir = request('tanggallahir');
        $pegawai->agama = request('agama');
        $pegawai->jeniskelamin = request('jeniskelamin');
        $pegawai->unitkerja = request('unitkerja');
        $pegawai->jabatan = request('jabatan');
        $pegawai->email = request('email');

        if (request('password')) $pegawai->password = request('password');

        $pegawai->handleUploadprofile();
        $pegawai->save();

        return redirect('admin/master-data/pegawai')->with('success', 'Data Berhasil Diedit');
    }

    public function destroy(Pegawai $pegawai)
    {
        $list_role = Role::where('id_pegawai', $pegawai->id)->get();
        if($list_role->count() > 0){
            $list_role->each(function($role){
                $role->delete();
            });
        }
        $pegawai->delete();
        return redirect('admin/master-data/pegawai')->with('danger', 'Data Pegawai Berhasil Dihapus');;
    }
}
