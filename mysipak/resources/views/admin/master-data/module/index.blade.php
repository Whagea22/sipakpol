<x-module.admin>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Data Module
            </div>
            <a href="{{ url('admin/master-data/module/create') }}" class="float-right btn btn-primary">Tambah Data Module</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <th width="30px">No</th>
                    <th width='100px'>Aksi</th>
                    <th>Nama Module</th>
                    <th>Tag</th>
                    <th>Jumlah Pegawai</th>
                </thead>
                <tbody>
                    @foreach ($list_module as $module)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>
                            <div class="btn-group">
                                <x-template.button.info-button url="admin/master-data/module"
                                                                id="{{ $module->id }}" />
                                <x-template.button.edit-button url="admin/master-data/module"
                                                                id="{{ $module->id }}" />
                                @include('components.template.utils.delete', ['url' => url('admin/master-data/module', $module->id)])
                            </div>
                        </td>
                        <td>{{$module->name}}</td>
                        <td>{{$module->tag}}</td>
                        <td>{{$module->role_count}} Orang</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.admin>
