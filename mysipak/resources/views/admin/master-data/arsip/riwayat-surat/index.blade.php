<x-module.admin>
    <div class="card">
        <div class="card-header card-secondary card-outline">
            <div class="card-title">
                Riwayat Surat
            </div>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <th width="160px">Aksi</th>
                    <th width="75px">Status</th>
                    <th width="200px">Nama Pengajuan</th>
                    <th width="150px">Tanggal Pengajuan</th>
                    <th>Nama Pengaju</th>
                </thead>
                <tbody>
                    @foreach ($list_pengajuanbaru as $PengajuanBaru)

                        <tr>
                            <td>
                                <div class="btn-group">
                                    <x-template.button.info2-button url="admin/master-data/arsip/riwayat-surat"
                                                                    id="{{ $PengajuanBaru->id }}" />
                                    @include('components.template.utils.delete3', ['url' => url('admin/master-data/arsip/riwayat-surat', $PengajuanBaru->id)])
                                </div>
                            </td>
                            <td>
                                @if ($PengajuanBaru->status == 1)
                                    <p><strong> Diproses </strong></p>
                                @endif
                                @if ($PengajuanBaru->status == 2)
                                    <p><strong> Diterima </strong></p>
                                @endif
                                @if ($PengajuanBaru->status == 3)
                                    <p><strong> Ditolak </strong></p>
                                @endif
                            </td>
                            <td>{{$PengajuanBaru->nama_pengajuan}}</td>
                            <td>{{$PengajuanBaru->tanggal_pengajuan}}</td>
                            <td>{{$PengajuanBaru->pegawai->nama}}, {{ $PengajuanBaru->pegawai->gelar_belakang }}</td>
                        </tr>

                    @endforeach
                    @foreach ($list_pengajuan as $Pengajuan)

                        <tr>
                            <td>
                                <div class="btn-group">
                                    <x-template.button.info2-button url="admin/master-data/arsip/riwayat-surat"
                                                                    id="{{ $Pengajuan->id }}" />
                                    @include('components.template.utils.delete3', ['url' => url('admin/master-data/arsip/riwayat-surat', $Pengajuan->id)])
                                </div>
                            </td>
                            <td>
                                <b>Surat Keluar</b>
                            </td>
                            <td>{{$Pengajuan->keterangan}}</td>
                            <td>{{$Pengajuan->created_at}}</td>
                            <td>{{$Pengajuan->pegawai->nama}}, {{ $Pengajuan->pegawai->gelar_belakang }}</td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.admin>
