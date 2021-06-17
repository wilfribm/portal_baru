<!-- Left side column. contains the logo and sidebar -->
<!-- <aside class="main-sidebar"> -->

<!-- sidebar: style can be found in sidebar.less -->
<!-- <section class="sidebar"> -->

  <!-- Sidebar user panel (optional) -->
  <!-- <div class="user-panel">
    <div class="pull-left image">
      <img src="#" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p>User</p>
    </div>
  </div> -->


  <!-- Sidebar Menu -->
      <!-- <ul class="sidebar-menu" data-widget="tree"> -->
    <!-- Optionally, you can add icons to the links -->
    <!-- <li class="active"><a href="#"><i class="fa fa-users"></i> <span>Daftar Bimbingan</span></a></li>
    <li><a href="#"><i class="fa fa-calendar"></i> <span>Jadwal Ujian KP</span></a></li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-folder"></i> <span>Admin & Koord</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Data Registrasi KP</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i>Kelola Periode KP</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Verifikasi Surat <br>Keterangan KP</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Verifikasi Pengajuan <br> KP & Pra KP</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i>Jadwal Ujian KP</a></li>
      </ul>
    </li>
  </ul> -->
  <!-- /.sidebar-menu -->
<!-- </section> -->
<!-- /.sidebar -->
<!-- </aside> -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-green elevation-4">
        <!-- Brand Logo -->
        <a href="{{url('pengajar/dashboard')}}" class="brand-link">
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
          <img src="{{asset('/lte3/dist/img/default.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{url('pengajar/profile')}}" class="d-block">{{Session::get('ID_User')}}</a>
          <!-- <p>{{Session::get('ID_User')}}</p> -->
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Materi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-play-circle nav-icon"></i>
                  <p> Upload materi Video</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-folder-open nav-icon"></i>
                  <p> Upload tugas</p>
                </a>  
              </li>
            </ul>
          </li> -->
          <li class="nav-item">
            <a href="{{url('pengajar/dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Kategori
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('pengajar/indextopik')}}" class="nav-link">
              <i class="nav-icon fas fa-folder-open"></i>
              <p>
                Tambah Topik
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('pengajar/indexmateri')}}" class="nav-link">
              <i class="nav-icon fas fa-upload"></i>
              <p>
                Upload Materi
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('pengajar/peserta')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Peserta Melihat Materi
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('pengajar/indexpertanyaan')}}" class="nav-link">
              <i class="nav-icon fas fa-envelope  "></i>
              <p>
                Pertanyaan
                
              </p>
            </a>
          </li>
        </ul>
  

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
