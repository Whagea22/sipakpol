<x-module.pegawai-unitkerja>
                <div class="card">
                    <div class="card-header card-dark card-outline">
                        <div class="card-title">
                            Riwayat Pengajuan
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <th width="30px">No</th>
                                <th width="75px">Aksi</th>
                                <th>Nama Pengajuan</th>
                                <th>Tanggal Pengajuan</th>
                                <th width="75px">Status</th>
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
                                        <td>
                                            <div class="btn-group">
                                                <x-template.button.info-button url="pegawai/unit-kerja/riwayat-pengajuan"
                                                                                    id="{{ $PengajuanBaru->id }}" />
                                                @include('components.template.utils.delete', ['url' => url('pegawai/unit-kerja/riwayat-pengajuan', $PengajuanBaru->id)])
                                            </div>
                                        </td>
                                        <td>{{$PengajuanBaru->nama_pengajuan}}</td>
                                        <td>{{$PengajuanBaru->tanggal_pengajuan}}</td>
                                        <td>
                                            <p><strong><a href="" class="text-success"> Diterima </a></strong></p>
                                        </td>
                                    </tr>
                                @endif
                                @if($PengajuanBaru->status == 3)
                                    <tr>
                                        <td>
                                            {{$no ++}}
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <x-template.button.info-button url="pegawai/unit-kerja/riwayat-pengajuan"
                                                                                    id="{{ $PengajuanBaru->id }}" />
                                                @include('components.template.utils.delete', ['url' => url('pegawai/unit-kerja/riwayat-pengajuan', $PengajuanBaru->id)])
                                            </div>
                                        </td>
                                        <td>{{$PengajuanBaru->nama_pengajuan}}</td>
                                        <td>{{$PengajuanBaru->tanggal_pengajuan}}</td>
                                        <td>
                                            <p><strong><a href="" class="text-danger"> Ditolak </a></strong></p>
                                        </td>
                                    </tr>
                                @endif
                                    {{-- <tr>
                                        <td>
                                            <div class="btn-group">
                                                <x-template.button.info-button url="pegawai/unit-kerja/riwayat-pengajuan"
                                                                    id="{{ $PengajuanBaru->id }}" />
                                                @include('components.template.utils.delete', ['url' => url('pegawai/unit-kerja/riwayat-pengajuan', $PengajuanBaru->id)])
                                            </div>
                                        </td>
                                        <td>{{$PengajuanBaru->nama_pengajuan}}</td>
                                        <td>{{$PengajuanBaru->tanggal_pengajuan}}</td>
                                        <td>
                                            @if ($PengajuanBaru->status == 2)
                                                <p><strong> Diterima </strong></p>
                                            @endif
                                            @if ($PengajuanBaru->status == 3)
                                                <p><strong> Ditolak </strong></p>
                                             @endif
                                        </td>
                                    </tr> --}}
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
</x-module.pegawai-unitkerja>
