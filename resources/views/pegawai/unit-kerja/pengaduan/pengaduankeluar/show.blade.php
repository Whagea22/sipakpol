<x-module.pegawai-unitkerja>
    <x-template.button.back-button url="pegawai/unit-kerja/pengaduan" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                {{ $pengaduan->pegawai->nama }}
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dl>
                        <dt>Nama Pengaduan :</dt>
                        <dd>{{ $pengaduan->nama }}</dd>
                        <dt>Keterangan :</dt>
                        <dd>{{ $pengaduan->deskripsi }}</dd>
                    </dl>
                </div>
                <div class="col-md-6">
                    <dl>
                        <dt>Bukti Pengaduan</dt>
                        <dd><a href="" terget="popup"
                            onclick="window.open('{{ url("public/$pengaduan->bukti") }}','popup','width=800,height=600'); return false;"><button
                            class="btn btn-dark"><i class="fa fa-eye"> Lihat  </i></button></a></dd>
                    </dl>
                </div>
            </div>      
        </div>
    </div>

</x-module.pegawai-unitkerja>