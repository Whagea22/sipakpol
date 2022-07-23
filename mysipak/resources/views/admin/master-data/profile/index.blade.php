<x-module.admin>

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="">
                    <div class="card">
                        <img src="{{ url('') }}" class="img-fluid profile-pic-container" style="width: 100%">
                        <a href="{{url('')}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit Profile </a>
                    </div>
                    <x-template.button.back-button url="pegawai/unit-kerja/dashboard" />
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="card card-default">
                    <div class="card-header">
                        <div class="card-title">Data Pegawai</div>
                            <a href="{{url('pegawai/unit-kerja/profile')}}" class="btn btn-primary btn-sm float-right"><i class="fa fa-edit"></i> Edit </a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <dl>
                                    <dt>Nama</dt>
                                    <dd>{{auth()->user()->nama}}</dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <dl>
                                    <dt>NIP/NUP</dt>
                                    <dd>{{auth()->user()->nip}}</dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <dl>
                                    <dt>Tempat Tanggal Lahir</dt>
                                    <dd>{{auth()->user()->tempatlahir}}, {{auth()->user()->tanggallahir}}</dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <dl col-md-6>
                                    <dt>Agama</dt>
                                    <dd>{{auth()->user()->agama}}</dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <dl>
                                    <dt>Jenis Kelamin</dt>
                                    <dd>{{auth()->user()->jeniskelamin}}</dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <dl>
                                    <dt>Email</dt>
                                    <dd>{{auth()->user()->email}}</dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <dl>
                                    <dt>Unit Kerja</dt>
                                    <dd>{{auth()->user()->unitkerja}}</dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <dl>
                                    <dt>Jabatan</dt>
                                    <dd>{{auth()->user()->jabatan}}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade slide-right" id="modalConfirmDelete" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content-wrapper">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i></button>
                        <div class="container-xs-height full-height">
                            <div class="row-xs-height">
                                <div class="modal-body col-xs-height col-middle text-center">
                                    <h5 class="text-danger">Yakin Menghapus Data Ini?</h5>
                                    <br>
                                    <small class="text-default">Data yang telah dihapus tidak akan dapat dikembalikan</small>
                                    <br>
                                    <br>
                                    <a href="#" id="btn_delete_conf" data-method="delete" data-token="g7HpW0oJVrmyyGnXqsPHGAULWi8nEycYH6uNy62c" class="btn btn-danger btn-block">Continue</a>
                                    <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-module.admin>


