<x-module.pegawai-unitkerja>
    <x-template.button.back-button url="pegawai/unit-kerja/pengajuan-selesai" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
              Pengajuan Selesai
            </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <dl>
                <dt>Nama Pengajuan</dt>
                <dd>{{ $PengajuanBaru->nama_pengajuan }} </dd>
                <dt>Tanggal Pengajuan</dt>
                <dd>{{ $PengajuanBaru->tanggal_pengajuan }} </dd>
              </dl>
            </div>
            <div class="col-md-6">
              <dl>
                <dt>Nama Penerbit, Nama Buku / Karya Ilmiah </dt>
                <dd>{{ $PengajuanBaru->buktipenelitian }} </dd>
                <dt>Link Karya Ilmiah</dt>
                <dd>{{ $PengajuanBaru->linkkarya }} </dd>
              </dl>
            </div>
          </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Berkas File
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-dataTable table-striped" data-sort>
                        <thead>
                            <th width="30px">No</th>
                            <th>Nama File</th>
                            <th width="100px">File</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td> 1 </td>
                                <td> Surat Lampiran<a href="" style="text-decoration: none" class="text-danger">*</a> </td>
                                <td>
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal-lg"><i class="fa fa-info"></i>
                                        Lihat
                                    </button>
                                <td>
                                    <div class="modal fade" id="modal-lg">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h4 class="modal-title">Surat Lampiran</h4>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                                <embed style="width: 100%; height: 400px" src="{{ url("public/$PengajuanBaru->file_surat") }}" type="application/pdf">
                                            </div>

                                          </div>
                                          <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> 2 </td>
                                <td> Surat Pengantar<a href="" style="text-decoration: none" class="text-danger">*</a> </td>
                                <td>
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal-lg1"><i class="fa fa-info"></i>
                                        Lihat
                                    </button>
                                <td>
                                    <div class="modal fade" id="modal-lg1">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h4 class="modal-title">Surat Pengantar</h4>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                                <embed style="width: 100%; height: 400px" src="{{ url("public/$PengajuanBaru->file_lampiran") }}" type="application/pdf">
                                            </div>

                                          </div>
                                          <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> 3 </td>
                                <td> Printout NIDN<a href="" style="text-decoration: none" class="text-danger">*</a> </td>
                                <td>
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal-lg2"><i class="fa fa-info"></i>
                                        Lihat
                                    </button>
                                <td>
                                    <div class="modal fade" id="modal-lg2">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h4 class="modal-title">Printout NIDN</h4>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                                <embed style="width: 100%; height: 400px" src="{{ url("public/$PengajuanBaru->printoutnidn") }}" type="application/pdf">
                                            </div>

                                          </div>
                                          <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> 4 </td>
                                <td> Dokumen Dupak<a href="" style="text-decoration: none" class="text-danger">*</a> </td>
                                <td>
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal-lg3"><i class="fa fa-info"></i>
                                        Lihat
                                    </button>
                                <td>
                                    <div class="modal fade" id="modal-lg3">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h4 class="modal-title">Dokumen Dupak</h4>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                                <embed style="width: 100%; height: 400px" src="{{ url("public/$PengajuanBaru->docdupak") }}" type="application/pdf">
                                            </div>

                                          </div>
                                          <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> 5 </td>
                                <td> Fotocopy SK Jabatan Fungsional </td>
                                <td>
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal-lg4"><i class="fa fa-info"></i>
                                        Lihat
                                    </button>
                                <td>
                                    <div class="modal fade" id="modal-lg4">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h4 class="modal-title">Fotocopy SK Jabatan Fungsional</h4>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                                <embed style="width: 100%; height: 400px" src="{{ url("public/$PengajuanBaru->skjabatan") }}" type="application/pdf">
                                            </div>

                                          </div>
                                          <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> 6 </td>
                                <td> Fotocopy SK Pangkat Terakhir </td>
                                <td>
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal-lg5"><i class="fa fa-info"></i>
                                        Lihat
                                    </button>
                                <td>
                                    <div class="modal fade" id="modal-lg5">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h4 class="modal-title">Fotocopy SK Pangkat Terakhir</h4>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                                <embed style="width: 100%; height: 400px" src="{{ url("public/$PengajuanBaru->skpengangkatanter") }}" type="application/pdf">
                                            </div>

                                          </div>
                                          <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> 7 </td>
                                <td> Fotocopy Transkip D4/S1, S2/S3<a href="" style="text-decoration: none" class="text-danger">*</a> </td>
                                <td>
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal-lg6"><i class="fa fa-info"></i>
                                        Lihat
                                    </button>
                                <td>
                                    <div class="modal fade" id="modal-lg6">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h4 class="modal-title">Fotocopy Transkip S1/D4, S2/S3</h4>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                                <embed style="width: 100%; height: 400px" src="{{ url("public/$PengajuanBaru->fctranskip") }}" type="application/pdf">
                                            </div>

                                          </div>
                                          <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> 8 </td>
                                <td> Fotocopy Ijazah<a href="" style="text-decoration: none" class="text-danger">*</a> </td>
                                <td>
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal-lg7"><i class="fa fa-info"></i>
                                        Lihat
                                    </button>
                                <td>
                                    <div class="modal fade" id="modal-lg7">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h4 class="modal-title">Fotocopy Ijazah</h4>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                                <embed style="width: 100%; height: 400px" src="{{ url("public/$PengajuanBaru->fcijazah") }}" type="application/pdf">
                                            </div>

                                          </div>
                                          <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> 9 </td>
                                <td> Fotocopy SK Pengangkatan Dosen Tetap<a href="" style="text-decoration: none" class="text-danger">*</a> </td>
                                <td>
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal-lg8"><i class="fa fa-info"></i>
                                        Lihat
                                    </button>
                                <td>
                                    <div class="modal fade" id="modal-lg8">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h4 class="modal-title">Fotocopy SK Pengangkatan Dosen Tetap</h4>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                                <embed style="width: 100%; height: 400px" src="{{ url("public/$PengajuanBaru->skpengangkatan") }}" type="application/pdf">
                                            </div>

                                          </div>
                                          <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> 10 </td>
                                <td> SK Penyesuaian Ruangan & Pegawai<a href="" style="text-decoration: none" class="text-danger">*</a> </td>
                                <td>
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal-lg9"><i class="fa fa-info"></i>
                                        Lihat
                                    </button>
                                <td>
                                    <div class="modal fade" id="modal-lg9">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h4 class="modal-title">SK Penyesuaian Ruang & Pegawai</h4>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                                <embed style="width: 100%; height: 400px" src="{{ url("public/$PengajuanBaru->skpenyesuaian") }}" type="application/pdf">
                                            </div>

                                          </div>
                                          <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> 11 </td>
                                <td> Lembar Pernyataan Hasil Validasi Karya Ilmiah<a href="" style="text-decoration: none" class="text-danger">*</a> </td>
                                <td>
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal-lg11"><i class="fa fa-info"></i>
                                        Lihat
                                    </button>
                                <td>
                                    <div class="modal fade" id="modal-lg11">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h4 class="modal-title">Lembar Pernyataan Hasil Validasi Karya Ilmiah</h4>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                                <embed style="width: 100%; height: 400px" src="{{ url("public/$PengajuanBaru->skpenyesuaian") }}" type="application/pdf">
                                            </div>

                                          </div>
                                          <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> 12 </td>
                                <td> Surat Pernyataan Karya Ilmiah<a href="" style="text-decoration: none" class="text-danger">*</a> </td>
                                <td>
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal-lg12"><i class="fa fa-info"></i>
                                        Lihat
                                    </button>
                                <td>
                                    <div class="modal fade" id="modal-lg12">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h4 class="modal-title">Surat Pernyataan Karya Ilmiah</h4>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                                <embed style="width: 100%; height: 400px" src="{{ url("public/$PengajuanBaru->pernyataankarya") }}" type="application/pdf">
                                            </div>

                                          </div>
                                          <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> 13 </td>
                                <td> Karya Ilmiah ( Asli )<a href="" style="text-decoration: none" class="text-danger">*</a> </td>
                                <td>
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal-lg13"><i class="fa fa-info"></i>
                                        Lihat
                                    </button>
                                <td>
                                    <div class="modal fade" id="modal-lg13">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h4 class="modal-title">Karya Ilmiah ( Asli )</h4>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                                <embed style="width: 100%; height: 400px" src="{{ url("public/$PengajuanBaru->karyailmiah") }}" type="application/pdf">
                                            </div>

                                          </div>
                                          <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> 14 </td>
                                <td> Lembar Peer Review ( Buku )<a href="" style="text-decoration: none" class="text-danger">*</a> </td>
                                <td>
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal-lg23"><i class="fa fa-info"></i>
                                        Lihat
                                    </button>
                                </td>
                                <td>
                                    <div class="modal fade" id="modal-lg23">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h4 class="modal-title">Lembar Peer Review ( Buku )</h4>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                                <embed style="width: 100%; height: 400px" src="{{ url("public/$PengajuanBaru->buku") }}" type="application/pdf">
                                            </div>

                                          </div>
                                          <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> 15 </td>
                                <td> Lembar Review ( Prosiding )<a href="" style="text-decoration: none" class="text-danger">*</a> </td>
                                <td>
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal-lg23a"><i class="fa fa-info"></i>
                                        Lihat
                                    </button>
                                </td>
                                <td>
                                    <div class="modal fade" id="modal-lg23a">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h4 class="modal-title">Lembar Review ( Prosiding )</h4>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                                <embed style="width: 100%; height: 400px" src="{{ url("public/$PengajuanBaru->prosiding") }}" type="application/pdf">
                                            </div>

                                          </div>
                                          <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> 16 </td>
                                <td> Lembar Peer Review ( Jurnal Ilmiah )<a href="" style="text-decoration: none" class="text-danger">*</a> </td>
                                <td>
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal-lg23b"><i class="fa fa-info"></i>
                                        Lihat
                                    </button>
                                </td>
                                <td>
                                    <div class="modal fade" id="modal-lg23b">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h4 class="modal-title">Lembar Peer Review ( Jurnal Ilmiah )</h4>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                                <embed style="width: 100%; height: 400px" src="{{ url("public/$PengajuanBaru->jurnalilmiah") }}" type="application/pdf">
                                            </div>

                                          </div>
                                          <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> 17 </td>
                                <td> Lembar Peer Review ( PATEN )<a href="" style="text-decoration: none" class="text-danger">*</a> </td>
                                <td>
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal-lg23c"><i class="fa fa-info"></i>
                                        Lihat
                                    </button>
                                </td>
                                <td>
                                    <div class="modal fade" id="modal-lg23c">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h4 class="modal-title">Lembar Peer Review ( PATEN )</h4>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                                <embed style="width: 100%; height: 400px" src="{{ url("public/$PengajuanBaru->paten") }}" type="application/pdf">
                                            </div>

                                          </div>
                                          <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> 18 </td>
                                <td> Lembar Peer Review ( Book Chapter )<a href="" style="text-decoration: none" class="text-danger">*</a> </td>
                                <td>
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal-lg23d"><i class="fa fa-info"></i>
                                        Lihat
                                    </button>
                                </td>
                                <td>
                                    <div class="modal fade" id="modal-lg23d">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h4 class="modal-title">Lembar Peer Review ( Book Chapter )</h4>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                                <embed style="width: 100%; height: 400px" src="{{ url("public/$PengajuanBaru->bookchapter") }}" type="application/pdf">
                                            </div>

                                          </div>
                                          <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> 19 </td>
                                <td> Sasaran Kinerja / SKP<a href="" style="text-decoration: none" class="text-danger">*</a> </td>
                                <td>
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal-lg15"><i class="fa fa-info"></i>
                                        Lihat
                                    </button>
                                <td>
                                    <div class="modal fade" id="modal-lg15">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h4 class="modal-title">Sasaran Kinerja</h4>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                                <embed style="width: 100%; height: 400px" src="{{ url("public/$PengajuanBaru->sasarankinerja") }}" type="application/pdf">
                                            </div>

                                          </div>
                                          <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="col-md-12">
                      <div class="form-group">
                          <label for="" class="control-label">Keterangan</label>
                          <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
                      </div>
                  </div>

                </div>
            </div>
        </div>
    </div>

</x-module.pegawai-unitkerja>
