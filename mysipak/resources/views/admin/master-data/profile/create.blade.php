<x-module.admin>

    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Edit Profile
            </div>
        </div>
        <div class="card-body">
            <form action="{{url('#')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Profile</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="file" accept="application/pdf,application/vnd.ms-excel">
                                    <label class="custom-file-label" for="">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>      
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">NIDN</label>
                            <input type="text" class="form-control" name="harga">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Unit Kerja</label>
                            <input type="text" class="form-control" name="berat">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Jenis Kelamin</label>
                            <input type="text" class="form-control" name="stock">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Agama</label>
                            <input type="text" class="form-control" name="stock">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Email</label>
                            <input type="text" class="form-control" name="stock">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Password</label>
                            <input type="text" class="form-control" name="stock">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Alamat</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">No Telepon</label>
                            <input type="text" class="form-control" name="stock">
                        </div>
                    </div>
                </div>                     
              <button class="btn-dark float-right"><i class="fa fa-save"></i> Simpan </button>
            </form>
        </div>
    </div>
</x-module.admin>