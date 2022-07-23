<?php

namespace App\Models\Pegawai\UnitKerja;

use App\Models\Admin\MasterData\Pegawai;
use App\Models\Admin\MasterData\PengaduanAd;
use App\Models\Model;
use App\View\Components\Pegawai\UnitKerja\PengajuanBaru;
use Illuminate\Support\Str;

class Pengaduan extends Model
{
    protected $table = 'pegawai__pengaduan';

    function handleUploadbukti()
    {
        if(request()->hasFile('bukti')) {
            $bukti = request()->file('bukti');
            $file_name = request()->file('bukti')->getClientOriginalName();
            $destination = "Pengaduan/";
            $randomStr = Str::random(10);
            $filename = $file_name . "-".time()  . $randomStr . "."  . $bukti->extension();
            $url = $bukti->storeAs($destination, $filename);
            $this->bukti = "app/" . $url;
            $this->save();
        }
    }

    public function Pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_admin__pegawai');
    }

    public function PengajuanBaru()
    {
        return $this->belongsTo(PengajuanBaru::class, 'id_pegawai__pengajuan');
    }

    public function PengaduanAd()
    {
        return $this->hasMany(PengaduanAd::class, 'id_pegawai__pengaduan');
    }
}
