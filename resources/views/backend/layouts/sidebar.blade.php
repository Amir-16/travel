

<!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->


    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage User
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('users.view')}}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>View User</p>
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-copy"></i>
        <p>
          Manage Profile
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('profiles.view')}}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>your profile</p>
          </a>
        </li>
      </ul>
      <!--Change password -->
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('profiles.password.view')}}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Change password</p>
          </a>
        </li>
      </ul>
      <!--doner -->
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{route('doners.add')}}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Doner profile</p>
          </a>
        </li>
      </ul>
    </li>
    </ul>
</nav>
<!-- /.sidebar-menu -->
