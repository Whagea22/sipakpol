<?php

namespace App\Models\Pegawai\UnitKerja;

use App\Models\Admin\MasterData\Pegawai;
use App\Models\Admin\MasterData\Pengajuan;
use App\Models\Model;
use Illuminate\Support\Str;

class PengajuanBaru extends Model{
    protected $table = 'pegawai__pengajuan';

    function jurnal_ilmiah(){
        return $this->hasMany(JurnalIlmiah::class, 'id_pengajuan');
    }


    function handleUploadlampiran()
    {
        if(request()->hasFile('file_lampiran')) {
            $file_lampiran = request()->file('file_lampiran');
            $file_name = request()->file('file_lampiran')->getClientOriginalName();
            $destination = "pengajuanbaru/filelampiran";
            $randomStr = Str::random(10);
            $filename = $file_name . "-".time()  . $randomStr . "."  . $file_lampiran->extension();
            $url = $file_lampiran->storeAs($destination, $filename);
            $this->file_lampiran = "app/" . $url;
            $this->save();

        }
    }

    function handleUploadsurat()
    {
        if(request()->hasFile('file_surat')) {
            $file_surat = request()->file('file_surat');
            $file_name = request()->file('file_surat')->getClientOriginalName();
            $destination = "pengajuanbaru/filesurat";
            $randomStr = Str::random(10);
            $filename = $file_name . "-".time()  . $randomStr . "."  . $file_surat->extension();
            $url = $file_surat->storeAs($destination, $filename);
            $this->file_surat = "app/" . $url;
            $this->save();
        }
    }

    function handleUploadpengangkatan()
    {
        if(request()->hasFile('skpengangkatan')) {
            $skpengangkatan = request()->file('skpengangkatan');
            $file_name = request()->file('skpengangkatan')->getClientOriginalName();
            $destination = "pengajuanbaru/skpengangkatan";
            $randomStr = Str::random(10);
            $filename = $file_name . "-".time()  . $randomStr . "."  . $skpengangkatan->extension();
            $url = $skpengangkatan->storeAs($destination, $filename);
            $this->skpengangkatan = "app/" . $url;
            $this->save();
        }
    }

    function handleUploadijazah()
    {
        if(request()->hasFile('fcijazah')) {
            $fcijazah = request()->file('fcijazah');
            $file_name = request()->file('fcijazah')->getClientOriginalName();
            $destination = "pengajuanbaru/fcijazah";
            $randomStr = Str::random(10);
            $filename = $file_name . "-".time()  . $randomStr . "."  . $fcijazah->extension();
            $url = $fcijazah->storeAs($destination, $filename);
            $this->fcijazah = "app/" . $url;
            $this->save();
        }
    }

    function handleUploadtranskip()
    {
        if(request()->hasFile('fctranskip')) {
            $fctranskip = request()->file('fctranskip');
            $file_name = request()->file('fctranskip')->getClientOriginalName();
            $destination = "pengajuanbaru/fctranskip";
            $randomStr = Str::random(10);
            $filename = $file_name . "-".time()  . $randomStr . "."  . $fctranskip->extension();
            $url = $fctranskip->storeAs($destination, $filename);
            $this->fctranskip = "app/" . $url;
            $this->save();
        }
    }

    function handleUploadjabatan()
    {
        if(request()->hasFile('skjabatan')) {
            $skjabatan = request()->file('skjabatan');
            $file_name = request()->file('skjabatan')->getClientOriginalName();
            $destination = "pengajuanbaru/skjabatan";
            $randomStr = Str::random(10);
            $filename = $file_name . "-".time()  . $randomStr . "."  . $skjabatan->extension();
            $url = $skjabatan->storeAs($destination, $filename);
            $this->skjabatan = "app/" . $url;
            $this->save();
        }
    }

    function handleUploadpengangkatanter()
    {
        if(request()->hasFile('skpengangkatanter')) {
            $skpengangkatanter = request()->file('skpengangkatanter');
            $file_name = request()->file('skpengangkatanter')->getClientOriginalName();
            $destination = "pengajuanbaru/skpengangkatanter";
            $randomStr = Str::random(10);
            $filename = $file_name . "-".time()  . $randomStr . "."  . $skpengangkatanter->extension();
            $url = $skpengangkatanter->storeAs($destination, $filename);
            $this->skpengangkatanter = "app/" . $url;
            $this->save();
        }
    }

