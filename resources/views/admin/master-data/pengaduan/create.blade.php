<x-module.admin>
    <x-template.button.back-button url="admin/master-data/pengaduan" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tanggapi
            </div>
        </div>
        <div class="card-body">
            <form action="{{url('admin/master-data/pengaduan', $Pengaduan->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama Pegawai yang dituju</label>
                            <select name="id_pegawai__pengaduan" class="form-control">
                                @foreach ($list_pegawai as $Pegawai)
                                    <option value="{{ $Pegawai->id }}">{{ $Pegawai->nama }}, {{ $Pegawai->gelar_belakang }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="control-label">Keterangan</label>
                            <textarea name="keterangan" class="form-control"></textarea>
                        </div>
                        {{-- <div class="form-group">
                            <label for="" class="control-label">Deskripsi</label>
                            <input type="text" class="form-control" name="linkkarya">
                        </div> --}}
                    </div>
                </div>
                <button class="btn btn-primary float-right"><i class="fa fa-save"></i> Kirim </button>
            </form>
        </div>
    </div>
</x-module.admin>
