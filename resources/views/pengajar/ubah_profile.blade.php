
@extends('pengajar.pengajar_template')

@section('content')

<div class="col">
    <div class="row">
      <div class="col mb-3">
        <div class="card">
          <div class="card-body">
            <div class="e-profile">
              <div class="row">
                <div class="col-12 col-sm-auto mb-3">
                  <div class="mx-auto" style="width: 140px;">
                    <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                    {{csrf_field()}}
                      <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">
                        <img class="card-img-top" src="{{ asset('foto_pengajar/' . $showprofile->Foto) }}" alt="Card image cap">140x140
                      </span>
                    </div>
                  </div>
                </div>
<div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-center text-sm-left mb-2 mb-sm-0">
                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">{{Session::get('ID_User')}} </h4>
                    <p class="mb-0">{{ $showprofile->nama }}</p>
                    <!-- <div class="text-muted"><small>Last seen 2 hours ago</small></div> -->
                    <div class="mt-2">
                      <!-- <button class="btn btn-primary" type="button">
                        <i class="fa fa-fw fa-camera"></i>
                        <span>Change Photo</span>
                      </button> -->
                    </div>
                  </div>
                  <div class="text-center text-sm-right">
                    <span class="badge badge-secondary">pengajar</span>
                    <!-- <div class="text-muted"><small>Joined 09 Dec 2017</small></div> -->
                  </div>
                </div>
              </div>
              <ul class="nav nav-tabs">
                <li class="nav-item"><a href="" class="active nav-link">Profile</a></li>
              </ul>

              <div class="tab-content pt-3">
                <div class="tab-pane active">
                  <form class="form" method="POST" enctype="multipart/form-data" action="/pengajar/updateprofile/{{$showprofile->ID_User}}">
                    {{ csrf_field() }}
                    
                    <div class="row">
                      <div class="col">
                        <div class="row">
                        <label for="formFile" class="form-label">Ganti Foto</label>
                              <div id="preview"></div>
                              <input class="form-control" type="file" name="Foto" value="{{$showprofile->Foto}}" id="file" onchange="return validasiEkstensi()">

                          <div class="col">
                            <div class="form-group">
                              <label>Nama Lengkap</label>
                              <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" value="{{ $showprofile->nama }}">
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Username</label>
                              <input class="form-control" type="text" name="username" placeholder="{{ $showprofile->ID_User }}" value="{{ $showprofile->ID_User }}">
                            </div>
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Jenis Kelamin</label>
                              <select class="form-control" aria-label="Default select example" name="jenis_kelamin">
                                <option value="1">Laki - Laki</option>
                                <option value="2">Perempuan</option>
                              </select>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Email</label>
                              <input class="form-control" type="email" name="Email" placeholder="Email" value="{{$showprofile->Email}}">
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Tanggal Lahir</label>
                              <input class="form-control" type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" value="{{$showprofile->tanggal_lahir}}">
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Nomor Telpon</label>
                              <input class="form-control" type="text" name="nomor_telpon" placeholder="Nomor Telpon" value="{{$showprofile->nomor_telpon}}">
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label for="provinsi">Provinsi</label>
                              <select name="provinsi" id="provinsi" class="form-control" placeholder="provinsi">
                               <option value="">Pilih Provinsi</option>
                                @foreach($provinsi as $p)
                                <option value="{{$p->Nama_Provinsi}}">{{$p->Nama_Provinsi}}</option>
                                @endforeach
                                </select>  
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label for="kabupaten">Kabupaten</label>
                              <select class="form-control" name="kabupaten" id="kabupaten">
                                <option value="">Pilih Kabupaten</option>  
                              </select>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Kecamatan</label>
                              <select class="form-control" name="kecamatan" id="kecamatan">
                                <option value="">Pilih Kecamatan</option>  
                              </select>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Kelurahan / Desa</label>
                              <select class="form-control" name="kelurahan_desa" id="kelurahan_desa">
                                <option value="">Pilih Kelurahan</option>  
                               </select>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Alamat</label>
                               <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat">{{$showprofile->alamat}}</textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>
                    <div class="row">
                      <div class="col d-flex justify-content-end">
                        <a href="{{url('pengajar/profile')}}" class="btn btn-success" style="margin-right: 5px;">Kembali</a>
                        <button class="btn btn-primary" type="submit">Simpan Perubahan</button>
                      </div>
                    </div>
                  </form>

                  <script type="text/javascript">
                    function validasiEkstensi(){
                    var inputFile = document.getElementById('file');
                    var pathFile = inputFile.value;
                    var ekstensiOk = /(\.jpg|\.jpeg|\.png)$/i;
                    if(!ekstensiOk.exec(pathFile)){
                        alert('Silakan upload file yang memiliki ekstensi .jpg/.png');
                        inputFile.value = '';
                        return false;
                    }else{
                        // Preview gambar
                        if (inputFile.files && inputFile.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function(e) {
                                document.getElementById('preview').innerHTML = '<img src="'+e.target.result+'" style="height:150px;"/>';
                            };
                            reader.readAsDataURL(inputFile.files[0]);
                        }
                    }
                }
                  </script>
                   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

                   <script>
                    $(document).ready(function() {
                        
                    $('#provinsi').on('change', function() {
                    var Nama_Provinsi = this.value;
                    $("#kabupaten").html('');
                    $.ajax({
                    url:"{{url('/pengajar/ubahprofil/ambilKabupaten/')}}",
                    type: "POST",
                    data: {
                    Nama_Provinsi: Nama_Provinsi,
                    _token: '{{csrf_token()}}' 
                    },
                    dataType : 'json',
                    success: function(result){
                    $('#kabupaten').html('<option value="">Pilih Kabupaten</option>'); 
                    $.each(result.kabupaten,function(key,value){
                    $("#kabupaten").append('<option value="'+value.Nama_Provinsi+'">'+value.Nama_Kabupaten+'</option>');
                    });
                    $('#kecamatan').html('<option value="">Silakan pilih kabupaten</option>'); 
                    }
                    });
                    });
                    
                    $('#kabupaten').on('change', function() {
                    var Nama_Kabupaten = this.value;
                    $("#kecamatan").html('');
                    $.ajax({
                    url:"{{url('ambilKecamatan')}}",
                    type: "POST",
                    data: {
                    Nama_Kabupaten: Nama_Kabupaten,
                    _token: '{{csrf_token()}}' 
                    },
                    dataType : 'json',
                    success: function(result){
                    $('#kecamatan').html('<option value="">Pilih Kecamatan</option>'); 
                    $.each(result.kecamatan,function(key,value){
                    $("#kecamatan").append('<option value="'+value.Nama_Kecamatan+'">'+value.Nama_Kabupaten+'</option>');
                    });
                    $('#kelurahan_desa').html('<option value="">Silakan pilih kecamatan</option>'); 
                    }
                    });
                    });    
                    });
                    </script>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


@endsection