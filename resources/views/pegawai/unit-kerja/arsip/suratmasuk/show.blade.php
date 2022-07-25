<x-module.pegawai-unitkerja>
    <x-template.button.back-button url="pegawai/unit-kerja/arsip/suratmasuk" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
              Surat Masuk
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dl>
                        <dt>Nama Pengajuan</dt>
                        <dd>{{$Pengajuan->nama_pengajuan}}</dd>
                        <dt>Tanggal Pengajuan</dt> 
                        <dd>{{$Pengajuan->created_at}}</dd>
                        <dt>Keterangan</dt> 
                        <dd>{{$Pengajuan->keterangan}}</dd>
                    </dl>
                </div>
                <div class="col-md-6">
                    <dl>
                        <dt>File Surat</dt>
                        <dd>
                            <a href="" terget="popup"
                                            onclick="window.open('{{ url("public/$Pengajuan->file") }}','popup','width=800,height=600'); return false;"><button
                                            class="btn btn-dark"> Download <i class="fa fa-save"></i></button></a>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

</x-module.pegawai-unitkerja>