<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Duta Tani</title>

    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
    <!-- Font Awesome icons (free version)-->
    <script
      src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    
    <!-- Google fonts-->
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,700"
      rel="stylesheet"
      type="text/css"/>
    <link
      href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700"
      rel="stylesheet"
      type="text/css"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />

    <!-- Animating Statistik Container (Jangan digabung script bagian bawah, nanti animasinya ga jalan) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script> -->
    <!-- <script src="jquery.counterup.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  </head>
  <body id="page-top">
    <!-- Navigation-->
        <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
            <div class="container">
                
                <a class="navbar-brand" href="/" style="color:#fff;">
                <img src="{{asset('img/duta.png')}}" style="width: 35%;height:30%;"/>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="color:#fff;">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item">
                        <a class="nav-link" href="/listBerita">Berita</a>
                        </li>
                        <!-- <li class="nav-item">
                        <a class="nav-link" href="#visimisi">Visi Misi</a>
                        </li> -->
                        <li class="nav-item">
                        <a class="nav-link" href="/profil">Profil</a>
                        </li>
                        <!-- <li class="nav-item">
                        <a class="nav-link" href="#statistik">Statistik</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#fasilitas">Fasilitas</a>
                        </li> -->
                        <li class="nav-item">
                        <a class="nav-link" href="/listMateri">Materi</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/login">LOGIN</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    @yield('content')

    <div class="cc-contactpop fixed">
      <form action="https://wa.me/+6285726410947" method="">
        <a class="icon">
          <button class="btn" type="submit"><i class="fab fa-whatsapp fa-2x"></i>
            <!-- <h6>Butuh bantuan?</h6> -->
          </button>
        </a>
      </form>
    </div>

    <footer class="footer-siteMap">
      <div class="site-section">
        <div class="container">
          <div class="row">

            <div class="col-sm">
              
              <a href="/" class="footer-logo"><img src="{{asset('img/duta.png')}}" style="width: 45%;height:40%;"/></a>
              <p>Jl. dr. Wahidin Sudirohusodo no. 5-25 <br/>
                Yogyakarta, Indonesia – 55224
              </p>
              <!-- <p class="copyright">
                <small>&copy;2021: didanai oleh DIKTI</small>
              </p> -->
            </div>
            <!-- <div class="col-sm">
              <h3>Customers</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Buyer</a></li>
                <li><a href="#">Supplier</a></li>
              </ul>
            </div> -->
            <div class="col-sm">
              <h3>MENU</h3>
              <ul class="list-unstyled links">
                <li><a href="/listBerita" style="text-decoration: none;">Berita</a></li>
                <li><a href="/profil" style="text-decoration: none;">Profil</a></li>
                <li><a href="/listMateri" style="text-decoration: none;">Materi</a></li>
                <li><a href="/login" style="text-decoration: none;">Login</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Footer-->
    <footer class="footer py-2  text-center">
      <div class="container">
        <div class="row align-items-center">
            <small>&copy;2021 DutaTani: didanai oleh Dikti</small>
        </div>
      </div>
    </footer>
      
    </div>
      
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="js/slideshow.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script  src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