    function handleUploadpenyesuaian()
    {
        if(request()->hasFile('skpenyesuaian')) {
            $skpenyesuaian = request()->file('skpenyesuaian');
            $file_name = request()->file('skpenyesuaian')->getClientOriginalName();
            $destination = "pengajuanbaru/skpenyesuaian";
            $randomStr = Str::random(10);
            $filename = $file_name . "-".time()  . $randomStr . "."  . $skpenyesuaian->extension();
            $url = $skpenyesuaian->storeAs($destination, $filename);
            $this->skpenyesuaian = "app/" . $url;
            $this->save();
        }
    }

    function handleUploadpernyataankarya()
    {
        if(request()->hasFile('pernyataankarya')) {
            $pernyataankarya = request()->file('pernyataankarya');
            $file_name = request()->file('pernyataankarya')->getClientOriginalName();
            $destination = "pengajuanbaru/pernyataankarya";
            $randomStr = Str::random(10);
            $filename = $file_name . "-".time()  . $randomStr . "."  . $pernyataankarya->extension();
            $url = $pernyataankarya->storeAs($destination, $filename);
            $this->pernyataankarya = "app/" . $url;
            $this->save();
        }
    }

    function handleUploadpernyataanhasil()
    {
        if(request()->hasFile('pernyataanhasilkarya')) {
            $pernyataanhasilkarya = request()->file('pernyataanhasilkarya');
            $file_name = request()->file('pernyataanhasilkarya')->getClientOriginalName();
            $destination = "pengajuanbaru/pernyataanhasilkarya";
            $randomStr = Str::random(10);
            $filename = $file_name . "-".time()  . $randomStr . "."  . $pernyataanhasilkarya->extension();
            $url = $pernyataanhasilkarya->storeAs($destination, $filename);
            $this->pernyataanhasilkarya = "app/" . $url;
            $this->save();
        }
    }

    function handleUploadbukti()
    {
        if(request()->hasFile('buktipenelitian')) {
            $buktipenelitian = request()->file('buktipenelitian');
            $file_name = request()->file('buktipenelitian')->getClientOriginalName();
            $destination = "pengajuanbaru/buktipenelitian";
            $randomStr = Str::random(10);
            $filename = $file_name . "-".time()  . $randomStr . "."  . $buktipenelitian->extension();
            $url = $buktipenelitian->storeAs($destination, $filename);
            $this->buktipenelitian = "app/" . $url;
            $this->save();
        }
    }

    function handleUploadnidn()
    {
        if(request()->hasFile('printoutnidn')) {
            $printoutnidn = request()->file('printoutnidn');
            $file_name = request()->file('printoutnidn')->getClientOriginalName();
            $destination = "pengajuanbaru/printoutnidn";
            $randomStr = Str::random(10);
            $filename = $file_name . "-".time()  . $randomStr . "."  . $printoutnidn->extension();
            $url = $printoutnidn->storeAs($destination, $filename);
            $this->printoutnidn = "app/" . $url;
            $this->save();
        }
    }

    function handleUploaddupak()
    {
        if(request()->hasFile('docdupak')) {
            $docdupak = request()->file('docdupak');
            $file_name = request()->file('docdupak')->getClientOriginalName();
            $destination = "pengajuanbaru/docdupak";
            $randomStr = Str::random(10);
            $filename = $file_name . "-".time()  . $randomStr . "."  . $docdupak->extension();
            $url = $docdupak->storeAs($destination, $filename);
            $this->docdupak = "app/" . $url;
            $this->save();
        }
    }

    function handleUploadkaryailmiah()
    {
        if(request()->hasFile('karyailmiah')) {
            $karyailmiah = request()->file('karyailmiah');
            $file_name = request()->file('karyailmiah')->getClientOriginalName();
            $destination = "pengajuanbaru/karyailmiah";
            $randomStr = Str::random(10);
            $filename = $file_name . "-".time()  . $randomStr . "."  . $karyailmiah->extension();
            $url = $karyailmiah->storeAs($destination, $filename);
            $this->karyailmiah = "app/" . $url;
            $this->save();

        }
    }

