<x-module.pegawai-unitkerja>
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            CETAK LAPORAN
                        </div>
                    </div>
                    <div class="card-body">
                            @csrf
                            <div class="row">        
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">TANGGAL AWAL</label>
                                        <input type="date" class="form-control" name="tanggal_pengajuan">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">TANGGAL AKHIR</label>
                                        <input type="date" class="form-control" name="tanggal_pengajuan">
                                    </div>
                                </div>
                            </div>
                            <button class="btn-dark float-right"><i class="fa fa-save"></i> DOWNLOAD LAPORAN</button>
                    </div>
                </div>
</x-module.pegawai-unitkerja>