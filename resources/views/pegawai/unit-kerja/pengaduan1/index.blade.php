<x-module.pegawai-unitkerja>

    <div class="card">
        <div class="card-header card-danger card-outline">
            <div class="card-title">
                Pengaduan Keluar
            </div>
            <a href="{{ url('pegawai/unit-kerja/pengaduan/create') }}" class="float-right btn btn-primary"><Tambah class="fa fa-plus"> Tambah Pengaduan Keluar </i></a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <th width="30px">No</th>
                    <th>Nama</th>
                    <th width="125px">Bukti Pengaduan</th>
                    <th>Keterangan</th>
                </thead>
                <tbody>
                    @foreach ($list_pengaduan as $Pengaduan)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$Pengaduan->nama}}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{url('pegawai/unit-kerja/pengaduan', $Pengaduan->id )}}" class="btn btn-dark"><i class="fa fa-eye"> Lihat </i></a>
                                </div>
                            </td>
                            <td>{{$Pengaduan->deskripsi}}</td>
                        </tr>
                    @endforeach
                </body>
            </table>
        </div>
    </div>
    <div class="card">
        <div class="card-header card-success card-outline">
            <div class="card-title">
                Pengaduan Masuk
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped dataTable" data-sort>
                <thead>
                    <th width="30px">No</th>
                    <th>Nama</th>
                    <th width="175px">Bukti Pengaduan</th>
                    <th>Deskripsi Pengajuan</th>
                </thead>
                <tbody>
                    {{-- @foreach ($list_pengaduan as $Pengaduan)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$Pengaduan->nama}}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{url('pegawai/unit-kerja/pengaduan', $Pengaduan->id )}}" class="btn btn-info"><i class="fa fa-eye"> Lihat </i></a>

                                    <a href="#" class="btn btn-danger"><i class="fa fa-trash"> Hapus </i></a> 
                                </div>
                            </td>
                            <td>{{$Pengaduan->deskripsi}}</td>
                        </tr>
                    @endforeach --}}
                </body>
            </table>
        </div>
    </div>

</x-module.pegawai-unitkerja>