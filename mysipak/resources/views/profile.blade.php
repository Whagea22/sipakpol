<x-module.profile>

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <form action="{{ url('update-pegawai', auth()->user()->id) }}" method="post" enctype="multipart/form-data">

        <div class="container">
            <div class="row">
                @csrf
                @method('PUT')
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="">
                        <div class="card">
                            <div class="card-body">
                                    <img src="{{ url("public/$pegawai->profile") }}"
                                        class="img-fluid profile-pic-container" style="width: 100px%">
                                {{-- <input type="file" class="form-control" name="profile" accept=".jpg, .png, .jpeg"> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <div class="card-title">Data Pegawai</div>
                            <button type="button" class="btn btn-warning float-right" data-toggle="modal"
                                data-target="#modal-lg{{ auth()->user()->id }}"><i class="fa fa-edit"></i>
                                Edit
                            </button>

                            <div class="modal fade" id="modal-lg{{ auth()->user()->id }}">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Edit Profile</h4>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class="control-label">NIP</label>
                                                        <input type="text" name="nip" id=""
                                                            class="form-control" value="{{ auth()->user()->nip }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class="control-label">NIDN</label>
                                                        <input type="text" name="nidn" id=""
                                                            class="form-control" value="{{ auth()->user()->nidn }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class="control-label">NAMA</label>
                                                        <input type="text" name="nama" id=""
                                                            class="form-control" value="{{ auth()->user()->nama }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class="control-label">Gelar Depan</label>
                                                        <input type="text" name="gelar_depan" id=""
                                                            class="form-control" value="{{ auth()->user()->gelar_depan }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class="control-label">Gelar Belakang</label>
                                                        <input type="text" name="gelar_belakang" id=""
                                                            class="form-control" value="{{ auth()->user()->gelar_belakang }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class="control-label">Tempat Lahir</label>
                                                        <input type="text" name="tempatlahir" id=""
                                                            class="form-control" value="{{ auth()->user()->tempatlahir }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class="control-label">Tanggal
                                                            Lahir</label>
                                                        <input type="date" name="tanggallahir" id=""
                                                            class="form-control" value="{{ auth()->user()->tanggallahir }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class="control-label">Agama</label>
                                                        <select name="agama" class="form-control"
                                                            value="{{ auth()->user()->agama }}">
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
                                                        <label for="" class="control-label">Jenis
                                                            Kelamin</label>
                                                        <select name="jeniskelamin" class="form-control"
                                                            value="{{ auth()->user()->jeniskelamin }}">
                                                            <option disabled selected>Pilih Jenis Kelamin</option>
                                                            <option value="Laki-laki">Laki-laki</option>
                                                            <option value="Perempuan">Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class="control-label">Unit Kerja</label>
                                                        <input type="text" name="unitkerja" id=""
                                                            class="form-control" value="{{ auth()->user()->unitkerja }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class="control-label">Jabatan</label>
                                                        <input type="text" name="jabatan"
                                                            class="form-control" value="{{ auth()->user()->jabatan }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class="control-label">Profile</label>
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input"
                                                                    name="profile" accept=".png , .jpg" />
                                                                <label class="custom-file-label" for="">Choose
                                                                    file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="" class="control-label">Password</label>
                                                        <input type="password" class="form-control" name="password">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">

                                            <button class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <dl>
                                        <dt>Nama</dt>
                                        <dd>{{ auth()->user()->nama }}, {{ auth()->user()->gelar_belakang }}</dd>
                                    </dl>
                                </div>
                                <div class="col-md-6">
                                    <dl>
                                        <dt>NIP</dt>
                                        <dd>{{ auth()->user()->nip }}</dd>
                                    </dl>
                                </div>
                                <div class="col-md-6">
                                    <dl>
                                        <dt>NIDN</dt>
                                        <dd>{{ auth()->user()->nidn }}</dd>
                                    </dl>
                                </div>
                                <div class="col-md-6">
                                    <dl>
                                        <dt>Tempat Tanggal Lahir</dt>
                                        <dd>{{ auth()->user()->tempatlahir }}, {{ auth()->user()->tanggallahir }}
                                        </dd>
                                    </dl>
                                </div>
                                <div class="col-md-6">
                                    <dl col-md-6>
                                        <dt>Agama</dt>
                                        <dd>{{ auth()->user()->agama }}</dd>
                                    </dl>
                                </div>
                                <div class="col-md-6">
                                    <dl>
                                        <dt>Jenis Kelamin</dt>
                                        <dd>{{ auth()->user()->jeniskelamin }}</dd>
                                    </dl>
                                </div>
                                <div class="col-md-6">
                                    <dl>
                                        <dt>Email</dt>
                                        <dd>{{ auth()->user()->email }}</dd>
                                    </dl>
                                </div>
                                <div class="col-md-6">
                                    <dl>
                                        <dt>Unit Kerja</dt>
                                        <dd>{{ auth()->user()->unitkerja }}</dd>
                                    </dl>
                                </div>
                                <div class="col-md-6">
                                    <dl>
                                        <dt>Jabatan</dt>
                                        <dd>{{ auth()->user()->jabatan }}</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </form>
    <div class="modal fade slide-right" id="modalConfirmDelete" tabindex="-1" role="dialog"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content-wrapper">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i
                            class="pg-close fs-14"></i></button>
                    <div class="container-xs-height full-height">
                        <div class="row-xs-height">
                            <div class="modal-body col-xs-height col-middle text-center">
                                <h5 class="text-danger">Yakin Menghapus Data Ini?</h5>
                                <br>
                                <small class="text-default">Data yang telah dihapus tidak akan dapat
                                    dikembalikan</small>
                                <br>
                                <br>
                                <a href="#" id="btn_delete_conf" data-method="delete"
                                    data-token="g7HpW0oJVrmyyGnXqsPHGAULWi8nEycYH6uNy62c"
                                    class="btn btn-danger btn-block">Continue</a>
                                <button type="button" class="btn btn-default btn-block"
                                    data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



</x-module.profile>
