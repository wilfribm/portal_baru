<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DutaTani | Register</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{{ asset('img/favicon.ico') }}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="lte3/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="lte3/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="lte3/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="/"><b>Duta</b>Tani</a>

  </div>
  <div>
  @if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif
            @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
            @endif
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Register a new Teacher</p>
      @if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
      <form action="{{route('register')}}" method="post">
         {{ csrf_field() }} 
        <div class="input-group mb-3 {{$errors->has('ID_user') ? ' has-error' : ''}}">
          <input id="ID_User" value="{{old('ID_User')}}" name="ID_User" type="text" class="form-control" placeholder="Username">
                    @if ($errors->has('ID_User'))
                    <span class="help-block">
                        <strong>{{$errors->first('ID_User')}}</strong>
                    </span>
                    @endif

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3 {{$errors->has('nama') ? ' has-error' : ''}}">
          <input id="nama" value="{{old('nama')}}" name="nama" type="text" class="form-control" placeholder="Name">
                    @if ($errors->has('nama'))
                    <span class="help-block">
                        <strong>{{$errors->first('nama')}}</strong>
                    </span>
                    @endif

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-address-card"></span>
            </div>
          </div>
        </div>
        

        <div class="input-group mb-3 {{$errors->has('Email') ? ' has-error' : ''}}">
          <input id="Email" value="{{old('Email')}}" name="Email" type="Email" class="form-control" placeholder="Email">
                    @if ($errors->has('Email'))
                    <span class="help-block">
                        <strong>{{$errors->first('Email')}}</strong>
                    </span>
                    @endif

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3 {{$errors->has('alamat') ? ' has-error' : ''}}">
          <input id="alamat" value="{{old('alamat')}}" name="alamat" type="text" class="form-control" placeholder="Alamat">
                    @if ($errors->has('alamat'))
                    <span class="help-block">
                        <strong>{{$errors->first('alamat')}}</strong>
                    </span>
                    @endif

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-address-book"></span>
            </div>
          </div>
        </div>


      <div class="input-group mb-3 {{$errors->has('provinsi') ? ' has-error' : ''}}">
        <select name="provinsi" id="provinsi" class="form-control" placeholder="provinsi">
          <option>---- Provinsi ----</option>
          <option value="ACEH">ACEH</option>
          <option value="BALI">BALI</option>
          <option value="BANTEN">BANTEN</option>
          <option value="BENGKULU">BENGKULU</option>
          <option value="DI YOGYAKARTA">DI YOGYAKARTA</option>
          <option value="DKI JAKARTA">DKI JAKARTA</option>
          <option value="GORONTALO">GORONTALO</option>
          <option value="JAMBI">JAMBI</option>
          <option value="JAWA BARAT">JAWA BARAT</option>
          <option value="JAWA TENGAH">JAWA TENGAH</option>
          <option value="JAWA TIMUR">JAWA TIMUR</option>
          <option value="KALIMANTAN BARAT">KALIMANTAN BARAT</option>
          <option value="KALIMANTAN SELATAN">KALIMANTAN SELATAN</option>
          <option value="KALIMANTAN TENGAH">KALIMANTAN TENGAH/option>
          <option value="KALIMANTAN TIMUR">KALIMANTAN TIMUR</option>
          <option value="KALIMANTAN UTARA">KALIMANTAN UTARA</option>
          <option value="KEPULAUAN BANGKA BELITUNG">KEPULAUAN BANGKA BELITUNG</option>
          <option value="KEPULAUAN RIAU">KEPULAUAN RIAU</option>
          <option value="LAMPUNG">LAMPUNG</option>
          <option value="MALUKU">MALUKU</option>
          <option value="MALUKU UTARA">MALUKU UTARA</option>
          <option value="NUSA TENGGARA BARAT">NUSA TENGGARA BARAT</option>
          <option value="NUSA TENGGARA TIMUR">NUSA TENGGARA TIMUR</option>
          <option value="PAPUA">PAPUA</option>
          <option value="PAPUA BARAT">PAPUA BARAT</option>
          <option value="RIAU">RIAU</option>
          <option value="SULAWESI BARAT">SULAWESI BARAT</option>
          <option value="SULAWESI SELATAN">SULAWESI SELATAN</option>
          <option value="SULAWESI TENGAH">SULAWESI TENGAH</option>
          <option value="SULAWESI TENGGARA">SULAWESI TENGGARA</option>
          <option value="SULAWESI UTARA">SULAWESI UTARA</option>
          <option value="SUMATERA BARAT">SUMATERA BARAT</option>
          <option value="SUMATERA SELATAN">SUMATERA SELATAN</option>
          <option value="SUMATERA UTARA">SUMATERA UTARA</option>


        </select>
      </div>

          <!-- <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-map-marker"></span>
            </div>
          </div>
        </div> -->

        <div class="input-group mb-3 {{$errors->has('nomor_telpon') ? ' has-error' : ''}}">
          <input id="nomor_telpon" value="{{old('nomor_telpon')}}" name="nomor_telpon" type="text" class="form-control" placeholder="Nomor Telfon">
                    @if ($errors->has('nomor_telpon'))
                    <span class="help-block">
                        <strong>{{$errors->first('nomor_telpon')}}</strong>
                    </span>
                    @endif

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-mobile"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3 {{$errors->has('tanggal_lahir') ? ' has-error' : ''}}">
          <input id="tanggal_lahir" value="{{old('tanggal_lahir')}}" name="tanggal_lahir" type="date" class="form-control" placeholder="Tanggal Lahir">
                    @if ($errors->has('tanggal_lahir'))
                    <span class="help-block">
                        <strong>{{$errors->first('tanggal_lahir')}}</strong>
                    </span>
                    @endif

          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
        

            <div class="input-group mb-3 {{$errors->has('jenis_kelamin') ? ' has-error' : ''}}">
        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin">
          <option>----Jenis Kelamin----</option>
          <option value="1">laki-laki</option>
          <option value="2">perempuan</option>

        </select>
      </div>
            <!-- <div class="input-group mb-3 {{$errors->has('ID_Kategori') ? ' has-error' : ''}}">
          <select name="ID_Kategori" value="{{old('ID_Kategori')}}" id="ID_Kategori" class="form-control" placeholder="ID_Kategori">
            <option>----Daftar Sebagai----</option>
            <option value="TL">Trainer</option>
            <option value="PSL">Peserta</option>

          </select>
        </div> -->
        <div class="input-group mb-3 {{$errors->has('password') ? ' has-error' : ''}}">
          <input id="password" value="{{old('password')}}" name="password" type="password" class="form-control" placeholder="Password">
          @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{$errors->first('password')}}</strong>
                    </span>
                    @endif
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3 ">
          <input id="password-confirm" name="password_confirmation" type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->
        <div>
        <br>
      <!-- <p class="mb-1">
        <a href="{{route('password.request')}}"> I forgot my password</a>
      </p> -->
      <p class="mb-0">
        <a href="{{route('login')}}" class="text-center"> I already a teacher</a>
      </p>
      </div>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="lte3/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="lte3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="lte3/dist/js/adminlte.min.js"></script>
<script>
// Data Picker Initialization
$('.datepicker').datepicker({
  inline: true;
});
</script>
</body>
</html>