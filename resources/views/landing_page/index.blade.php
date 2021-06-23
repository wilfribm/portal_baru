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
    
    <!-- <link rel="stylesheet"   href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-  Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"crossorigin="anonymous"> -->

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>  -->
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
    <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="#page-top">
          <img src="{{asset('img/favicon.ico')}}" alt="..." /> DUTA TANI</a
        >
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
              <a class="nav-link" href="#fasilitas">Fasilitas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#statistik">Statistik</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Kontak</a>
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
            <img class=" w-100" src="./../../foto_slide/{{$slider['foto']}}" alt="{{$slide['judul']}}" style="max-width: 100%;
  height: auto;">
            <div class="carousel-caption">
              <h5>{{$slider['judul']}}</h5>
              <p>{{$slider['keterangan']}}</p>
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
          <div class="col-lg-4 col-sm-6">
            @php
            $i=0;
            $jumlahData = 3;
            @endphp

            @foreach ($data as $berita)
              @php
                if ($i++ % $jumlahData == 0) {
                  echo "<div class='row margin-bottom-10'>";
                }
              @endphp
            <div class="portfolio-item">
              <a
                class="portfolio-link"
                data-bs-toggle="modal"
                href=""
              >
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                    <i class="fas fa-plus fa-3x"></i>
                  </div>
                </div>
                <img class="img-fluid" src="./../../foto_berita/{{$berita->foto}}" alt="{{ $berita->judul }}" style="width:10%;"/>
              </a>
              
              <div class="portfolio-caption">
                <div class="portfolio-caption-heading">{{$berita->judul}}</div>
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

    <!-- Fasilitas-->
    <section class="page-section" id="fasilitas">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">FASILITAS</h2>
          <h3 class="section-subheading text-muted">
            <!-- Lorem ipsum dolor sit amet consectetur. -->
          </h3>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="my-3">Jual Beli Alat & Bahan Pertanian</h4>
            <p class="text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima
              maxime quam architecto quo inventore harum ex magni, dicta
              impedit.
            </p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="my-3">----</h4>
            <p class="text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima
              maxime quam architecto quo inventore harum ex magni, dicta
              impedit.
            </p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="my-3">Sistem Informasi Pertanian</h4>
            <p class="text-muted">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima
              maxime quam architecto quo inventore harum ex magni, dicta
              impedit.
            </p>
          </div>
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
          <div class="col-lg-4">
            <div class="team-member">
              <img
                class="mx-auto rounded-circle"
                src="assets/img/team/1.jpg"
                alt="..."
              />
              <h4> </h4>
              <p class="text-muted">Lead Designer</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="team-member">
              <img
                class="mx-auto rounded-circle"
                src="assets/img/team/2.jpg"
                alt="..."
              />
              <h4> </h4>
              <p class="text-muted">Lead Marketer</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="team-member">
              <img
                class="mx-auto rounded-circle"
                src="assets/img/team/3.jpg"
                alt="..."
              />
              <h4> </h4>
              <p class="text-muted">Lead Developer</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section" id="contact">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">Kontak Kami</h2>
          <h3 class="section-subheading text-muted">
            Jika Anda membutuhkan untuk menghubungi kami, silahkan mengisikan
            form berikut ini. Setiap pesan yang Anda masukkan dapat
            ditindaklanjuti.
          </h3>
        </div>
        <!-- * * * * * * * * * * * * * * *-->
        <!-- * * SB Forms Contact Form * *-->
        <!-- * * * * * * * * * * * * * * *-->
        <!-- This form is pre-integrated with SB Forms.-->
        <!-- To make this form functional, sign up at-->
        <!-- https://startbootstrap.com/solution/contact-forms-->
        <!-- to get an API token!-->
        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
          <div class="row align-items-stretch mb-5">
            <div class="col-md-6">
              <div class="form-group">
                <!-- Name input-->
                <input
                  class="form-control"
                  id="name"
                  type="text"
                  placeholder="Your Name *"
                  data-sb-validations="required"
                />
                <div class="invalid-feedback" data-sb-feedback="name:required">
                  A name is required.
                </div>
              </div>
              <div class="form-group">
                <!-- Email address input-->
                <input
                  class="form-control"
                  id="email"
                  type="email"
                  placeholder="Your Email *"
                  data-sb-validations="required,email"
                />
                <div class="invalid-feedback" data-sb-feedback="email:required">
                  An email is required.
                </div>
                <div class="invalid-feedback" data-sb-feedback="email:email">
                  Email is not valid.
                </div>
              </div>
              <div class="form-group mb-md-0">
                <!-- Phone number input-->
                <input
                  class="form-control"
                  id="phone"
                  type="tel"
                  placeholder="Your Phone *"
                  data-sb-validations="required"
                />
                <div class="invalid-feedback" data-sb-feedback="phone:required">
                  A phone number is required.
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group form-group-textarea mb-md-0">
                <!-- Message input-->
                <textarea
                  class="form-control"
                  id="message"
                  placeholder="Your Message *"
                  data-sb-validations="required"
                ></textarea>
                <div
                  class="invalid-feedback"
                  data-sb-feedback="message:required"
                >
                  A message is required.
                </div>
              </div>
            </div>
          </div>
          <!-- Submit success message-->
          <!---->
          <!-- This is what your users will see when the form-->
          <!-- has successfully submitted-->
          <div class="d-none" id="submitSuccessMessage">
            <div class="text-center text-white mb-3">
              <div class="fw-bolder">Form submission successful!</div>
              To activate this form, sign up at
              <br />
              <a href="https://startbootstrap.com/solution/contact-forms"
                >https://startbootstrap.com/solution/contact-forms</a
              >
            </div>
          </div>
          <!-- Submit error message-->
          <!---->
          <!-- This is what your users will see when there is-->
          <!-- an error submitting the form-->
          <div class="d-none" id="submitErrorMessage">
            <div class="text-center text-danger mb-3">
              Error sending message!
            </div>
          </div>
          <!-- Submit Button-->
          <div class="text-center">
            <button
              class="btn btn-primary btn-xl text-uppercase disabled"
              id="submitButton"
              type="submit"
            >
              Send Message
            </button>
          </div>
        </form>
      </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 text-lg-start"></div>
        </div>
      </div>
    </footer>
    <!-- Portfolio Modals-->
    <!-- Portfolio item 1 modal popup-->
    <div
      class="portfolio-modal modal fade"
      id="portfolioModal1"
      tabindex="-1"
      role="dialog"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-bs-dismiss="modal">
            <img src="assets/img/close-icon.svg" alt="Close modal" />
          </div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="modal-body">
                  <!-- Project details-->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">
                    Lorem ipsum dolor sit amet consectetur.
                  </p>
                  <img
                    class="img-fluid d-block mx-auto"
                    src="assets/img/portfolio/1.jpg"
                    alt="..."
                  />
                  <p>
                    Use this area to describe your project. Lorem ipsum dolor
                    sit amet, consectetur adipisicing elit. Est blanditiis
                    dolorem culpa incidunt minus dignissimos deserunt repellat
                    aperiam quasi sunt officia expedita beatae cupiditate,
                    maiores repudiandae, nostrum, reiciendis facere nemo!
                  </p>
                  <ul class="list-inline">
                    <li>
                      <strong>Client:</strong>
                      Threads
                    </li>
                    <li>
                      <strong>Category:</strong>
                      Illustration
                    </li>
                  </ul>
                  <button
                    class="btn btn-primary btn-xl text-uppercase"
                    data-bs-dismiss="modal"
                    type="button"
                  >
                    <i class="fas fa-times me-1"></i>
                    Close Project
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Portfolio item 2 modal popup-->
    <div
      class="portfolio-modal modal fade"
      id="portfolioModal2"
      tabindex="-1"
      role="dialog"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-bs-dismiss="modal">
            <img src="assets/img/close-icon.svg" alt="Close modal" />
          </div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="modal-body">
                  <!-- Project details-->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">
                    Lorem ipsum dolor sit amet consectetur.
                  </p>
                  <img
                    class="img-fluid d-block mx-auto"
                    src="assets/img/portfolio/2.jpg"
                    alt="..."
                  />
                  <p>
                    Use this area to describe your project. Lorem ipsum dolor
                    sit amet, consectetur adipisicing elit. Est blanditiis
                    dolorem culpa incidunt minus dignissimos deserunt repellat
                    aperiam quasi sunt officia expedita beatae cupiditate,
                    maiores repudiandae, nostrum, reiciendis facere nemo!
                  </p>
                  <ul class="list-inline">
                    <li>
                      <strong>Client:</strong>
                      Explore
                    </li>
                    <li>
                      <strong>Category:</strong>
                      Graphic Design
                    </li>
                  </ul>
                  <button
                    class="btn btn-primary btn-xl text-uppercase"
                    data-bs-dismiss="modal"
                    type="button"
                  >
                    <i class="fas fa-times me-1"></i>
                    Close Project
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Portfolio item 3 modal popup-->
    <div
      class="portfolio-modal modal fade"
      id="portfolioModal3"
      tabindex="-1"
      role="dialog"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-bs-dismiss="modal">
            <img src="assets/img/close-icon.svg" alt="Close modal" />
          </div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="modal-body">
                  <!-- Project details-->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">
                    Lorem ipsum dolor sit amet consectetur.
                  </p>
                  <img
                    class="img-fluid d-block mx-auto"
                    src="assets/img/portfolio/3.jpg"
                    alt="..."
                  />
                  <p>
                    Use this area to describe your project. Lorem ipsum dolor
                    sit amet, consectetur adipisicing elit. Est blanditiis
                    dolorem culpa incidunt minus dignissimos deserunt repellat
                    aperiam quasi sunt officia expedita beatae cupiditate,
                    maiores repudiandae, nostrum, reiciendis facere nemo!
                  </p>
                  <ul class="list-inline">
                    <li>
                      <strong>Client:</strong>
                      Finish
                    </li>
                    <li>
                      <strong>Category:</strong>
                      Identity
                    </li>
                  </ul>
                  <button
                    class="btn btn-primary btn-xl text-uppercase"
                    data-bs-dismiss="modal"
                    type="button"
                  >
                    <i class="fas fa-times me-1"></i>
                    Close Project
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Portfolio item 4 modal popup-->
    <div
      class="portfolio-modal modal fade"
      id="portfolioModal4"
      tabindex="-1"
      role="dialog"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-bs-dismiss="modal">
            <img src="assets/img/close-icon.svg" alt="Close modal" />
          </div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="modal-body">
                  <!-- Project details-->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">
                    Lorem ipsum dolor sit amet consectetur.
                  </p>
                  <img
                    class="img-fluid d-block mx-auto"
                    src="assets/img/portfolio/4.jpg"
                    alt="..."
                  />
                  <p>
                    Use this area to describe your project. Lorem ipsum dolor
                    sit amet, consectetur adipisicing elit. Est blanditiis
                    dolorem culpa incidunt minus dignissimos deserunt repellat
                    aperiam quasi sunt officia expedita beatae cupiditate,
                    maiores repudiandae, nostrum, reiciendis facere nemo!
                  </p>
                  <ul class="list-inline">
                    <li>
                      <strong>Client:</strong>
                      Lines
                    </li>
                    <li>
                      <strong>Category:</strong>
                      Branding
                    </li>
                  </ul>
                  <button
                    class="btn btn-primary btn-xl text-uppercase"
                    data-bs-dismiss="modal"
                    type="button"
                  >
                    <i class="fas fa-times me-1"></i>
                    Close Project
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Portfolio item 5 modal popup-->
    <div
      class="portfolio-modal modal fade"
      id="portfolioModal5"
      tabindex="-1"
      role="dialog"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-bs-dismiss="modal">
            <img src="assets/img/close-icon.svg" alt="Close modal" />
          </div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="modal-body">
                  <!-- Project details-->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">
                    Lorem ipsum dolor sit amet consectetur.
                  </p>
                  <img
                    class="img-fluid d-block mx-auto"
                    src="assets/img/portfolio/5.jpg"
                    alt="..."
                  />
                  <p>
                    Use this area to describe your project. Lorem ipsum dolor
                    sit amet, consectetur adipisicing elit. Est blanditiis
                    dolorem culpa incidunt minus dignissimos deserunt repellat
                    aperiam quasi sunt officia expedita beatae cupiditate,
                    maiores repudiandae, nostrum, reiciendis facere nemo!
                  </p>
                  <ul class="list-inline">
                    <li>
                      <strong>Client:</strong>
                      Southwest
                    </li>
                    <li>
                      <strong>Category:</strong>
                      Website Design
                    </li>
                  </ul>
                  <button
                    class="btn btn-primary btn-xl text-uppercase"
                    data-bs-dismiss="modal"
                    type="button"
                  >
                    <i class="fas fa-times me-1"></i>
                    Close Project
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Portfolio item 6 modal popup-->
    <div
      class="portfolio-modal modal fade"
      id="portfolioModal6"
      tabindex="-1"
      role="dialog"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-bs-dismiss="modal">
            <img src="assets/img/close-icon.svg" alt="Close modal" />
          </div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="modal-body">
                  <!-- Project details-->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">
                    Lorem ipsum dolor sit amet consectetur.
                  </p>
                  <img
                    class="img-fluid d-block mx-auto"
                    src="assets/img/portfolio/6.jpg"
                    alt="..."
                  />
                  <p>
                    Use this area to describe your project. Lorem ipsum dolor
                    sit amet, consectetur adipisicing elit. Est blanditiis
                    dolorem culpa incidunt minus dignissimos deserunt repellat
                    aperiam quasi sunt officia expedita beatae cupiditate,
                    maiores repudiandae, nostrum, reiciendis facere nemo!
                  </p>
                  <ul class="list-inline">
                    <li>
                      <strong>Client:</strong>
                      Window
                    </li>
                    <li>
                      <strong>Category:</strong>
                      Photography
                    </li>
                  </ul>
                  <button
                    class="btn btn-primary btn-xl text-uppercase"
                    data-bs-dismiss="modal"
                    type="button"
                  >
                    <i class="fas fa-times me-1"></i>
                    Close Project
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="js/slideshow.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"   integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script  src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
