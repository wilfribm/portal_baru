@extends('admin.layouts.admin_base')

@section('content')
<div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-pills">                     
                        <h1>Pendataan Petani</h1>

                        
                        <br>
                        <br>

                </div>
                <small>
                <!-- <a class="fa fa-2x fa-list" href="{{url('admin/daftar/petani/semua')}}" style="margin-left: 10px;">  Daftar Petani</a> -->
                </small>
                <br><br>
         <div class="row">
          </div> 
         
      <div class="container">
        <div class="row">
          <div class="col-md-12">
           <form action="{{url('register/admin')}}" method="post">
            {{ csrf_field() }} 
              <div class="form-group">
                <div class="row">
                 <div class="col-md-6">
                    <select name="ID_Kategori" value="{{old('ID_Kategori')}}" id="ID_Kategori" class="form-control" placeholder="ID_Kategori" readonly>
                      <option value="PET">Petani</option>
                    </select>
                </div>
              </div>
              <br>
              <div class="form-group">
                <div class="row">
                 <div class="col-md-6">
                  <input id="ID_User" value="{{old('ID_User')}}" name="ID_User" type="text" class="form-control" placeholder="Username">
                    @if ($errors->has('ID_User'))
                    <span class="help-block">
                        <strong>{{$errors->first('ID_User')}}</strong>
                    </span>
                    @endif
                </div>
              </div>
            <br>
            <div class="form-group">
                <div class="row">
                 <div class="col-md-6">
                 <input id="nama" value="{{old('nama')}}" name="nama" type="text" class="form-control" placeholder="Name">
                    @if ($errors->has('nama'))
                    <span class="help-block">
                        <strong>{{$errors->first('nama')}}</strong>
                    </span>
                    @endif
                </div>
              </div>
            <br>
             <div class="form-group">
                <div class="row">
                 <div class="col-md-6">
                  <input id="Email" value="{{old('Email')}}" name="Email" type="Email" class="form-control" placeholder="Email">
                    @if ($errors->has('Email'))
                    <span class="help-block">
                        <strong>{{$errors->first('Email')}}</strong>
                    </span>
                    @endif
                </div>
              </div>
            <br>

            <div class="form-group">
                <div class="row">
                 <div class="col-md-6">
                  <input id="alamat" value="{{old('alamat')}}" name="alamat" type="text" class="form-control" placeholder="Alamat">
                    @if ($errors->has('alamat'))
                    <span class="help-block">
                        <strong>{{$errors->first('alamat')}}</strong>
                    </span>
                    @endif
                </div>
              </div>
            <br>

            <div class="form-group">
                <div class="row">
                 <div class="col-md-6">
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
              </div>
            <br>

            <div class="form-group">
                <div class="row">
                 <div class="col-md-6">
                  <input id="nomor_telpon" value="{{old('nomor_telpon')}}" name="nomor_telpon" type="text" class="form-control" placeholder="Nomor Telfon">
                    @if ($errors->has('nomor_telpon'))
                    <span class="help-block">
                        <strong>{{$errors->first('nomor_telpon')}}</strong>
                    </span>
                    @endif
                </div>
              </div>
            <br>

            <div class="form-group">
                <div class="row">
                 <div class="col-md-6">
                  <input id="tanggal_lahir" value="{{old('tanggal_lahir')}}" name="tanggal_lahir" type="date" class="form-control" placeholder="Tanggal Lahir">
                    @if ($errors->has('tanggal_lahir'))
                    <span class="help-block">
                        <strong>{{$errors->first('tanggal_lahir')}}</strong>
                    </span>
                    @endif
                </div>
              </div>
            <br>

            <div class="form-group">
                <div class="row">
                 <div class="col-md-6">
                  <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin">
                <option>----Jenis Kelamin----</option>
                <option value="1">laki-laki</option>
                <option value="2">perempuan</option>

              </select>
                </div>
              </div>
            <br>

            <div class="form-group">
                <div class="row">
                 <div class="col-md-6">
                  <input id="password" value="{{old('password')}}" name="password" type="password" class="form-control" placeholder="Password">
                   @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{$errors->first('password')}}</strong>
                    </span>
                    @endif
                </div>
              </div>
            <br>

            <div class="form-group">
                <div class="row">
                 <div class="col-md-6">
                   <input id="password-confirm" name="password_confirmation" type="password" class="form-control" placeholder="Password">
                </div>
              </div>
            <br>

         <div class="form-group">
            <div class = "row">
              <div class="col-md-6">
                <input class="btn btn-primary btn-sm" type="submit" value="Tambah">
                </div>
              </div>
         </div>   
            
            
            </form>
          </div>
        </div>
@endsection