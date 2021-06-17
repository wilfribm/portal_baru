  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-green elevation-4">
        <!-- Brand Logo -->
        <a href="{{url('admin/approval')}}" class="brand-link">
      <img src="{{asset('/lte3/dist/img/logoukdw.jpg') }}" alt="logo ukdw" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light" ><b>DUTA</b> Tani</span> 
      <!-- <span class="logo-lg"><b>DUTA</b> Tani</span>  -->

    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('/lte3/dist/img/icon-admin.png') }}" class="img-circle elevation-2" alt="User Image" style="background-color: white">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Session::get('ID_User')}}</a>
          <!-- <p>{{Session::get('ID_User')}}</p> -->
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">          
          <li class="nav-item">
            <a href="{{url('admin/approval')}}" class="nav-link">
              <i class="nav-icon fas fa-check-circle"></i>
              <p>
                Approval
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/pertanyaan/')}}" class="nav-link">
              <i class="nav-icon fas fa-question-circle "></i>
              <p>
                Pertanyaan
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/pengajar/')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Pengajar
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('admin/kategori/')}}" class="nav-link">
              <i class="nav-icon fas fa-list-ul"></i>
              <p>
                Kategori
                
              </p>
            </a>
          </li>
        </ul>
  

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
