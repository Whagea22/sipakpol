<x-module.pegawai-unitkerja>
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Format Surat
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <th width="40px">No</th>
                                <th>Judul</th>
                                <th width="240px">Aksi</th>
                            </thead>               
                            <tbody>
                                @foreach ($list_format as $Format)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$Format->nama}}</td>
                                        <td style="text-align: center;">
                                            {{-- <a href="" terget="popup"
                                            onclick="window.open('{{ url("public/$Format->file") }}','popup','width=800,height=600'); return false;"><button
                                            class="btn btn-danger"> Download  <i class="fa fa-file-pdf"></i></button></a> --}}
                                            <a href="" terget="popup"
                                            onclick="window.open('{{ url("public/$Format->file_word") }}','popup','width=800,height=600'); return false;"><button
                                            class="btn btn-primary"><i class="fa fa-download"></i> Download  </button></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
</x-module.pegawai-unitkerja>