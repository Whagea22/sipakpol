<x-module.admin>
    <div class="card card-danger card-outline">
        <div class="card-header">
            <div class="card-title">
                Surat Keluar
            </div>
            <a href="{{ url('admin/master-data/arsip/surat-keluar/create') }}" class="float-right btn btn-primary">Tambah Surat Keluar</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <th width="30px">No</th>
                    <th width="75px">Aksi</th>
                    <th>Nama Pengaju</th>
                    <th width="200px">Nama Surat</th>
                    <th width="150px">Tanggal Pengajuan</th>
                </thead>
                <tbody>
                    @foreach ($list_pengajuan as $Pengajuan)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>
								<div class="btn-group">
                                    <a href="" terget="popup"
                                            onclick="window.open('{{ url("public/$Pengajuan->file") }}','popup','width=800,height=600'); return false;"><button
                                            class="btn btn-dark"><i class="fa fa-eye"></i> lihat </button></a>
                                </div>
							</td>
                            <td>{{$Pengajuan->pegawai->nama}}, {{ $Pengajuan->pegawai->gelar_belakang }}</td>
                            <td>{{$Pengajuan->nama_pengajuan}}</td>
                            <td>{{$Pengajuan->created_at}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.admin>
