<x-module.pegawai-unitkerja>
    <div class="card">
        <div class="card-header card-info card-outline">
            <div class="card-title">
                Pengajuan Surat Aktif
            </div>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <th width="30px">No</th>
                    <th width="90px">Aksi</th>
                    <th>Nama Pengajuan</th>
                    <th width="150px">Tanggal Pengajuan</th>
                    <th width="100px">Status</th>
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
                                <x-template.button.info2-button url="pegawai/unit-kerja/pengajuan-aktif"
                                                                    id="{{ $PengajuanBaru->id }}" />
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
