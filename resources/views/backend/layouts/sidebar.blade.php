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
           User Management
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
           Profile Management
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
           Logo Management
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('logos.view')}}" class="nav-link {{($route=='logos.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View Logo</p>
          </a>
        </li>
      </ul>
    </li>
    <!--Slider  -->
    <li class="nav-item has-treeview {{($prefix=='/users')?'menu-open':''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
           Slider Management
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
    <!--Mission  -->
    <li class="nav-item has-treeview {{($prefix=='/users')?'menu-open':''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
           Mission Management
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('missions.view')}}" class="nav-link {{($route=='missions.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View mission</p>
          </a>
        </li>
      </ul>
    </li>
    <!--Vision  -->
    <li class="nav-item has-treeview {{($prefix=='/users')?'menu-open':''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
           Vision Management
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('visions.view')}}" class="nav-link {{($route=='visions.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View Vision</p>
          </a>
        </li>
      </ul>
    </li>
    <!--Vision  -->
    <li class="nav-item has-treeview {{($prefix=='/users')?'menu-open':''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
           NewsEvent Management
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('news_events.view')}}" class="nav-link {{($route=='news_events.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View NewsEvent</p>
          </a>
        </li>
      </ul>
    </li>

    <!--Services  -->
    <li class="nav-item has-treeview {{($prefix=='/users')?'menu-open':''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
           Services Management
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('services.view')}}" class="nav-link {{($route=='services.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View services</p>
          </a>
        </li>
      </ul>
    </li>

    <!--About  -->
    <li class="nav-item has-treeview {{($prefix=='/users')?'menu-open':''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
           About Management
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('about.view')}}" class="nav-link {{($route=='about.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View about</p>
          </a>
        </li>
      </ul>
    </li>
    <!--Contact  -->
    <li class="nav-item has-treeview {{($prefix=='/users')?'menu-open':''}}">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
           Contact Management
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('contacts.view')}}" class="nav-link {{($route=='contacts.view')?'active':''}}">
            <i class="far fa-circle nav-icon"></i>
            <p>View Contct</p>
          </a>
        </li>
      </ul>
    </li>
</nav>
<!-- /.sidebar-menu -->
