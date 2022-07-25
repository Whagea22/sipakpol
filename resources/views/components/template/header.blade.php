  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            {{-- @if(Auth::check())
              {{request()->user()->nama}}
            @else
              Silahkan Login
            @endif --}}
          <img src="{{ url("public/")."/".auth()->user()->profile }}" alt="User Avatar" style="height: 130%" class="img-circle">
        </a>
        <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
							<div class="dropdown-item dropdown-profile-pic" href="">
								<img src="{{ url("public/")."/".auth()->user()->profile }}" height="150px" width="150px">
								<p class="text-center m-t-10 m-b-20">{{ auth()->user()->nama }}</p>
							</div>

							<a class="dropdown-item" href="{{url('profile')}}">

                                <i class="fa fa-user"></i> Profile
							</a>
							<a class="clearfix bg-master-lighter dropdown-item" href="{{url('/login')}}">
								  <span class="pull-left">Logout</span>
								  <span class="pull-right"><i class="pg-power"></i></span>
							</a>
					</div>
      </li>
    </ul>
  </nav>
