<x-module.pegawai-unitkerja>
    <x-template.button.back-button url="pegawai/unit-kerja/arsip/suratkeluar" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Edit Pengajuan Surat Keluar
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('pegawai/unit-kerja/arsip/suratkeluar', $pengajuanbaru->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">NAMA</label> <br>
                            {{auth()->user()->nama}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">UNIT KERJA</label> <br>
                            {{auth()->user()->unitkerja}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">NIDN</label> <br>
                            NIP. {{auth()->user()->nip}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Jabatan</label> <br>
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
                            <label for="" class="control-label">Printout NIDN</label>
                            <input type="file" class="form-control" name="printoutnidn" value="{{$pengajuanbaru->printoutnidn}}" accept="application/pdf,application/vnd.ms-excel">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Dokumen DUPAK</label>
                            <input type="file" class="form-control" name="docdupak" value="{{$pengajuanbaru->docdupak}}" accept="application/pdf,application/vnd.ms-excel">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">File Surat Lampiran</label>
                            <input type="file" class="form-control" name="file_lampiran" value="{{$pengajuanbaru->file_lampiran}}" accept="application/pdf,application/vnd.ms-excel">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">File Surat Pengantar</label>
                            <input type="file" class="form-control" name="file_surat" value="{{$pengajuanbaru->file_surat}}" accept="application/pdf,application/vnd.ms-excel">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Fc SK Jabatan Fungsional & SK Pangkat Terakhir</label>
                            <input type="file" class="form-control" name="skjabatan" value="{{$pengajuanbaru->skjabatan}}" accept="application/pdf,application/vnd.ms-excel">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Fotocopy Transkip S1/D4, S2/S3</label>
                            <input type="file" class="form-control" name="fctranskip" value="{{$pengajuanbaru->fctranskip}}" accept="application/pdf,application/vnd.ms-excel">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Fotocopy Ijazah</label>
                            <input type="file" class="form-control" name="fcijazah" value="{{$pengajuanbaru->fcijazah}}" accept="application/pdf,application/vnd.ms-excel">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Fotocopy SK Pengangkatan Dosen Tetap</label>
                            <input type="file" class="form-control" name="skpengangkatan" value="{{$pengajuanbaru->skpengangkatan}}" accept="application/pdf,application/vnd.ms-excel">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">SK Penyesuaian Ruang & Pegawai</label>
                            <input type="file" class="form-control" name="skpenyesuaian" value="{{$pengajuanbaru->skpenyesuaian}}" accept="application/pdf,application/vnd.ms-excel">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Lembar Pernyataan Hasil Validasi Karya Ilmiah</label>
                            <input type="file" class="form-control" name="pernyataanhasilkarya" value="{{$pengajuanbaru->pernyataanhasilkarya}}" accept="application/pdf,application/vnd.ms-excel">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Surat Pernyataan Karya Ilmiah</label>
                            <input type="file" class="form-control" name="pernyataankarya" value="{{$pengajuanbaru->pernyataankarya}}" accept="application/pdf,application/vnd.ms-excel">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Bukti Online Penelitian Yang Telah Dipublikasi</label>
                            <input type="text" class="form-control" name="linkkarya" value="{{$pengajuanbaru->linkkarya}}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama Penerbit, Nama Buku / Karya</label>
                            <input type="text" class="form-control" name="buktipenelitian" value="{{$pengajuanbaru->buktipenelitian}}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Karya Ilmiah (Asli)</label>
                            <input type="file" class="form-control" name="karyailmiah" value="{{$pengajuanbaru->karyailmiah}}" accept="application/pdf,application/vnd.ms-excel">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Sasaran Kinerja / (SKP)</label>
                            <input type="file" class="form-control" name="sasarankinerja" value="{{$pengajuanbaru->sasarankinerja}}" accept="application/pdf,application/vnd.ms-excel">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Status</label>
                            <select name="status" class="form-control" id="status" value="{{$pengajuanbaru->status}}">
                                <option disabled selected>Pilih Status Pengajuan</option>
                                <option value="1">Pengajuan Baru</option>
                            </select>
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
                                        @error('book_chapter')
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
