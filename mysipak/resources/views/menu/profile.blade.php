@php

  function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active';
  }
@endphp
<li class="nav-item">
    <a href="{{url('profile')}}" class="nav-link {{checkRouteActive('profile')}}">
      <i class="nav-icon fas fa-user"></i>
      <p>
        My Profile
      </p>
    </a>
</li>
