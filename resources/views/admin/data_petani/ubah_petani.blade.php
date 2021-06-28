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
          <div class="col-lg-6">
            <form action="/update/{{$ubah_petani->ID_User}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
               
                <!-- <div class="col-md-6">
                    <select name="ID_Kategori" value="{{old('ID_Kategori')}}" id="ID_Kategori" class="form-control" placeholder="ID_Kategori" readonly>
                      <option value="PET">Petani</option>
                    </select>
                </div> -->
                <div class="col-mb-3">
                    <label>Nama Lengkap</label>
                    <input id="Nama_Petani" value="{{$ubah_petani->Nama_Petani}}" name="Nama_Petani" type="text" class="form-control" placeholder="Username">
                </div>
                <div class="col-mb-3">
                    <label>Alamat</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Alamat_Petani" placeholder="Alamat">{{$ubah_petani->Alamat_Petani}}</textarea>
                  </div>
                  <div class="col-mb-3">
                    <label>Email</label>
                    <input id="Nomor_Telpon" value="{{$ubah_petani->Email}}" name="Email" type="text" class="form-control" placeholder="Nomor Telpon">
                  </div>
                  <div class="col-mb-3">
                    <label>Nomor Telpon</label>
                    <input id="Nomor_Telpon" value="{{$ubah_petani->Nomor_Telpon}}" name="Nomor_Telpon" type="text" class="form-control" placeholder="Nomor Telpon">
                  </div>
                  <div class="col-mb-3">
                    <label>Pendidikan Terakhir</label>
                    <input id="Pendidikan_Terakhir" value="{{$ubah_petani->Pendidikan_Terakhir}}" name="Pendidikan_Terakhir" type="text" class="form-control" placeholder="Pendidikan Terakhir">
                  </div>
                  <div class="col-mb-3">
                    <label>Jumlah Tanggungan</label>
                    <input id="Jumlah_Tanggungan" value="{{$ubah_petani->Jumlah_Tanggungan}}" name="Jumlah_Tanggungan" type="text" class="form-control" placeholder="Jumlah Tanggungan">
                  </div>
                  <div class="col-mb-3">
                    <label>Agama</label>
                    <input id="Agama" value="{{$ubah_petani->Agama}}" name="Agama" type="text" class="form-control" placeholder="Agama">
                  </div>
                  <div class="col-mb-3">
                    <label>Tanggal Lahir</label>
                    <input id="Tanggal_Lahir" value="{{$ubah_petani->Tanggal_Lahir}}" name="Tanggal_Lahir" type="date" class="form-control" placeholder="Tanggal Lahir">
                  </div>
                  <div class="col-mb-3">
                    <label>Deskripsi Keahlian</label>

                    <input id="Deskripsi_Keahlian" value="{{$ubah_petani->Deskripsi_Keahlian}}" name="Deskripsi_Keahlian" type="text" class="form-control" placeholder="Deskripsi Keahlian">
                  </div>
                  <div class="col-mb-3">
                    <label>Status</label>
                    <select class="form-control form-control-lg" name="Status">
                      <option value="1">Aktif</option>
                      <option value="0">Tidak Aktif</option>
                    </select>
                    
                  </div>
                  <div class="col-mb-3" style="margin-top: 10px;">
                <input class="btn btn-primary btn-lg" type="submit" value="Ubah">
            </div>
                


            
          </div>
          <div class="col-lg-6">
            
            
            <div class="col-mb-3">
                    <label>Nama Istri</label>
                    <input id="nama_istri" value="{{$ubah_petani->nama_istri}}" name="nama_istri" type="text" class="form-control" placeholder="Nama Istri">
            </div>
            
            <div class="col-mb-3">
                    <label>Jumlah Tenaga Kerja Musiman</label>
                    <input id="jml_tng_kerja_musiman" value="{{$ubah_petani->jml_tng_kerja_musiman}}" name="jml_tng_kerja_musiman" type="text" class="form-control" placeholder="Jumlah Tenaga Kerja Musiman">
            </div>
            <div class="col-mb-3">
                    <label>Jumlah Lahan</label>
                    <input id="jml_lahan" value="{{$ubah_petani->jml_lahan}}" name="jml_lahan" type="text" class="form-control" placeholder="Jumlah Lahan">
            </div>
            
            <div class="col-mb-3">
                    <label>Foto</label>
                    <input type="file" class="form-control" id="exampleFormControlFile1" name="Foto">
            </div>

            <!-- <div class="col-mb-3">
                    <label>Kelurahan / Desa</label>
                    <select class="form-control form-control-lg" name="Nama_Desa">
                      <option>---Pilih Kelurahan / Desa---</option>
                      @foreach($kelurahan_desa as $kd)
                      <option value="{{$kd->Nama_Desa}}">{{$kd->Nama_Desa}}</option>
                      @endforeach
                    </select>
            </div>
            <div class="col-mb-3">
                    <label>Kecamatan</label>
                    <select class="form-control form-control-lg" name="Nama_Kecamatan">
                      <option>---Pilih Kecamatan---</option>
                      @foreach($kecamatan as $kc)
                      <option value="{{$kc->Nama_Kabupaten}}">{{$kc->Nama_Kecamatan}}</option>
                      @endforeach
                    </select>
            </div>
            <div class="col-mb-3">
                    <label>Kabupaten</label>
                    <select class="form-control form-control-lg" name="Nama_Kabupaten">
                      <option>---Pilih Kabupaten---</option>
                      @foreach($kabupaten as $kb)
                      <option value="{{$kb->Nama_Kabupaten}}">{{$kb->Nama_Kabupaten}}</option>
                      @endforeach
                    </select>
            </div>
            <div class="col-mb-3">
                    <label>Provinsi</label>
                    <select class="form-control form-control-lg" name="Nama_Provinsi">
                      <option>---Pilih Provinsi---</option>
                      @foreach($provinsi as $prov)
                      <option value="{{$prov->Nama_Provinsi}}">{{$prov->Nama_Provinsi}}</option>
                      @endforeach
                    </select>
            </div> -->
            
            

            </form>
          </div>
          
        </div>
@endsection