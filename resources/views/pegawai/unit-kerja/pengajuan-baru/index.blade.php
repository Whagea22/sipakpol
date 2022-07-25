<x-module.pegawai-unitkerja>
    <div class="card">
        <div class="card-header card-success card-outline">
            <div class="card-title">
                Pengajuan Surat Baru
            </div>
            <a href="{{ url('pegawai/unit-kerja/pengajuan-baru/create') }}" class="float-right btn btn-primary"><i class="fa fa-plus"></i> Tambah Pengajuan Baru </a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <th width="30px">No</th>
                    <th width="75px">Aksi</th>
                    <th>Nama Pengajuan</th>
                    <th width="150px">Tanggal Pengajuan</th>
                    <th width="100px">Status</th>
                </thead>
                <tbody>
                    @php
                        $no=1;

                    @endphp
                    @foreach ($list_pengajuanbaru as $PengajuanBaru)
                    @if($PengajuanBaru->status == 3)
                        <tr>
                            <td>
                                {{$no ++}}
                            </td>
                            <td>
                                <div class="btn-group">
                                    <x-template.button.info-button url="pegawai/unit-kerja/pengajuan-baru"
                                                                    id="{{ $PengajuanBaru->id }}" />
                                    <x-template.button.edit-button url="pegawai/unit-kerja/pengajuan-baru"
                                                                    id="{{ $PengajuanBaru->id }}" />
                                    {{-- @include('components.template.utils.delete', ['url' => url('pegawai/unit-kerja/pengajuan-baru', $PengajuanBaru->id)]) --}}
                                </div>
                            </td>
                            <td>{{$PengajuanBaru->nama_pengajuan}}</td>
                            <td>{{$PengajuanBaru->tanggal_pengajuan}}</td>
                            <td>
                                @if ($PengajuanBaru->status == 3)
                                    <p><strong><a href="" class="text-danger"> Ditolak </a></strong></p>
                                @endif
                            </td>
                        </tr>
                    @endif
                    {{-- @if($PengajuanBaru->status == 2)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>
                                <div class="btn-group">
                                    <x-template.button.info-button url="pegawai/unit-kerja/pengajuan-baru"
                                                                    id="{{ $PengajuanBaru->id }}" />
                                    <x-template.button.edit-button url="pegawai/unit-kerja/pengajuan-baru"
                                                                    id="{{ $PengajuanBaru->id }}" />
                                    <x-template.button.delete-button url="pegawai/unit-kerja/pengajuan-baru"
                                                                    id="{{ $PengajuanBaru->id }}" />
                                </div>
                            </td>
                            <td>{{$PengajuanBaru->nama_pengajuan}}</td>
                            <td>{{$PengajuanBaru->tanggal_pengajuan}}</td>
                            <td> <a class='btn btn-success'><b> Selesai </b></a></td>
                        </tr>
                    @endif --}}
                    @if($PengajuanBaru->status == 1)
                        <tr>
                            <td>
                                {{$no ++}}
                            </td>
                            <td>
                                <div class="btn-group">
                                    <x-template.button.info-button url="pegawai/unit-kerja/pengajuan-baru"
                                                                    id="{{ $PengajuanBaru->id }}" />
                                    <x-template.button.edit-button url="pegawai/unit-kerja/pengajuan-baru"
                                                                    id="{{ $PengajuanBaru->id }}" />
                                </div>
                            </td>
                            <td>{{$PengajuanBaru->nama_pengajuan}}</td>
                            <td>{{$PengajuanBaru->tanggal_pengajuan}}</td>
                            <td>
                                @if ($PengajuanBaru->status == 1)
                                    <p><strong> Diproses </strong></p>
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
