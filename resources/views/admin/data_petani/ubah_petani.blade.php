@extends('admin.layouts.admin_base')

@section('content')
<div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-pills">                     
                        <h1>Ubah Petani</h1>

                        
                        <br>
                        <br>

                </div>
                
                <br><br>
         <div class="row">
          </div> 
         
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            
           <form action="/update/{{$ubah_petani->ID_User}}" method="post">
            {{ csrf_field() }} 
              <div class="form-group">
                <div class="row">
                 <!-- <div class="col-md-6">
                    <select name="ID_Kategori" value="{{old('ID_Kategori')}}" id="ID_Kategori" class="form-control" placeholder="ID_Kategori" readonly>
                      <option value="PET">Petani</option>
                    </select>
                </div> -->
              </div>
              <br>
              <div class="form-group">
                <div class="row">
                   <div class="col-md-6">
                    <label>Nama Lengkap</label>
                    <input id="Nama_Petani" value="{{$ubah_petani->Nama_Petani}}" name="Nama_Petani" type="text" class="form-control" placeholder="Username">
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                <div class="row">
                   <div class="col-md-6">
                    <label>Alamat</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Alamat_Petani" placeholder="Alamat">{{$ubah_petani->Alamat_Petani}}</textarea>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                   <div class="col-md-6">
                    <label>Email</label>
                    <input id="Nomor_Telpon" value="{{$ubah_petani->Email}}" name="Email" type="text" class="form-control" placeholder="Nomor Telpon">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                   <div class="col-md-6">
                    <label>Nomor Telpon</label>
                    <input id="Nomor_Telpon" value="{{$ubah_petani->Nomor_Telpon}}" name="Nomor_Telpon" type="text" class="form-control" placeholder="Nomor Telpon">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                   <div class="col-md-6">
                    <label>Pendidikan Terakhir</label>
                    <input id="Pendidikan_Terakhir" value="{{$ubah_petani->Pendidikan_Terakhir}}" name="Pendidikan_Terakhir" type="text" class="form-control" placeholder="Pendidikan Terakhir">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                   <div class="col-md-6">
                    <label>Jumlah Tanggungan</label>
                    <input id="Jumlah_Tanggungan" value="{{$ubah_petani->Jumlah_Tanggungan}}" name="Jumlah_Tanggungan" type="text" class="form-control" placeholder="Jumlah Tanggungan">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                   <div class="col-md-6">
                    <label>Agama</label>
                    <input id="Agama" value="{{$ubah_petani->Agama}}" name="Agama" type="text" class="form-control" placeholder="Agama">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                   <div class="col-md-6">
                    <label>Tanggal Lahir</label>
                    <input id="Tanggal_Lahir" value="{{$ubah_petani->Tanggal_Lahir}}" name="Tanggal_Lahir" type="date" class="form-control" placeholder="Tanggal Lahir">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                   <div class="col-md-6">
                    <label>Deskripsi Keahlian</label>

                    <input id="Deskripsi_Keahlian" value="{{$ubah_petani->Deskripsi_Keahlian}}" name="Deskripsi_Keahlian" type="text" class="form-control" placeholder="Deskripsi Keahlian">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                   <div class="col-md-6">
                    <label>Status</label>
                    <select class="form-control form-control-lg" name="Status">
                      <option value="1">Aktif</option>
                      <option value="0">Tidak Aktif</option>
                    </select>
                    
                  </div>
                </div>
              </div>




            
            
            
             

            

            
         <div class="form-group">
            <div class = "row">
              <div class="col-md-6">
                <input class="btn btn-primary btn-sm" type="submit" value="Ubah">
                </div>
              </div>
         </div>   
            
            
            </form>
          </div>
        </div>
@endsection