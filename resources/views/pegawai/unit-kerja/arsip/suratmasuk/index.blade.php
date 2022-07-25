<x-module.pegawai-unitkerja>
                <div class="card">
                    <div class="card-header card-warning card-outline">
                        <div class="card-title">
                            Arsip Surat Masuk
                        </div>
                        {{-- <div class="btn-group float-right">
                            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal-lg">
                                Cetak Laporan
                            </button>
                            <div class="modal fade" id="modal-lg">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Cetak Laporan</h4>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="control-label">Dari Tanggal</label>
                                                    <input type="date" name="tanggallahir" id=""
                                                        class="form-control" value="{{ auth()->user()->nip }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="control-label">Sampai Tanggal</label>
                                                    <input type="date" name="tanggallahir" id=""
                                                        class="form-control" value="{{ auth()->user()->tanggallahir }}">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button class="btn btn-primary">Save changes</button>
                                    </div>

                                  </div>
                                  <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                        </div> --}}
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <th width="30px">No</th>
                                <th width="30px">Aksi</th>
                                <th width="120px">Tanggal Surat</th>
                                <th>Nama Surat</th>
                                <th>Pengirim</th>
                            </thead>
                            <tbody>
                                @php
                                    $no=1;

                                @endphp
                                @foreach ($list_pengajuan as $Pengajuan)
                                @if (auth()->user()->id == $Pengajuan->id_admin__pegawai)

                                <tr>
                                    <td>
                                        {{$no ++}}
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <x-template.button.info-button url="pegawai/unit-kerja/arsip/suratmasuk"
                                            id="{{ $Pengajuan->id }}" />
                                            @include('components.template.utils.delete', ['url' => url('pegawai/unit-kerja/arsip/suratmasuk', $Pengajuan->id)])

                                        </div>
                                    </td>
                                    <td>{{$Pengajuan->created_at}}</td>
                                    <td>{{$Pengajuan->nama_pengajuan}}</td>
                                    <td> Staff Administrasi </td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
</x-module.pegawai-unitkerja>
