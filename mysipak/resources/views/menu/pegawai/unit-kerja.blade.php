@php

  function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active';
  }
@endphp

        <li class="nav-item">
          <a href="{{ url('pegawai/unit-kerja/dashboard') }}" class="nav-link {{checkRouteActive('pegawai/unit-kerja/dashboard')}}">
            <i class="nav-icon fa fa-home"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
            <a href="{{url('pegawai/unit-kerja/pengajuan-baru')}}" class="nav-link {{checkRouteActive('pegawai/unit-kerja/pengajuan-baru')}}">
              <i class="nav-icon fa fa-plus-circle"></i>
              <p>
                Pengajuan Baru
              </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('pegawai/unit-kerja/pengajuan-aktif')}}" class="nav-link {{checkRouteActive('pegawai/unit-kerja/pengajuan-aktif')}}">
              <i class="nav-icon fa fa-hourglass-half"></i>
              <p>
                Pengajuan Aktif
              </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('pegawai/unit-kerja/pengajuan-selesai')}}" class="nav-link {{checkRouteActive('pegawai/unit-kerja/pengajuan-selesai')}}">
              <i class="nav-icon fa fa-check"></i>
              <p>
                Pengajuan Selesai
              </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('pegawai/unit-kerja/riwayat-pengajuan')}}" class="nav-link {{checkRouteActive('pegawai/unit-kerja/riwayat-pengajuan')}}">
              <i class="nav-icon fa fa-th-list"></i>
              <p>
                Riwayat Pengajuan
              </p>
            </a>
        </li>
        <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-window-restore"></i>
              <p>
                Arsip
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('pegawai/unit-kerja/arsip/suratmasuk') }}" class="nav-link {{checkRouteActive('pegawai/unit-kerja/arsip/suratmasuk')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('pegawai/unit-kerja/arsip/suratkeluar') }}" class="nav-link {{checkRouteActive('pegawai/unit-kerja/arsip/suratkeluar')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Keluar</p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href="{{ url('pegawai/unit-kerja/arsip/suratkeputusan') }}" class="nav-link {{checkRouteActive('pegawai/unit-kerja/arsip/suratkeputusan')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Keputusan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('pegawai/unit-kerja/arsip/surattugas') }}" class="nav-link {{checkRouteActive('pegawai/unit-kerja/arsip/surattugas')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Surat Tugas</p>
                </a>
              </li> --}}
            </ul>
        </li>
        <li class="nav-item">
            <a href="{{ url('pegawai/unit-kerja/format-surat') }}" class="nav-link {{checkRouteActive('pegawai/unit-kerja/format-surat')}}">
              <i class="nav-icon fa fa-file"></i>
              <p>
                Format Surat
              </p>
            </a>
        </li>
        <li class="nav-item menu-open">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-exclamation-circle"></i>
                <p>
                    Pengaduan
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{ url('pegawai/unit-kerja/pengaduan/pengaduanmasuk') }}" class="nav-link {{checkRouteActive('pegawai/unit-kerja/pengaduan/pengaduanmasuk')}}">
                    <i class="far fa-circle"></i>
                    <p>Masuk</p>
                </a>
                </li>
                <li class="nav-item">
                <a href="{{ url('pegawai/unit-kerja/pengaduan/pengaduankeluar') }}" class="nav-link {{checkRouteActive('pegawai/unit-kerja/pengaduan/pengaduankeluar')}}">
                    <i class="far fa-circle"></i>
                    <p>Keluar</p>
                </a>
                </li>
            </ul>
        </li>
