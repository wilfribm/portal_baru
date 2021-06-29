<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-green navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="{{asset('/lte3/dist/img/icon-admin.png') }}" class="user-image img-circle elevation-2" alt="User Image" style="background-color: white">
          <span class="d-none d-md-inline">{{Session::get('ID_User')}}</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-green">
            <img src="{{asset('/lte3/dist/img/icon-admin.png') }}" class="img-circle elevation-2" alt="User Image" style="background-color: white">

            <p>
              {{Session::get('ID_User')}}
            </p>
          </li>
          
          </li>
          <!-- Menu Footer-->
          <li class="user-footer text-center">
            <a href="{{url('/logout')}}" class="btn btn-default btn-flat">Sign out</a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
