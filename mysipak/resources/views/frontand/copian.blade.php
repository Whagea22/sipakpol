<x-module.superadmin>
  <x-template.button.back-button url="superadmin/master-data/mahasiswa" />
  <div class="card">
      <div class="card-header">
          <div class="card-title">Tambah Data Mahasiswa</div>
      </div>
      <div class="card-body">
          <form action="{{ url('superadmin/master-data/mahasiswa') }}" method="post">
              @csrf
              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="" class="control-label">Nama</label>
                          <input type="text" name="nama" class="form-control">
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="" class="control-label">NIM</label>
                          <input type="text" name="nim" class="form-control">
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="" class="control-label">Program Studi</label>
                          <select name="program_studi" class="form-control">
                              <option disabled selected>Pilih Program Studi</option>
                              <option value="D3 Agro Industri">D3 Agro Industri</option>
                              <option value="D3 Teknologi Informasi">D3 Teknologi Informasi</option>
                              <option value="D3 Teknik Elektro">D3 Teknik Elektro</option>
                              <option value="D4 Perancangan Jalan dan Jembatan">D4 Perancangan Jalan dan Jembatan</option>
                              <option value="D3 Teknologi Pengolahan Hasil Perkebunan">D3 Teknologi Pengolahan Hasil Perkebunan</option>
                              <option value="D3 Teknik Pertambangan ">D3 Teknik Pertambangan </option>
                              <option value="D4 Budidaya Tanaman Perkebunan">D4 Budidaya Tanaman Perkebunan</option>
                              <option value="D3 Perawatan dan Perbaikan Mesin">D3 Perawatan dan Perbaikan Mesin</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="" class="control-label">Angkatan</label>
                          <input type="text" name="angkatan" class="form-control">
                          {{-- <select name="angkatan" class="form-control">
                              <option disabled selected>Angkatan</option>
                              <option value="2024">2024</option>
                              <option value="2023">2023</option>
                              <option value="2022">2022</option>
                              <option value="2021">2021</option>
                              <option value="2020">2020</option>
                              <option value="2019">2019</option>
                              <option value="2018">2018</option>
                              <option value="2017">2017</option>
                          </select> --}}
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="" class="control-label">Agama</label>
                          <select name="agama" class="form-control">
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
                          <select name="jenis_kelamin" class="form-control">
                              <option disabled selected>Pilih Jenis Kelamin</option>
                              <option value="Laki-laki">Laki-laki</option>
                              <option value="Perempuan">Perempuan</option>
                          </select>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="" class="control-label">Tempat Lahir</label>
                          <input type="text" name="tempat_lahir" class="form-control">
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="" class="control-label">tanggal lahir</label>
                          <input type="date" name="tanggal_lahir" class="form-control">
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="" class="control-label">Password</label>
                          <input type="password" name="password" class="form-control">
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <button class="btn btn-dark float-right"><i class="fas fa-save"> Simpan</i></button>
                  </div>
              </div>
          </form>
      </div>
  </div>
</x-module.superadmin>

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
                            <label for="" class="control-label">NIP/NUP</label>
                            <input type="text" name="nip" id="" value="{{$pegawai->nip}}" class="form-control">
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
                                    <input type="file" class="custom-file-input" name="profile" value="{{$pegawai->profile}}" accept=".png , .jpg" />
                                    <label class="custom-file-label" for="">Choose file</label>
                                </div>
                            </div>      
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Username</label>
                            <input type="text" name="username" id="" value="{{$pegawai->username}}" class="form-control">
                        </div>
                    </div>
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