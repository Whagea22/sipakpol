<x-module.admin>
    <x-template.button.back-button url="admin/master-data/pengaduan" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Pegawai
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <dt>Nama Pegawai</dt>
                        <dd>{{ $pengaduan->pegawai->nama }}</dd>
                    </div>
                    <div class="form-group">
                        <dt>NIP/NUP</dt>
                        <dd>NIDN. {{ $pengaduan->pegawai->nip }}</dd>
                    </div>
                    <div class="form-group">
                        <dt>Tanggal Pengaduan</dt>
                        <dd>{{ $pengaduan->created_at }}</dd>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <dt>Bukti Pengaduan</dt>
                        <dd><a href="" terget="popup"
                            onclick="window.open('{{ url("public/$pengaduan->bukti") }}','popup','width=800,height=600'); return false;"><button
                            class="btn btn-dark"><i class="fa fa-eye"> Lihat  </i></button></a></dd>
                    </div>
                    <div class="form-group">
                        <dt>Keterangan</dt>
                        <dd>{{ $pengaduan->deskripsi }}</dd>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.admin>