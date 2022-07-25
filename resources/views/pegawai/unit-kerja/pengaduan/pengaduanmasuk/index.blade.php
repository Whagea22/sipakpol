<x-module.pegawai-unitkerja>

    <div class="card">
        <div class="card-header card-success card-outline">
            <div class="card-title">
                Masuk
            </div>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <th width="30px">No</th>
                    <th width="120px">Aksi</th>
                    <th>Keterangan</th>
                    <th width="175px">Tanggal Pengaduan</th>
                    <th width="175px">Pengirim</th>
                </thead>
                <tbody>
                    @php
                        $no=1;

                    @endphp
                    {{-- @dd($list_pengaduan->Pengaduan) --}}
                    @foreach ($list_pengaduan as $PengaduanAd)
                    @if ($PengaduanAd->id_pegawai__pengaduan  === auth()->user()->id)
                    <tr>
                        <td>
                            {{$no ++}}
                        </td>
                        <td>
                            <div class="btn-group">
                                @include('components.template.utils.delete3', ['url' => url('pegawai/unit-kerja/pengaduan/pengaduanmasuk', $PengaduanAd->id)])
                            </div>
                        </td>
                        <td>{{$PengaduanAd->keterangan}}</td>
                        <td>{{$PengaduanAd->created_at}}</td>
                        <td>Staff Administrasi</td>
                    </tr>
                    @endif
                    @endforeach
                </body>
            </table>
        </div>
    </div>

</x-module.pegawai-unitkerja>
