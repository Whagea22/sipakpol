<x-module.pegawai-unitkerja>
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Arsip Surat Keputusan
                        </div>
                        <div class="btn-group float-right">
                            <a href="{{url('pegawai/unit-kerja/arsip/suratkeputusan/report')}}" class="btn btn-dark"><i class="bi bi-file-earmark"></i> Cetak Laporan </a>
                            <a href="{{url('pegawai/unit-kerja/arsip/suratkeputusan/create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Surat Keputusan </a>   
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <th width="100px">Aksi</th>
                                <th>Tanggal Surat</th>
                                <th>Nama Surat</th>
                                <th>Pengirim</th>
                            </thead>
                            <tbody>
                                @foreach ($list_pengajuanbaru as $PengajuanBaru)
                                    <tr>
                                        <td>
                                            <div class="btn-group">
                                                <x-template.button.info-button url="pegawai/unit-kerja/pengajuan-aktif"
                                                                                id="{{ $PengajuanBaru->id }}" />
                                                <x-template.button.edit-button url="pegawai/unit-kerja/pengajuan-aktif"
                                                                                id="{{ $PengajuanBaru->id }}" />
                                                <x-template.button.delete-button url="pegawai/unit-kerja/pengajuan-aktif"
                                                                                id="{{ $PengajuanBaru->id }}" />     
                                            </div>
                                        </td>
                                        <td>{{$PengajuanBaru->tanggal_pengajuan}}</td>
                                        <td>{{$PengajuanBaru->nama_pengajuan}}</td>
                                        <td>{{$PengajuanBaru->pegawai->nama}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
</x-module.pegawai-unitkerja>