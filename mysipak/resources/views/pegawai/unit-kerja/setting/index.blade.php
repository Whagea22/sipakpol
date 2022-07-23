<x-module.pegawai-unitkerja>
    <div class="card">
        <div class="card-header card-dark card-outline">
            <div class="card-title">
                Setting
            </div>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">User ID</label>
                            <input type="text" name="nip" id="" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Password</label>
                            <input type="text" name="nama" id="" class="form-control">
                        </div>
                    </div>
                </div>
                <button class="btn-dark float-right"><i class="fa fa-save"></i> Simpan </button>
            </form>
        </div>
    </div>
</x-module.pegawai-unitkerja>