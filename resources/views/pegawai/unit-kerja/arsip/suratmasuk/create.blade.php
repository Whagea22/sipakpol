<x-module.pegawai-unitkerja>
                <x-template.button.back-button url="pegawai/unit-kerja/arsip/suratmasuk" />
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Tambah Arsip Surat Masuk
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{url('pegawai/unit-kerja/pengajuan-baru')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">NAMA</label> <br>
                                        -
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">NAMA UNIT KERJA</label> <br>
                                        -
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">NAMA PENGAJUAN</label>
                                        <input type="text" class="form-control" name="nama_pengajuan" accept="application/pdf,application/vnd.ms-excel">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Tanggal PENGAJUAN</label>
                                        <input type="date" class="form-control" name="tanggal_pengajuan" accept="application/pdf,application/vnd.ms-excel">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Printout NIDN</label>
                                        <input type="file" class="form-control" name="printoutnidn" accept="application/pdf,application/vnd.ms-excel">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Dokumen DUPAK</label>
                                        <input type="file" class="form-control" name="docdupak" accept="application/pdf,application/vnd.ms-excel">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">File Surat Lampiran</label>
                                        <input type="file" class="form-control" name="file_lampiran" accept="application/pdf,application/vnd.ms-excel">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">File Surat Pengantar</label>
                                        <input type="file" class="form-control" name="file_surat" accept="application/pdf,application/vnd.ms-excel">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Fotocopy SK Jabatan Fungsional</label>
                                        <input type="file" class="form-control" name="skjabatan" accept="application/pdf,application/vnd.ms-excel">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Fotocopy SK Pangkat Terakhir</label>
                                        <input type="file" class="form-control" name="skpengangkatanter" accept="application/pdf,application/vnd.ms-excel">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Fotocopy Transkip S1/D4, S2/S3</label>
                                        <input type="file" class="form-control" name="fctranskip" accept="application/pdf,application/vnd.ms-excel">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Fotocopy Ijazah</label>
                                        <input type="file" class="form-control" name="fcijazah" accept="application/pdf,application/vnd.ms-excel">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Fotocopy SK Pengangkatan Dosen Tetap</label>
                                        <input type="file" class="form-control" name="skpengangkatan" accept="application/pdf,application/vnd.ms-excel">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">SK Penyesuaian Ruang & Pegawai</label>
                                        <input type="file" class="form-control" name="skpenyesuaian" accept="application/pdf,application/vnd.ms-excel">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Lembar Pernyataan Hasil Validasi Karya Ilmiah</label>
                                        <input type="file" class="form-control" name="pernyataanhasilkarya" accept="application/pdf,application/vnd.ms-excel">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Surat Pernyataan Karya Ilmiah</label>
                                        <input type="file" class="form-control" name="pernyataankarya" accept="application/pdf,application/vnd.ms-excel">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Bukti Online Penelitian Yang Telah Dipublikasi</label>
                                        <input type="file" class="form-control" name="buktipenelitian" accept="application/pdf,application/vnd.ms-excel">
                                    </div>
                                </div>

                                <!-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Nama Penerbit, Nama Buku / Karya</label>
                                        <input type="link" class="form-control" name="">
                                    </div>
                                </div> -->

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Karya Ilmiah (Asli)</label>
                                        <input type="file" class="form-control" name="karyailmiah" accept="application/pdf,application/vnd.ms-excel">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Lembar Review</label>
                                        <input type="file" class="form-control" name="lembarreview" accept="application/pdf,application/vnd.ms-excel">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Sasaran Kinerja</label>
                                        <input type="file" class="form-control" name="sasarankinerja" accept="application/pdf,application/vnd.ms-excel">
                                    </div>
                                </div>
                            </div>
                            <button class="btn-primary float-right"><i class="fa fa-save"></i> Simpan </button>
                        </form>
                    </div>
                </div>
</x-module.pegawai-unitkerja>