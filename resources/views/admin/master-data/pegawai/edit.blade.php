<x-module.admin>
    <x-template.button.back-button url="admin/master-data/pegawai" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Edit Data Pegawai
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/master-data/pegawai', $pegawai->id) }}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">NIP</label>
                            <input type="text" name="nip" id="" value="{{$pegawai->nip}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">NIDN</label>
                            <input type="text" name="nidn" id="" value="{{$pegawai->nidn}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">NUP</label>
                            <input type="text" name="nup" id="" value="{{$pegawai->nup}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">NAMA</label>
                            <input type="text" name="nama" id="" value="{{$pegawai->nama}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Gelar Depan</label>
                            <input type="text" name="gelar_depan" id="" value="{{$pegawai->gelar_depan}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Gelar Belakang</label>
                            <input type="text" name="gelar_belakang" id="" value="{{$pegawai->gelar_belakang}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Tempat Lahir</label>
                            <input type="text" name="tempatlahir" id="" value="{{$pegawai->tempatlahir}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Tanggal Lahir</label>
                            <input type="date" name="tanggallahir" id="" value="{{$pegawai->tanggallahir}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Agama</label>
                            <select name="agama" value="{{$pegawai->agama}}" class="form-control">
                                <option disabled selected>Pilih Agama</option>
                                <option value="islam">Islam</option>
                                <option value="kristen">kristen</option>
                                <option value="katolik">katolik</option>
                                <option value="hindu">hindu</option>
                                <option value="buddha">buddha</option>
                                <option value="konghucu">konghucu</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Jenis Kelamin</label>
                            <select name="jeniskelamin" value="{{$pegawai->jenis_kelamin}}" class="form-control">
                                <option disabled selected>Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Unit Kerja</label>
                            <input type="text" name="unitkerja" id="" value="{{$pegawai->unitkerja}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Jabatan</label>
                            <input type="text" name="jabatan" id="" value="{{$pegawai->jabatan}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Profile</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="profile" accept=".png , .jpg" />
                                    <label class="custom-file-label" for="">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Username</label>
                            <input type="text" name="username" id="" value="{{$pegawai->username}}" class="form-control">
                        </div>
                    </div> --}}
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">EMAIL</label>
                            <input type="text" name="email" id="" value="{{$pegawai->email}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">PASSWORD</label>
                            <input type="password" name="password" id="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-primary float-right">SIMPAN</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-module.admin>
