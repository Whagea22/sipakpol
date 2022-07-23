<x-module.pegawai-unitkerja>
                <div class="card">
                    <div class="card-header card-success card-outline">
                        <div class="card-title">
                            Pengajuan Surat Selesai
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <th width="30px">No</th>
                                <th>Nama Pengajuan</th>
                                <th>Tanggal Pengajuan</th>
                                <th width="90px">Aksi</th>
                                <th width="80px">Status</th>
                            </thead>
                            <tbody>
                                @php
                                    $no=1;

                                @endphp
                                @foreach ($list_pengajuanbaru as $PengajuanBaru)
                                @if($PengajuanBaru->status == 2)
                                    <tr>
                                        <td>
                                            {{$no ++}}
                                        </td>
                                        <td>{{$PengajuanBaru->nama_pengajuan}}</td>
                                        <td>{{$PengajuanBaru->tanggal_pengajuan}}</td>
                                        <td>
                                            <a href="{{url('pegawai/unit-kerja/pengajuan-selesai', $PengajuanBaru->id)}}" class="btn btn-dark"><i class="fa fa-eye"></i> Lihat </a>
                                        </td>
                                        <td>
                                            @if ($PengajuanBaru->status == 2)
                                                <p><strong><a href="" class="text-success"> Diterima </a></strong></p>
                                            @endif
                                        </td>
                                    </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
</x-module.pegawai-unitkerja>
