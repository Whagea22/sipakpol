<x-module.pegawai-unitkerja>

    <div class="card">
        <div class="card-header card-danger card-outline">
            <div class="card-title">
                Keluar
            </div>
            <a href="{{ url('pegawai/unit-kerja/pengaduan/pengaduankeluar/create') }}" class="float-right btn btn-primary"><Tambah class="fa fa-plus"> Tambah Pengaduan Keluar </i></a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <th width="30px">No</th>
                    <th>Judul Pengaduan</th>
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
                                    {{-- <a href="{{url('pegawai/unit-kerja/pengaduan/pengaduankeluar', $Pengaduan->id )}}" class="btn btn-dark"><i class="fa fa-eye"> Lihat </i></a> --}}
                                    <a href="" terget="popup"
                                    onclick="window.open('{{ url("public/$Pengaduan->bukti") }}','popup','width=800,height=600'); return false;"><button
                                    class="btn btn-dark"><i class="fa fa-eye"> Lihat  </i></button></a>
                                </div>
                            </td>
                            <td>{{$Pengaduan->deskripsi}}</td>
                        </tr>
                    @endforeach
                </body>
            </table>
        </div>
    </div>

</x-module.pegawai-unitkerja>
