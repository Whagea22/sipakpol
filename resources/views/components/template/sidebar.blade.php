<aside class="main-sidebar bg-gradient-drak sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{url('public/dist')}}/img/sipakpol2.png" class="brand-image" style="opacity: 1">
      <br>
    </a>

    {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('public') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->nama}}</a>
        </div>
    </div> --}}
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" 
            data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-header">{{ $header }} </li>
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            @include('menu.' . $menu)
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>