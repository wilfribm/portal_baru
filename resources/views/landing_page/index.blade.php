@extends('landing_page.layout')

@section('content')
    <!-- Masthead-->
    <header class="masthead">
      <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          @foreach($slidesArray as $slide => $slider)
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
          <h2 class="section-heading text-uppercase">Berita <a href="/listBerita"><i class="fas fa-archive"></i></a></h2>
        </div>
        <div class="row">

            @foreach ($berita as $berita)
          <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
            <div class="portfolio-item">
              <a href="listBerita/detailBerita/{{$berita->id}}">
              <!-- Agar ukuran rapi, convert gambar ke pixel 750 x 500 -->
              <img class="img-fluid" src="./../../foto_berita/{{$berita->foto}}" alt="{{ $berita->judul }}" style="width:100%;"/>
              </a>
              
              <div class="portfolio-caption">
                <div class="portfolio-caption-heading">
                  <h5 style="padding-top: 10px;">{{$berita->judul}}</h5></div>
                  <div class="portfolio-caption-subheading text-muted">
                    {{$berita->tanggal}}
                  </div>
              </div>
            </div>
            
          </div>
          @endforeach  
        </div>
      </div>
    </section>

    <!-- Visi Misi
    <section class="page-section" id="visimisi">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">VISI MISI</h2>
          <h3 class="section-subheading text-muted bold">
            VISI:
            <br /><br />
            Menjadi tim penelitian yang unggul dan terpercaya di kawasan nasional untuk menghasilkan<br />
            luaran yang bertanggung-jawab dalam pengembangan ilmu pengetahuan dan Teknologi Informasi<br /> 
            khususnya di bidang pertanian.
          </h3>

          <h3 class="section-subheading text-muted bold">
            MISI:
            <br /><br />
            <ol>
            <li>Menyelenggarakan penelitian di bidang ilmu pengetahuan, pertanian dan Teknologi Informasi dengan pendekatan.</li>
            <br />
            <li>Melakukan riset pengembangan ilmu pengetahuan, pertanian dan Teknologi Informasi secara inovatif, aplikatif dan berwawasan lingkungan.</li>
            <br />
            <li>Melakukan pengabdian kepada masyarakat di bidang Teknologi Informasi yang kontekstual dan partisipatoris.</li>
            <br />
            <li>Membangun Teknologi Informasi di bidang pertanian yang unggul dan kompetitif.</li>
          </ol>
          </h3>
          
          <br /><br />
        </div>
      </div>
    </section> -->

    <!-- Profil
    <section class="page-section" id="profil">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">Profil Kami</h2>
          <h3 class="section-subheading text-muted">
            Lorem ipsum dolor sit amet consectetur.
          </h3>
        </div>
        
      </div>
    </section> -->

    <!-- Statistik-->
    <section class="page-section" id="statistik">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">Statistik</h2>
          <h3 class="section-subheading text-muted"></h3>
        </div>
        <div class="row text-center">
                <div class="col-md-4">
                  <i class="fas fa-user-friends fa-4x"></i>
                  <h4><div class="my-3 num">{{$petani}}</div></h4>
                  <p class="text-muted">
                    Jumlah Petani
                  </p>
                </div>

                <div class="col-md-4">
                  <i class="fas fa-map-marked-alt fa-4x"></i>
                  <h4><div class="my-3 num">{{$lahan}}</div></h4>
                  <p class="text-muted">
                    Lahan Dipetakan
                  </p>
                </div>

                <div class="col-md-4">
                  <i class="fas fa-book fa-4x"></i>
                  <h4><div class="my-3 num">{{$materi}}</div></h4>
                  <p class="text-muted">
                    Jumlah Materi
                  </p>
                </div>
              </div>
            </div>
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

    

    <!-- Profil-->
    <!-- <section class="page-section" id="profil">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">Profil Kami</h2>
          <h3 class="section-subheading text-muted">
            Lorem ipsum dolor sit amet consectetur.
          </h3>
        </div>
        
      </div>
    </section> -->

@endsection