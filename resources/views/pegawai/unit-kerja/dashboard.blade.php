<x-module.pegawai-unitkerja>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small card -->
          <div class="small-box">
            <div class="inner">
              <h5>Pengajuan Aktif</h5>
              <h5>-</h5>     
            </div>
            <a href="{{url('pegawai/unit-kerja/pengajuan-aktif')}}" class="small-box-footer bg-primary">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small card -->
          <div class="small-box">
            <div class="inner">
              <h5>Pengajuan Selesai</h5>
              <h5>-</h5>             
            </div>
            <a href="{{url('pegawai/unit-kerja/pengajuan-selesai')}}" class="small-box-footer bg-success">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small card -->
          <div class="small-box">
            <div class="inner">
              <h5>Surat Masuk</h5>
              <h5>-</h5>  
            </div>
            <a href="{{ url('pegawai/unit-kerja/arsip/suratmasuk') }}" class="small-box-footer bg-warning">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small card -->
          <div class="small-box">
            <div class="inner">
              <h5>Surat Keluar</h5>
              <h5>-</h5>  
            </div>
            <a href="{{ url('pegawai/unit-kerja/arsip/suratkeluar') }}" class="small-box-footer bg-danger">
              More info <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      </br>
      </br>
      <div class="col-md-12 text-center">
          <h3> Welcome {{auth()->user()->nama}} To </h3>
          <h4> Sistem Informasi Pengajuan Angka Kredit Politap </h4>
          <h3> ( S I P A K P O L ) </h3>
      </div>
    </div>

</x-module.pegawai-unitkerja>

