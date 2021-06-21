<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="design\coba2.css" rel="stylesheet" type="text/css">
        <link href="design\side-bar.css" rel="stylesheet">
</head>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Pangkalan Data Petani dan Komunitas Tani</a>
    </div>  
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li style="background-color: #34A853"><a href="#">Selamat Datang, {{Session::get('ID_User')}} </a></li>
        <li style="background-color: #34A853"><a href="logout.php">Keluar</a></li>
     </ul>
    </div>
  </div>
</nav>

 <nav class="navbar navbar-default no-margin">
    <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header fixed-brand">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"  id="menu-toggle">
                      <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
                    </button>
                    <a class="navbar-brand" href="#"><i class="fa fa-server fa-4"></i> MENU</a> 
                </div><!-- navbar-header-->
 
    </nav>
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav nav-pills nav-stacked" id="menu" >
               <li>
                    <a href="#"><span class="fa-stack fa-lg pull-left"><i class="fa fa-server fa-stack-1x "></i></span> Informasi Petani</a>
                    <ul class="nav-pills nav-stacked" style="list-style-type:none;">
                        <li><a href="GrafikWilayah_User.php"> Berdasarkan Wilayah</a></li>
                        <li><a href="#"> Berdasarkan Agama</a>
                          <li>
                              <a href="SumarryTaniAgama_User.php"><span class="fa-stack fa-lg pull-left"><i class="fa fa-list-alt fa-stack-1x "></i></span> Tabel</a>
                              <a href="GrafikTaniAgama_User.php"><span class="fa-stack fa-lg pull-left"><i class="fa fa-signal fa-stack-1x "></i></span> Grafik</a>
                          </li>
                        </li>
                        <li><a href="#"> Berdasarkan Usia</a>
                          <li>
                              <a href="SumarryTaniUmur_User.php"><span class="fa-stack fa-lg pull-left"><i class="fa fa-list-alt fa-stack-1x "></i></span> Tabel</a>
                              <a href="GrafikTaniUmur_User.php"><span class="fa-stack fa-lg pull-left"><i class="fa fa-signal fa-stack-1x "></i></span> Grafik</a>
                          </li>
                        </li>
                        <li><a href="#"> Berdasarkan Tk. Pendidikan</a>
                          <li>
                              <a href="SumarryTaniPendidikan_User.php"><span class="fa-stack fa-lg pull-left"><i class="fa fa-list-alt fa-stack-1x "></i></span> Tabel</a>
                              <a href="GrafikTaniPendidikan_User.php"><span class="fa-stack fa-lg pull-left"><i class="fa fa-signal fa-stack-1x "></i></span> Grafik</a>
                          </li>
                        </li>
                        <li><a href="#"> Berdasarkan Status Petani</a>
                          <li>
                                <a href="SumarryTaniStatus_User.php"><span class="fa-stack fa-lg pull-left"><i class="fa fa-list-alt fa-stack-1x "></i></span> Tabel</a>
                                <a href="GrafikTaniStatus_User.php"><span class="fa-stack fa-lg pull-left"><i class="fa fa-signal fa-stack-1x "></i></span> Grafik</a>
                            </li>
                        </li>
                      </ul>
                
               </div><!-- /#sidebar-wrapper -->
        <!-- Page Content -->
<div class="col-lg-12">
    <h2>Selamat Datang {{Session::get('ID_User')}} </h2>
</div>
<div class="col-lg-12">
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-2">
                    Foto Petani
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                ID Petani
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                ALamat Petani
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                Nomor Telepon
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                Pendidikan Terakhir 
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                Jumlah Tanggungan
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                Email 
            </div>
        </div> 
        <div class="row">
            <div class="col-md-12">
                Agama
            </div>
        </div>   
        <div class="row">
            <div class="col-md-12">
                Tanggal Lahir
            </div>
        </div>  
        <div class="row">
            <div class="col-md-12">
                Deskripsi Keahlian
        </div>  
        <div class="row">
            <div class="col-md-12">
                Status Petani
            </div>
        </div>
    <br>  
    <a class="btn btn-s btn-info" href="KartuAnggotaTani.php?id={{Session::get('ID_User')}}">Kartu Anggota</a> &nbsp; &nbsp;
    <a class="btn btn-s btn-primary" href="EditPetaniUser.php?id={{Session::get('ID_User')}}">Ubah</a>
    </div>   
</div>

        <!-- /#page-content-wrapper -->
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="design/side_menu.js"></script>
</html>
