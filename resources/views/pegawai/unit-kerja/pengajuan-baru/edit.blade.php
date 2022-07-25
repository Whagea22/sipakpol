<x-module.pegawai-unitkerja>
    <x-template.button.back-button url="pegawai/unit-kerja/pengajuan-baru" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Edit Pengajuan Surat Baru
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('pegawai/unit-kerja/pengajuan-baru', $pengajuanbaru->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama</label> <br>
                            {{auth()->user()->nama}},{{auth()->user()->gelar_belakang}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Unit Kerja / Program Studi</label> <br>
                            {{auth()->user()->unitkerja}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Pendidikan Tertinggi</label> <br>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">NIP</label> <br>
                            NIP. {{auth()->user()->nip}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Jabatan Fungsional / TMT</label> <br>
                            {{auth()->user()->jabatan}}
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama Pengajuan</label>
                            <input type="text" class="form-control" name="nama_pengajuan" value="{{$pengajuanbaru->nama_pengajuan}}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Tanggal Pengajuan</label>
                            <input type="date" class="form-control" name="tanggal_pengajuan" value="{{$pengajuanbaru->tanggal_pengajuan}}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Printout NIDN<a href="" style="text-decoration: none" class="text-danger">*</a></label>
                            <input type="file" class="form-control" name="printoutnidn" id="printoutnidn" accept="application/pdf,application/vnd.ms-excel"
                            >
                            <div class="text-danger" for="printoutnidn">
                                <p style="font-size: 13px">Wajib Di Isi*</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Dokumen DUPAK<a href="" style="text-decoration: none" class="text-danger">*</a></label>
                            <input type="file" class="form-control" name="docdupak" id="docdupak" accept="application/pdf,application/vnd.ms-excel"
                            >
                            <div class="text-danger" for="docdupak">
                                <p style="font-size: 13px">Wajib Di Isi*</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">File Surat Lampiran<a href="" style="text-decoration: none" class="text-danger">*</a></label>
                            <input type="file" class="form-control" name="file_lampiran" id="file_lampiran" accept="application/pdf,application/vnd.ms-excel">
                            <div class="text-danger" for="file_lampiran">
                                <p style="font-size: 13px">Wajib Di Isi*</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">File Surat Pengantar<a href="" style="text-decoration: none" class="text-danger">*</a></label>
                            <input type="file" class="form-control" name="file_surat" id="file_surat" accept="application/pdf,application/vnd.ms-excel">
                            <div class="text-danger" for="file_surat">
                                <p style="font-size: 13px">Wajib Di Isi*</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Fc SK Jabatan Fungsional & SK Pangkat Terakhir</label>
                            <input type="file" class="form-control" name="skjabatan" accept="application/pdf,application/vnd.ms-excel">
                        </div>
                    </div>

                    {{-- <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Fotocopy SK Pangkat Terakhir</label>
                            <input type="file" class="form-control" name="skpengangkatanter" accept="application/pdf,application/vnd.ms-excel">
                        </div>
                    </div> --}}

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Fotocopy Transkip S1/D4, S2/S3<a href="" style="text-decoration: none" class="text-danger">*</a></label>
                            <input type="file" class="form-control" name="fctranskip" id="fctranskip" accept="application/pdf,application/vnd.ms-excel">
                            <div class="text-danger" for="fctranskip">
                                <p style="font-size: 13px">Wajib Di Isi*</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Fotocopy Ijazah<a href="" style="text-decoration: none" class="text-danger">*</a></label>
                            <input type="file" class="form-control" name="fcijazah" id="fcijazah" accept="application/pdf,application/vnd.ms-excel">
                            <div class="text-danger" for="fcijazah">
                                <p style="font-size: 13px">Wajib Di Isi*</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Fotocopy SK Pengangkatan Dosen Tetap<a href="" style="text-decoration: none" class="text-danger">*</a></label>
                            <input type="file" class="form-control" name="skpengangkatan" id="skpengangkatan" accept="application/pdf,application/vnd.ms-excel">
                            <div class="text-danger" for="skpengangkatan">
                                <p style="font-size: 13px">Wajib Di Isi*</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">SK Penyesuaian Ruang & Pegawai<a href="" style="text-decoration: none" class="text-danger">*</a></label>
                            <input type="file" class="form-control" name="skpenyesuaian" id="skpenyesuaian" accept="application/pdf,application/vnd.ms-excel">
                            <div class="text-danger" for="skpenyesuaian">
                                <p style="font-size: 13px">Wajib Di Isi*</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Lembar Pernyataan Hasil Validasi Karya Ilmiah<a href="" style="text-decoration: none" class="text-danger">*</a></label>
                            <input type="file" class="form-control" name="pernyataanhasilkarya" id="pernyataanhasilkarya" accept="application/pdf,application/vnd.ms-excel">
                            <div class="text-danger" for="pernyataanhasilkarya">
                                <p style="font-size: 13px">Wajib Di Isi*</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Surat Pernyataan Karya Ilmiah<a href="" style="text-decoration: none" class="text-danger">*</a></label>
                            <input type="file" class="form-control" name="pernyataankarya" id="pernyataankarya" accept="application/pdf,application/vnd.ms-excel">
                            <div class="text-danger" for="pernyataankarya">
                                <p style="font-size: 13px">Wajib Di Isi*</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Bukti Online Penelitian Yang Telah Dipublikasi<a href="" style="text-decoration: none" class="text-danger">*</a></label>
                            <input type="text" class="form-control" name="linkkarya" id="linkkarya">
                            <div class="text-danger" for="linkkarya">
                                <p style="font-size: 13px">Wajib Di Isi*</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama Penerbit, Nama Buku / Karya<a href="" style="text-decoration: none" class="text-danger">*</a></label>
                            <input type="text" class="form-control" name="buktipenelitian" id="buktipenelitian"
                            >
                            <div class="text-danger" for="buktipenelitian">
                                <p style="font-size: 13px">Wajib Di Isi*</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Karya Ilmiah (Asli)<a href="" style="text-decoration: none" class="text-danger">*</a></label>
                            <input type="file" class="form-control" name="karyailmiah" id="karyailmiah" accept="application/pdf,application/vnd.ms-excel">
                            <div class="text-danger" for="karyailmiah">
                                <p style="font-size: 13px">Wajib Di Isi*</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Sasaran Kinerja / (SKP)<a href="" style="text-decoration: none" class="text-danger">*</a></label>
                            <input type="file" class="form-control" name="sasarankinerja" id="sasarankinerja" accept="application/pdf,application/vnd.ms-excel">
                            <div class="text-danger" for="sasarankinerja">
                                <p style="font-size: 13px">Wajib Di Isi*</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Status<a href="" style="text-decoration: none" class="text-danger">*</a></label>
                            <select name="status" class="form-control" id="status">
                                <option disabled selected>Pilih Status Pengajuan</option>
                                <option value="1">Pengajuan Baru</option>
                            </select>
                            <div class="text-danger" for="status">
                                <p style="font-size: 13px">Wajib Di Isi*</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                    <div class="card-header text-center">
                            <h6><u><b>Lembar Peer Review</b></u><a href="" style="text-decoration: none" class="text-danger">*</a></h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Buku</label>
                                        <input type="file" class="form-control @error('buku') is-invalid @enderror" name="buku" id="buku" accept="application/pdf,application/vnd.ms-excel">
                                        @error('buku')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Book Chapter</label>
                                        <input type="file" class="form-control @error('bookchapter') is-invalid @enderror" name="bookchapter" id="bookchapter" accept="application/pdf,application/vnd.ms-excel">
                                        @error('bookchapter')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Jurnal Ilmiah</label>
                                        <input type="file" class="form-control @error('jurnalilmiah') is-invalid @enderror" name="jurnalilmiah" id="jurnalilmiah" accept="application/pdf,application/vnd.ms-excel">
                                        @error('jurnalilmiah')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Paten</label>
                                        <input type="file" class="form-control @error('paten') is-invalid @enderror" name="paten" id="paten" accept="application/pdf,application/vnd.ms-excel">
                                        @error('paten')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Prosiding</label>
                                        <input type="file" class="form-control @error('prosiding') is-invalid @enderror" name="prosiding" id="prosiding" accept="application/pdf,application/vnd.ms-excel">
                                        @error('prosiding')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary float-right"><i class="fa fa-save"></i> SIMPAN </button>
            </form>
        </div>
    </div>

</x-module.pegawai-unitkerja>
