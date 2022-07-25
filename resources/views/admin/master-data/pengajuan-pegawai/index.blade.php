{{-- <x-module.admin>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Pengajuan Surat Aktif
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <th width="30px">No</th>
                    <th width="150px">Status</th>
                    <th width="100px">Aksi</th>
                    <th>Nama Pengajuan</th>
                    <th>Tanggal Pengajuan</th>
                </thead>
                <tbody>
                    @foreach ($list_pengajuanbaru as $PengajuanBaru)
                        @if($PengajuanBaru->status == 1)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>
                                <div class="btn-group">   
                                    <form action="{{url('setuju', $PengajuanBaru->id)}}" method="post">
                                        @csrf
                                        @method("put")
                                        <button class="btn btn-success"> <b>Setuju</b></button>
                                    </form>

                                    <form action="{{url('ditolak', $PengajuanBaru->id)}}" method="post">
                                        @csrf
                                        @method("put")
                                        <button class="btn btn-danger"> <b>Ditolak</b></button>
                                    </form>   
                                </div>
                            </td>
                            <td>
								<div class="btn-group">
                                    <a href="#" class="btn btn-warning"> Lihat </a>
                                    <a href="#" class="btn btn-danger"> Hapus </a>    
                                </div>
							</td>
                            <td>{{$PengajuanBaru->nama_pengajuan}}</td>
                            <td>{{$PengajuanBaru->tanggal_pengajuan}}</td>                          
                        </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.admin> --}}