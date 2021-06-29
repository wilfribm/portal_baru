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
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700"
      rel="stylesheet"
      type="text/css"
    />
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
                <a class="navbar-brand" href="" style="color:#fff;">
                    <img src="{{asset('img/logo_duta_tani.png')}}" />DUTA TANI
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="color:#fff;">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item">
                        <a class="nav-link" href="#berita">Berita</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#visimisi">Visi Misi</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#profil">Profil</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#statistik">Statistik</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#fasilitas">Fasilitas</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/login">LOGIN</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <!-- Masthead-->
    <header class="masthead">
      <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          @foreach($s as $slide => $slider)
          <div class="carousel-item {{$slide == 0 ? 'active' : '' }}">
            <img class=" w-100" src="./../../foto_slide/{{$slider['foto']}}" alt="{{$slide['judul']}}">
            <div class="carousel-caption">
              <h5 style="color:black;">{{$slider['judul']}}</h5>
              <p style="color:black;">{{$slider['keterangan']}}</p>
            </div>
          </div>
          @endforeach
        </div>

          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
    </header>

    <!-- Berita Grid-->
    <section class="page-section bg-light" id="berita">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">Berita</h2>
        </div>
        <div class="row">
          @php
            $i=0;
            $jumlahData = 3;
            @endphp

            @foreach ($data as $berita)
              @php
                if ($i++ % $jumlahData == 0) {
                  echo "<div class='row margin-bottom-20'>";
                }
              @endphp
          <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
            
            <div class="portfolio-item">
              <a href="index/berita/{{$berita->id}}">
              <img class="img-fluid" src="./../../foto_berita/{{$berita->foto}}" alt="{{ $berita->judul }}" style="width:100%;"/>
              </a>
              
              <div class="portfolio-caption">
                <div class="portfolio-caption-heading">
                  <h5>{{$berita->judul}}</h5></div>
                  <div class="portfolio-caption-subheading text-muted">
                    {{$berita->tanggal}}
                  </div>
              </div>
              <!-- <td scope="row">
                <a href="index/berita/{{$berita->id}}" class="btn btn-primary btn-sm float-left">Open</a>
              </td> -->
            </div>
            
          </div>
          @endforeach  
        </div>
      </div>
    </section>

    <!-- Visi Misi-->
    <section class="page-section" id="visimisi">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">VISI MISI</h2>
          <h3 class="section-subheading text-muted bold">
            VISI:
            <br /><br />
            Lorem ipsum dolor sit amet consectetur.
          </h3>

          <h3 class="section-subheading text-muted bold">
            MISI:
            <br /><br />
            Lorem ipsum dolor sit amet consectetur.<br />
             Lorem ipsum dolor sit amet consectetur.
          </h3>
          
          <br /><br />
        </div>
      </div>
    </section>

    <!-- Profil-->
    <section class="page-section" id="profil">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">Profil Kami</h2>
          <h3 class="section-subheading text-muted">
            Lorem ipsum dolor sit amet consectetur.
          </h3>
        </div>
        
      </div>
    </section>

    <!-- Statistik-->
    <section class="page-section bg-light" id="statistik">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">Statistik</h2>
          <h3 class="section-subheading text-muted"></h3>
        </div>
        <div class="row">
              <div class="counting-sec">
                <div class="inner-width">
                  <div class="col">
                    <i class="far fa-smile-wink fa-4x"></i>
                    <div class="my-3 num">{{$materi}}</div>
                    Jumlah Materi
                  </div>

                  <div class="col">
                    <i class="fas fa-briefcase fa-4x"></i>
                    <div class="my-3 num">{{$lahan}}</div>
                    Lahan Dipetakan
                  </div>

                  <div class="col">
                    <i class="far fa-money-bill-alt fa-4x"></i>
                    <div class="my-3 num">{{$petani}}</div>
                    Jumlah Petani
                  </div>
              </div>
              <script>
                jQuery(document).ready(function($) {
                    $('.num').counterUp({
                        delay: 100,
                        time: 1000
                    });
                });
              </script>
            
        </div>
      </div>
    </section>

    <!-- Fasilitas-->
    <section class="page-section" id="fasilitas">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">FASILITAS</h2>
          <h3 class="section-subheading text-muted">
          </h3>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-shopping-cart fa-stack-1x fa-inverse" style="color:4ba353;"></i>
            </span>
            <h4 class="my-3">Data Lahan & Tani</h4>
            <p class="text-muted">
              
            </p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-laptop fa-stack-1x fa-inverse" style="color:4ba353;"></i>
            </span>
            <h4 class="my-3">Materi Pembelajaran</h4>
            <p class="text-muted">
              
            </p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-lock fa-stack-1x fa-inverse" style="color:4ba353;"></i>
            </span>
            <h4 class="my-3">Sistem Informasi Pertanian</h4>
            <p class="text-muted">
              
            </p>
          </div>
        </div>
      </div>
    </section>

    <div class="cc-contactpop fixed">
      <form action="https://wa.me/+6285726410947" method="">
        <a class="icon">
          <button class="btn" type="submit"><i class="fab fa-whatsapp fa-2x"></i>
            <h6>Butuh bantuan?</h6>
          </button>
        </a>
      </form>
    </div>

    <!-- Footer-->
    <footer class="footer py-4">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 text-lg-start"></div>
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
