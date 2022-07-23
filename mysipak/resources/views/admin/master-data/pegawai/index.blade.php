<x-module.admin>
    <div class="card">
        <div class="card-header card-success card-outline">
            <div class="card-title">
                Data Pegawai
            </div>
            <a href="{{ url('admin/master-data/pegawai/create') }}" class="float-right btn btn-primary"><i class="fa fa-plus"></i> Tambah Data Pegawai</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <th width='30px'>No</th>
                    <th width='100px'>Aksi</th>
                    <th width="175px">NIP</th>
                    <th>NIDN</th>
                    <th>Nama</th>
                </thead>
                <tbody>
                    @foreach ($list_pegawai as $pegawai)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>
                                <div class="btn-group">
                                    <x-template.button.info-button url="admin/master-data/pegawai"
                                                                    id="{{ $pegawai->id }}" />
                                    <x-template.button.edit-button url="admin/master-data/pegawai"
                                                                    id="{{ $pegawai->id }}" />
                                    @include('components.template.utils.delete', ['url' => url('admin/master-data/pegawai', $pegawai->id)])
                                </div>
                            </td>
                            <td>NIP. {{$pegawai->nip}}</td>
                            <td>NIDN. {{$pegawai->nidn}}</td>
                            <td>{{$pegawai->nama}}, {{$pegawai->gelar_belakang}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.admin>
