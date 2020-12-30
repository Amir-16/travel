@php

$prefix = Request::route()->getPrefix();
$route =Route::current()->getName();
@endphp

<!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->

@if(Auth::user()->usertype=='Admin')
    <li class="nav-item has-treeview {{($prefix=='/users')?'menu-open':''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage User
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('users.view')}}" class="nav-link {{($route=='users.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View User</p>
          </a>
        </li>
      </ul>
    </li>

    @endif

    <li class="nav-item has-treeview {{($prefix =='/profiles')?'menu-open':''}} ">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage Profile
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('profiles.view')}}" class="nav-link  {{($route =='profiles.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>your profile</p>
          </a>
        </li>
      </ul>
      <!--Change password -->
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('profiles.password.view')}}" class="nav-link {{($route=='profiles.password.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>Change password</p>
          </a>
        </li>
      </ul>
    </li>

    <!--Logo sidebar -->
    <li class="nav-item has-treeview {{($prefix=='/users')?'menu-open':''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage Logo
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('logos.view')}}" class="nav-link {{($route=='logo.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View Logo</p>
          </a>
        </li>
      </ul>
    </li>
    <!--Slider sidebar -->
    <li class="nav-item has-treeview {{($prefix=='/users')?'menu-open':''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage Slider
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('sliders.view')}}" class="nav-link {{($route=='sliders.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View Slider</p>
          </a>
        </li>
      </ul>
    </li>
</nav>
<!-- /.sidebar-menu -->
