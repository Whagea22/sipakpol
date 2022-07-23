<x-module.admin>

    <div class="card">
        <div class="card-header card-info card-outline">
            <div class="card-title">
                PENGADUAN
            </div>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <th width="30px">No</th>
                    <th width="100px">Bukti Pengaduan</th>
                    <th>Nama Pengaduan</th>
                    <th>Nama Pengaju</th>
                    <th>Deskripsi Pengajuan</th>
                </thead>
                <tbody>
                    @foreach ($list_pengaduan as $Pengaduan)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>
                                <div class="btn-group">
                                    {{-- <a href="{{url('admin/master-data/pengaduan', $Pengaduan->id)}}" class="btn btn-warning"> Lihat </a> --}}
                                    <button type="button" class="btn btn-warning float-right" data-toggle="modal"
                                        data-target="#modal-lg{{ auth()->user()->id }}">
                                        lihat
                                    </button>
                                    <div class="modal fade" id="modal-lg{{ auth()->user()->id }}">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h4 class="modal-title">Bukti Pengaduan {{ $Pengaduan->nama }}</h4>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                                <embed style="width: 100%; height: 400px" src="{{ url("public/$Pengaduan->bukti") }}" type="application/pdf">
                                            </div>
                                          </div>
                                        </div>
                                    </div>

                                    <a href="{{url('admin/master-data/pengaduan/create',)}}" class="btn btn-info"> Tanggapi </a>
                                    {{-- <button type="button" class="btn btn-info float-right" data-toggle="modal"
                                        data-target="#modal-lg">
                                            Tanggapi
                                    </button> --}}
                                    {{-- <div class="modal fade" id="modal-lg">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Tanggapi</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Nama Pengaju</label>
                                                                <input type="text" name="nip" id=""
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Tanggal Pengajuan</label>
                                                                <input type="date" class="form-control" name="tanggal_pengajuan">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Keterangan</label>
                                                                <textarea name="deskripsi" class="form-control"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" data-dismiss="modal"> Keluar </button>
                                                    <button class="btn btn-primary"> Simpan </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    @include('components.template.utils.delete4', ['url' => url('admin/master-data/pengaduan', $Pengaduan->id)])
                                </div>
                            </td>
                            <td>{{$Pengaduan->nama}}</td>
                            <td>{{$Pengaduan->pegawai->nama}},{{ $Pengaduan->pegawai->gelar_belakang }}</td>
                            <td>{{$Pengaduan->deskripsi}}</td>
                        </tr>
                    @endforeach
                </body>
            </table>
        </div>
    </div>

</x-module.admin>
