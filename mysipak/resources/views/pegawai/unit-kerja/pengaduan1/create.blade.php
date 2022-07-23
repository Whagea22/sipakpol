<x-module.pegawai-unitkerja>
    <x-template.button.back-button url="pegawai/unit-kerja/pengaduan" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah Pengaduan
            </div>
        </div>
        <div class="card-body">
            <form action="{{url('pegawai/unit-kerja/pengaduan')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">NAMA</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Bukti</label>
                            <input type="file" class="form-control" name="bukti" accept="application/pdf,application/vnd.ms-excel">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <button class="btn-primary float-right"><i class="fa fa-save"></i> Simpan </button>
            </form>
        </div>
    </div>
</x-module.pegawai-unitkerja>