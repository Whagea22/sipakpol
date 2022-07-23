<?php

namespace App\Models\Admin\MasterData;

use App\Models\Traits\Attributes\ProfileAttributes;
use App\Models\ModelAuthenticate;
use App\Models\Admin\MasterData\Role;
use App\Models\Pegawai\UnitKerja\Pengaduan;
use App\Models\Pegawai\UnitKerja\PengajuanBaru;
use App\Models\Pegawai\UnitKerja\Pengajuan;
use Illuminate\Support\Str;

class Pegawai extends ModelAuthenticate
{
    use ProfileAttributes;

    protected $table = 'admin__pegawai';

    public $fillable = ['nama', 'email'];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function role()
    {
        return $this->hasMany(Role::class, 'id_pegawai');
    }

    public function pengajuanbaru()
    {
        return $this->hasMany(PengajuanBaru::class, 'id_admin__pegawai');
    }

    public function pengajuan()
    {
        return $this->hasMany(Pengajuan::class, 'id_admin__pegawai');
    }

    public function pengaduan()
    {
        return $this->hasMany(Pengaduan::class, 'id_admin__pegawai');
    }
    public function pengaduanad()
    {
        return $this->hasMany(PengaduanAd::class, 'id_pegawai__pengaduan');
    }

}
