<?php

namespace App\Models\Admin\MasterData;

use App\Models\Model;
use Illuminate\Support\Str;
use App\Models\Admin\MasterData\Pegawai ;
use App\Models\Pegawai\UnitKerja\PengajuanBaru;

class Pengajuan extends Model
{
    protected $table = 'admin__pengajuan';

    public function Pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_admin__pegawai');
    }

    public function PengajuanBaru()
    {
        return $this->belongsTo(PengajuanBaru::class, 'id_pegawai__pengajuan');
    }

    function handleUploadfile()
    {
        if(request()->hasFile('file')) {
            $file = request()->file('file');
            $file_name = request()->file('file')->getClientOriginalName();
            $destination = "pengajuanbaru/file";
            $randomStr = Str::random(10);
            $filename = $file_name . "-".time()  . $randomStr . "."  . $file->extension();
            $url = $file->storeAs($destination, $filename);
            $this->file = "app/" . $url;
            $this->save();

        }
    }
}