<x-module.admin>
    <x-template.button.back-button url="admin/master-data/arsip/surat-keluar" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah Surat Keluar
            </div>
        </div>
        <div class="card-body">
            <form action="{{url('admin/master-data/arsip/surat-keluar')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama Pegawai yang dituju<a href="" style="text-decoration: none" class="text-danger">*</a></label>
                            <select name="id_admin__pegawai" class="form-control">
                                @foreach ($list_pegawai as $pegawai)
                                    <option value="{{ $pegawai->id }}">{{ $pegawai->nama }}, {{ $pegawai->gelar_belakang }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama Surat<a href="" style="text-decoration: none" class="text-danger">*</a></label>
                            <select name="nama_pengajuan" class="form-control" id="nama_pengajuan">
                                <option disabled selected>-Pilih Pengajuan-</option>
                                <option value="Asisten Ahli">Asisten Ahli</option>
                                <option value="Lektor 200">Lektor 200</option>
                                <option value="Lektor 300">Lektor 300</option>
                                <option value="Lektor Kepala 400 AK">Lektor Kepala 400 AK</option>
                                <option value="Lektor Kepala 550 AK">Lektor Kepala 550 AK</option>
                                <option value="Lektor Kepala 700 AK">Lektor Kepala 700 AK</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">File<a href="" style="text-decoration: none" class="text-danger">*</a></label>
                            <input type="file" class="form-control" name="file" id="file" accept="application/pdf,application/vnd.ms-excel">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Keterangan<a href="" style="text-decoration: none" class="text-danger">*</a></label>
                            <input type="text" name="keterangan" class="form-control">
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary float-right"><i class="fa fa-save"></i> Kirim </button>
            </form>
        </div>
    </div>
</x-module.admin>
