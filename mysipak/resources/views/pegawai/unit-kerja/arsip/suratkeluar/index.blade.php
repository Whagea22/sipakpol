<x-module.pegawai-unitkerja>
                <div class="card">
                    <div class="card-header card-danger card-outline">
                        <div class="card-title">
                            Arsip Surat Keluar
                        </div>
                        <div class="btn-group float-right">
                            <a href="{{url('pegawai/unit-kerja/pengajuan-baru/create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Surat Keluar </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <th width="30px">No</th>
                                <th width="100px">Aksi</th>
                                <th width="120px">Tanggal Surat</th>
                                <th width="250px">Nama Surat</th>
                                <th>Pengirim</th>
                            </thead>
                            <tbody>
                                @php
                                    $no=1;

                                @endphp
                                @foreach ($list_pengajuanbaru as $PengajuanBaru)
                                    <tr>
                                        <td>
                                            {{$no ++}}
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <x-template.button.info-button url="pegawai/unit-kerja/arsip/suratkeluar"
                                                                                id="{{ $PengajuanBaru->id }}" />
                                                <x-template.button.edit-button url="pegawai/unit-kerja/pengajuan-baru"
                                                                                id="{{ $PengajuanBaru->id }}" />
                                                @include('components.template.utils.delete', ['url' => url('pegawai/unit-kerja/arsip/suratkeluar', $PengajuanBaru->id)])
                                            </div>
                                        </td>
                                        <td>{{$PengajuanBaru->tanggal_pengajuan}}</td>
                                        <td>{{$PengajuanBaru->nama_pengajuan}}</td>
                                        <td>{{$PengajuanBaru->pegawai->nama}}, {{$PengajuanBaru->pegawai->gelar_belakang}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
</x-module.pegawai-unitkerja>
