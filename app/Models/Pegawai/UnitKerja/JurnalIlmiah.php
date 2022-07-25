<?php 
namespace App\Models\Pegawai\UnitKerja;

use App\Models\Model;

class JurnalIlmiah extends Model {
    protected $table = 'pegawai__jurnal_ilmiah';

    function pengajuan(){
        return $this->belongsTo(PengajuanBaru::class, 'id_pengajuan');
    }
}