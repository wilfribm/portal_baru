@extends('admin.layouts.admin_base')

@section('content')
<div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-pills">                     
                        <h1>Pendataan Kecamatan</h1>

                        
                        <br>
                        <br>

                </div>
                <small>
                <a class="fa fa-2x fa-list" href="Data_Kecamatan.php" style="margin-left: 10px;">  Daftar Kecamatan</a>
                </small>
                <br><br>
         <div class="row">
          </div> 
         
      <div class="container">
        <div class="row">
          <div class="col-md-12">
           <form role="form" action="SimpanKecamatan.php" method="post">
              <div class="form-group">
              <div class="row">
               <div class="col-md-6">
                <label class="control-label">Nama Kecamatan</label>
                <input class="form-control" name="nama_kec" placeholder="Nama Kecamatan" type="text" required>
              </div>
              </div>
            <br>
              <div class="form-group">
              <div class="row">
              <div class="col-md-6">
                <label class="control-label">Nama Kabupaten</label>
                 <select class="form-control" name="nama_kab" required>
                    <option value="" disabled selected> Nama Kabupaten </option>
                    @foreach($kabupaten as $kb)
                        <option value="{{$kb->Nama_Kabupaten}}">{{$kb->Nama_Kabupaten}}</option>
                    @endforeach
                    
                </select>
              </div>
              </div>
        </br>
              <div class="form-group">
              <div class="row">
              <div class="col-md-6">
                <label class="control-label">Nama Provinsi</label>
                 <select class="form-control" name="nama_prov" required>
                    <option value="" disabled selected> Nama Provinsi </option>
                     @foreach($provinsi as $pv)
                        <option value="{{$pv->Nama_Provinsi}}">{{$pv->Nama_Provinsi}}</option>
                    @endforeach
                    
                </select>
              </div>
              </div>
          <br>
         <div class="form-group">
            <div class = "row">
              <div class="col-md-6">
                         <a class="btn btn-lg btn-danger btn-sm" href="{{url('admin/wilayah/show')}}">Kembali</a>
                          <input class="btn btn-primary btn-sm" type="submit" value="Simpan">
                </div>
              </div>
         </div>   
            
            
            </form>
          </div>
        </div>
@endsection