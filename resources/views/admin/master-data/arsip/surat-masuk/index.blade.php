<x-module.admin>
    <div class="card">
        <div class="card-header card-success card-outline">
            <div class="card-title">
                Surat Masuk
            </div>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    {{-- <th width="150px">Status</th> --}}
                    <th width="30px">No</th>
                    <th width="75px">Aksi</th>
                    <th width="200px">Nama Pengajuan</th>
                    <th>Nama Pengaju</th>
                    <th width="150px">Tanggal Pengajuan</th>
                </thead>
                <tbody>
                    @php
                        $no=1;
                    @endphp
                    @foreach ($list_pengajuanbaru as $PengajuanBaru)
                        @if($PengajuanBaru->status == 1)
                        <tr>
                            <td>
                                {{$no ++}}
                            </td>
                            <td>
                                <div class="btn-group">
                                    {{-- <a href="{{url('admin/master-data/arsip/surat-masuk/show', $PengajuanBaru->id )}}"  class="btn btn-dark"> Lihat </a> --}}
                                    <x-template.button.info2-button url="admin/master-data/arsip/surat-masuk"
                                                                    id="{{ $PengajuanBaru->id }}" />
                                </div>
                            </td>
                            <td>{{$PengajuanBaru->nama_pengajuan}}</td>
                            <td>{{$PengajuanBaru->pegawai->nama}}, {{ $PengajuanBaru->pegawai->gelar_belakang }}</td>
                            <td>{{$PengajuanBaru->created_at}}</td>
                        </tr>
                        @endif
                    @endforeach
            </table>
        </div>
    </div>
</x-module.admin>
