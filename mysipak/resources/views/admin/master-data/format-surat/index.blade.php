<x-module.admin>
                <div class="card">
                    <div class="card-header card-warning card-outline">
                        <div class="card-title">
                            Format Surat
                        </div>
                        <a href="{{ url('admin/master-data/format-surat/create') }}" class="float-right btn btn-info"><i class="fa fa-plus"></i> Tambah Format Surat </a>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <th width="30px">No</th>
                                <th>Judul</th>
                                <th width="175px">Aksi</th>
                            </thead>               
                            <tbody>
                                @foreach ($list_format as $Format)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$Format->nama}}</td>
                                        <td>
                                            <div class="btn-group">
                                                {{-- <a href="{{url('admin/master-data/format-surat', $Format->id)}}" class="btn btn-info">Lihat Format</a> --}}
                                                <a href="" terget="popup"
                                                onclick="window.open('{{ url("public/$Format->file_word") }}','popup','width=800,height=600'); return false;"><button
                                                class="btn btn-dark"><i class="fa fa-eye"> Lihat </i></button></a>

                                                @include('components.template.utils.delete3', ['url' => url('admin/master-data/format-surat', $Format->id)])
                                             </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
</x-module.admin>