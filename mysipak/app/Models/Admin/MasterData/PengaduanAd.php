<?php

namespace App\Models\Admin\MasterData;

use App\Models\Model;
use Illuminate\Support\Str;
use App\Models\Admin\MasterData\Pegawai ;
use App\Models\Pegawai\UnitKerja\Pengaduan;

class PengaduanAd extends Model
{
    protected $table = 'admin__pengaduan';

    public function Pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai__pengaduan');
    }

    public function Pengaduan()
    {
        return $this->belongsTo(Pengaduan::class, 'id_pegawai__pengaduan');
    }
}