<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DutaTani | Masuk</title>
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
<link rel="shortcut icon" href="{{{ asset('img/favicon.png') }}}">
<div class="login-box">
  <div class="login-logo">
    <a href="/"><b>Duta</b>Tani</a>
  </div>
  <!-- /.login-logo -->
    <!-- @if(\Session::has('alert'))
                  <div class="alert alert-danger">
                      <div>{{Session::get('alert')}}</div>
                  </div>
              @endif
              @if(\Session::has('alert-success'))
                  <div class="alert alert-success">
                      <div>{{Session::get('alert-success')}}</div>
                  </div>
              @endif -->
              @if (count($errors) > 0)
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show">
                        {{$error}}
                    </div>
                @endforeach
            @endif

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    {{session('success')}}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show">
                    {{session('error')}}
                </div>
            @endif
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Silakan Login</p>

      <form action="{{ route('login') }}" method="post">
         {{csrf_field()}} 
        <div class="input-group mb-3 {{$errors->has('ID_User') ? ' has-error' : ''}}">
          <input id="ID_User" value="{{old('ID_User')}}" name="ID_User" type="text" class="form-control" placeholder="Username">
                    @if ($errors->has('ID_User'))
                    <span class="help-block">
                        <strong>{{$errors->first('ID_User')}}</strong>
                    </span>
                    @endif

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3 {{$errors->has('Password') ? ' has-error' : ''}}">
          <input id="password" value="{{old('Password')}}" name="Password" type="password" class="form-control" placeholder="Kata Sandi">
          @if ($errors->has('Password'))
                    <span class="help-block">
                        <strong>{{$errors->first('Password')}}</strong>
                    </span>
                    @endif
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <!-- <input name="remember" {{old('remember') ? 'checked' : ''}}  type="checkbox" id="remember_me">
              <label for="remember">
                Ingat Saya
              </label> -->
              <label class="checkbox">
                <input type="checkbox" value="remember-me" id="remember_me" style="margin-left: -25px;"> Ingat Saya
            </label>


            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
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

      <!-- <p class="mb-1">
        <a href="{{route('password.request')}}"> I forgot my password</a>
      </p> -->
      <p class="mb-0">
        <a href="{{route('register')}}" class="text-center"> Daftar Akun Baru</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<script src="https://code.jquery.com/jquery-1.9.1.js"></script>

 <script>
            $(function() {
 
                if (localStorage.chkbx && localStorage.chkbx != '') {
                    $('#remember_me').attr('checked', 'checked');
                    $('#xip_Name').val(localStorage.ID_User);
                    $('#xip_Password').val(localStorage.password);
                } else {
                    $('#remember_me').removeAttr('checked');
                    $('#xip_Name').val('');
                    $('#xip_Password').val('');
                }
 
                $('#remember_me').click(function() {
 
                    if ($('#remember_me').is(':checked')) {
                        // save username and password
                        localStorage.ID_User = $('#xip_Name').val();
                        localStorage.password = $('#xip_Password').val();
                        localStorage.chkbx = $('#remember_me').val();
                    } else {
                        localStorage.ID_User = '';
                        localStorage.password = '';
                        localStorage.chkbx = '';
                    }
                });
            });
 
        </script>
<!-- jQuery -->
<script src="lte3/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="lte3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="lte3/dist/js/adminlte.min.js"></script>

</body>
</html>