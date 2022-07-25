<x-module.pegawai-unitkerja>
                <x-template.button.back-button url="pegawai/unit-kerja/pengajuan-baru" />
                <div class="card">
                    <div class="card-header card-dark card-outline">
                        <div class="card-title">
                            Pengajuan Surat Baru
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Nama</label> <br>
                                    {{auth()->user()->nama}}, {{auth()->user()->gelar_belakang}}
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
                                    <label for="" class="control-label">NIDN</label> <br>
                                    NIDN. {{auth()->user()->nidn}}
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
                                    <label for="" class="control-label">Pendidikan Tertinggi</label> <br>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Jabatan Fungsional / TMT</label> <br>
                                    {{-- {{auth()->user()->jabatan}} --}} -
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-dark card-outline">
                    <div class="card-header text-center">
                        <h5>Semua field pengajuan yang bertanda(<a href="" style="text-decoration: none" class="text-danger">*</a>) wajib diisi</h5>
                        <h6>Untuk persyaratan pengajuan silakan unduh
                            {{-- <a href="" terget="popup"
                            onclick="window.open('{{ url() }}','popup','width=800,height=600'); return false;"><u>Disini</u></a> --}}
                            <a href="{{asset('public/format/PERSYARATAN_PENGAJUAN_PAK.pdf')}}" target="_blank"> Disini </a>
                        </h6>
                    </div>
                    <div class="card-body">
                        <form action="{{url('pegawai/unit-kerja/pengajuan-baru')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Nama Pengajuan<a href="" style="text-decoration: none" class="text-danger">*</a></label>
                                        <select name="nama_pengajuan" class="form-control @error('nama_pengajuan') is-invalid @enderror" id="nama_pengajuan">
                                            <option disabled selected>-Pilih Pengajuan-</option>
                                            <option value="Asisten Ahli">Asisten Ahli</option>
                                            <option value="Lektor 200">Lektor 200</option>
                                            <option value="Lektor 300">Lektor 300</option>
                                            <option value="Lektor Kepala 400 AK">Lektor Kepala 400 AK</option>
                                            <option value="Lektor Kepala 550 AK">Lektor Kepala 550 AK</option>
                                            <option value="Lektor Kepala 700 AK">Lektor Kepala 700 AK</option>
                                        </select>

                                        @error('nama_pengajuan')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Tanggal Pengajuan<a href="" style="text-decoration: none" class="text-danger">*</a></label>
                                        <input type="date" class="form-control @error('tanggal_pengajuan') is-invalid @enderror" name="tanggal_pengajuan" id="tanggal_pengajuan"
                                    >
                                        @error('tanggal_pengajuan')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Printout NIDN<a href="" style="text-decoration: none" class="text-danger">*</a></label>
                                        <input type="file" class="form-control @error('printoutnidn') is-invalid @enderror" name="printoutnidn" id="printoutnidn" accept="application/pdf,application/vnd.ms-excel"
                                        >
                                        @error('printoutnidn')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Dokumen DUPAK<a href="" style="text-decoration: none" class="text-danger">*</a></label>
                                        <input type="file" class="form-control @error('docdupak') is-invalid @enderror" name="docdupak" id="docdupak" accept="application/pdf,application/vnd.ms-excel"
                                        >
                                        @error('docdupak')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">File Surat Lampiran<a href="" style="text-decoration: none" class="text-danger">*</a></label>
                                        <input type="file" class="form-control @error('file_lampiran') is-invalid @enderror" name="file_lampiran" id="file_lampiran" accept="application/pdf,application/vnd.ms-excel">
                                        @error('file_lampiran')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">File Surat Pengantar<a href="" style="text-decoration: none" class="text-danger">*</a></label>
                                        <input type="file" class="form-control @error('file_surat') is-invalid @enderror" name="file_surat" id="file_surat" accept="application/pdf,application/vnd.ms-excel">
                                        @error('file_surat')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
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
                                        <label for="" class="control-label">Fc Transkip S1/D4, S2/S3<a href="" style="text-decoration: none" class="text-danger">*</a></label>
                                        <input type="file" class="form-control @error('fctranskip') is-invalid @enderror" name="fctranskip" id="fctranskip" accept="application/pdf,application/vnd.ms-excel">
                                        @error('fctranskip')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Fc Ijazah<a href="" style="text-decoration: none" class="text-danger">*</a></label>
                                        <input type="file" class="form-control @error('fcijazah') is-invalid @enderror" name="fcijazah" id="fcijazah" accept="application/pdf,application/vnd.ms-excel">
                                        @error('fcijazah')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Fc SK Pengangkatan Dosen Tetap / SK Dosen PNS<a href="" style="text-decoration: none" class="text-danger">*</a></label>
                                        <input type="file" class="form-control @error('skpengangkatan') is-invalid @enderror" name="skpengangkatan" id="skpengangkatan" accept="application/pdf,application/vnd.ms-excel">
                                        @error('skpengangkatan')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">SK Penyesuaian Ruang & Pegawai<a href="" style="text-decoration: none" class="text-danger">*</a></label>
                                        <input type="file" class="form-control @error('skpenyesuaian') is-invalid @enderror" name="skpenyesuaian" id="skpenyesuaian" accept="application/pdf,application/vnd.ms-excel">
                                        @error('skpenyesuaian')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Lembar Pernyataan Hasil Validasi Karya Ilmiah<a href="" style="text-decoration: none" class="text-danger">*</a></label>
                                        <input type="file" class="form-control @error('pernyataanhasilkarya') is-invalid @enderror" name="pernyataanhasilkarya" id="pernyataanhasilkarya" accept="application/pdf,application/vnd.ms-excel">
                                        @error('pernyataanhasilkarya')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Surat Pernyataan Keabsahan Karya Ilmiah<a href="" style="text-decoration: none" class="text-danger">*</a></label>
                                        <input type="file" class="form-control @error('pernyataankarya') is-invalid @enderror" name="pernyataankarya" id="pernyataankarya" accept="application/pdf,application/vnd.ms-excel">
                                        @error('pernyataankarya')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Bukti Online Penelitian Yang Telah Dipublikasi<a href="" style="text-decoration: none" class="text-danger">*</a></label>
                                        <input type="text" class="form-control @error('linkkarya') is-invalid @enderror" name="linkkarya" id="linkkarya">
                                        @error('linkkarya')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Nama Penerbit, Nama Buku / Karya<a href="" style="text-decoration: none" class="text-danger">*</a></label>
                                        <input type="text" class="form-control @error('buktipenelitian') is-invalid @enderror" name="buktipenelitian" id="buktipenelitian"
                                        >
                                        @error('buktipenelitian')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Karya Ilmiah (Asli)<a href="" style="text-decoration: none" class="text-danger">*</a></label>
                                        <input type="file" class="form-control @error('karyailmiah') is-invalid @enderror" name="karyailmiah" id="karyailmiah" accept="application/pdf,application/vnd.ms-excel">
                                        @error('karyailmiah')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Sasaran Kinerja / (SKP)<a href="" style="text-decoration: none" class="text-danger">*</a></label>
                                        <input type="file" class="form-control @error('sasarankinerja') is-invalid @enderror" name="sasarankinerja" id="sasarankinerja" accept="application/pdf,application/vnd.ms-excel">
                                        @error('sasarankinerja')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Status<a href="" style="text-decoration: none" class="text-danger">*</a></label>
                                        <select name="status" class="form-control @error('status') is-invalid @enderror" id="status">
                                            <option disabled selected>Pilih Status Pengajuan</option>
                                            <option value="1">Pengajuan Baru</option>
                                        </select>
                                        @error('status')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
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
