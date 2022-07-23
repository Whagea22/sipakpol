<x-module.admin>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Pegawai</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="">
                        <div class="card">
                            <div class="card-body">
                                {{-- @foreach ($data_pegawai as $pegawai)
                                @if ($pegawai->nama == auth()->user()->nama) --}}
                                    <img src="{{ url("public/$pegawai->profile") }}"
                                        class="img-fluid profile-pic-container" style="width: 100px%">
                                {{-- @endif
                                @endforeach --}}
                                {{-- <input type="file" class="form-control" name="profile" accept=".jpg, .png, .jpeg"> --}}
                            </div>
                        </div>
                        <x-template.button.back-button url="admin/master-data/pegawai" />
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="card card-default">
                    <div class="card-header">
                        <div class="card-title">Data Pegawai</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <dl>
                                    <dt>Nama</dt>
                                    <dd>{{ $pegawai->nama }}, {{ $pegawai->gelar_belakang }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <dl>
                                    <dt>NIP</dt>
                                    <dd>{{ $pegawai->nip }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <dl>
                                    <dt>NIDN</dt>
                                    <dd>{{ $pegawai->nidn }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <dl>
                                    <dt>Tempat Tanggal Lahir</dt>
                                    <dd>{{ $pegawai->tempatlahir }}, {{ $pegawai->tanggallahir }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <dl col-md-6>
                                    <dt>Agama</dt>
                                    <dd>{{ $pegawai->agama }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <dl>
                                    <dt>Jenis Kelamin</dt>
                                    <dd>{{ $pegawai->jeniskelamin }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <dl>
                                    <dt>Email</dt>
                                    <dd>{{ $pegawai->email }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <dl>
                                    <dt>Unit Kerja</dt>
                                    <dd>{{ $pegawai->unitkerja }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <dl>
                                    <dt>Jabatan</dt>
                                    <dd>{{ $pegawai->jabatan }}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.admin>