    function handleUploadreview()
    {

        if(request()->hasFile('buku')) {
            $buku = request()->file('buku');
            $file_name = request()->file('buku')->getClientOriginalName();
            $destination = "pengajuanbaru/lembarreview/Buku";
            $randomStr = Str::random(10);
            $filename = $file_name . "-".time()  . $randomStr . "."  . $buku->extension();
            $url = $buku->storeAs($destination, $filename);
            $this->buku = "app/" . $url;
            $this->save();
        }

        if(request()->hasFile('prosiding')) {
            $prosiding = request()->file('prosiding');
            $file_name = request()->file('prosiding')->getClientOriginalName();
            $destination = "pengajuanbaru/lembarreview/Prosiding";
            $randomStr = Str::random(10);
            $filename = $file_name . "-".time()  . $randomStr . "."  . $prosiding->extension();
            $url = $prosiding->storeAs($destination, $filename);
            $this->prosiding = "app/" . $url;
            $this->save();
        }

        if(request()->hasFile('jurnalilmiah')) {
            $jurnalilmiah = request()->file('jurnalilmiah');
            $file_name = request()->file('jurnalilmiah')->getClientOriginalName();
            $destination = "pengajuanbaru/lembarreview/JurnalIlmiah";
            $randomStr = Str::random(10);
            $filename = $file_name . "-".time()  . $randomStr . "."  . $jurnalilmiah->extension();
            $url = $jurnalilmiah->storeAs($destination, $filename);
            $this->jurnalilmiah = "app/" . $url;
            $this->save();
        }

        if(request()->hasFile('bookchapter')) {
            $bookchapter = request()->file('bookchapter');
            $file_name = request()->file('bookchapter')->getClientOriginalName();
            $destination = "pengajuanbaru/lembarreview/BookChapter";
            $randomStr = Str::random(10);
            $filename = $file_name . "-".time()  . $randomStr . "."  . $bookchapter->extension();
            $url = $bookchapter->storeAs($destination, $filename);
            $this->bookchapter = "app/" . $url;
            $this->save();
        }

        if(request()->hasFile('paten')) {
            $paten = request()->file('paten');
            $file_name = request()->file('paten')->getClientOriginalName();
            $destination = "pengajuanbaru/lembarreview/Paten";
            $randomStr = Str::random(10);
            $filename = $file_name . "-".time()  . $randomStr . "."  . $paten->extension();
            $url = $paten->storeAs($destination, $filename);
            $this->paten = "app/" . $url;
            $this->save();
        }
    }

    function handleUploadkinerja()
    {
        if(request()->hasFile('sasarankinerja')) {
            $sasarankinerja = request()->file('sasarankinerja');
            $file_name = request()->file('sasarankinerja')->getClientOriginalName();
            $destination = "pengajuanbaru/sasarankinerja";
            $randomStr = Str::random(10);
            $filename = $file_name . "-".time()  . $randomStr . "."  . $sasarankinerja->extension();
            $url = $sasarankinerja->storeAs($destination, $filename);
            $this->sasarankinerja = "app/" . $url;
            $this->save();
        }
    }

    public function Pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_admin__pegawai');
    }

    public function Pengajuan()
    {
        return $this->hasMany(Pengajuan::class, 'id_pegawai__pengajuan');
    }

    public function Pengaduan()
    {
        return $this->belongsTo(Pengaduan::class, 'id_pegawai__pengujuan');
    }

    // function handleUploadfile()
    // {
    //     if(request()->hasFile('file')) {
    //         $file = request()->file('file');
    //         $file_name = request()->file('file')->getClientOriginalName();
    //         $destination = "pengajuanbaru/file";
    //         $randomStr = Str::random(10);
    //         $filename = $file_name . "-".time()  . $randomStr . "."  . $file->extension();
    //         $url = $file->storeAs($destination, $filename);
    //         $this->file = "app/" . $url;
    //         $this->save();

    //     }
    // }
}
