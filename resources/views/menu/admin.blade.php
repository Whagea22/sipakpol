@php

  function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active';
  }
@endphp
        <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <x-template.menu.menu-item title="Admin" url="admin/master-data/pegawai" icon="circle"/>
              <x-template.menu.menu-item title="Module" url="admin/master-data/module" icon="circle"/>
            </ul>
        </li>
        {{-- <li class="nav-item">
            <a href="pengajuan-pegawai" class="nav-link {{checkRouteActive('admin/master-data/pengajuan-pegawai')}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Pengajuan Pegawai
              </p>
            </a>
        </li> --}}
        <li class="nav-item menu-open">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Arsip
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ url('admin/master-data/arsip/surat-masuk') }}" class="nav-link {{checkRouteActive('admin/master-data/arsip/surat-masuk')}}">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Surat Masuk
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('admin/master-data/arsip/surat-keluar') }}" class="nav-link {{checkRouteActive('admin/master-data/arsip/surat-keluar')}}">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Surat Keluar
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('admin/master-data/arsip/riwayat-surat') }}" class="nav-link {{checkRouteActive('admin/master-data/arsip/riwayat-surat')}}">
                <i class="nav-icon fa fa-th-list"></i>
                <p>
                  Riwayat Surat
                </p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
            <a href="{{url('admin/master-data/format-surat')}}" class="nav-link {{checkRouteActive('admin/master-data/format-surat')}}">
              <i class="nav-icon fa fa-file"></i>
              <p>
                Format Surat
              </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('admin/master-data/pengaduan')}}" class="nav-link {{checkRouteActive('admin/master-data/pengaduan')}}">
              <i class="nav-icon fa fa-exclamation-circle"></i>
              <p>
                Pengaduan
              </p>
            </a>
        </li>
