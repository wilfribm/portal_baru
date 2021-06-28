
@extends('petani.layouts.admin_base')
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
                      <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;"><img class="card-img-top" 
                                  src="{{ asset('foto_petani/' . $ambil->Foto) }}" alt="Card image cap"></span>
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  
                </div>
          <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-center text-sm-left mb-2 mb-sm-0">
                    
                 
                   
                    <p class="mb-0">
                      </p>
                    <!-- <div class="text-muted"><small>Last seen 2 hours ago</small></div> -->
                    <div class="mt-2">
                      <!-- <button class="btn btn-primary" type="button">
                        <i class="fa fa-fw fa-camera"></i>
                        <span>Change Photo</span>
                      </button> -->
                    </div>
                  </div>
                  <div class="text-center text-sm-right">
                    <span class="badge badge-secondary">Ubah Petani</span>
                    <!-- <div class="text-muted"><small>Joined 09 Dec 2017</small></div> -->
                  </div>
                </div>
              </div>

              <ul class="nav nav-tabs">
                <li class="nav-item"><a href="" class="active nav-link">Profile</a></li>

              </ul>
              <div class="tab-content pt-3">
                <div class="tab-pane active">
                  <form class="form" method="POST" enctype="multipart/form-data" action="/update/profile/{{$ambil->ID_User}}">
                    {{ csrf_field() }}
                    <div class="row">
                      <div class="col">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label for="formFile" class="form-label">Ganti Foto</label>

                              <input class="form-control" type="file" id="formFile" name="Foto" value="{{$ambil->Foto}}">

                            </div>          
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Nama Lengkap</label>
                              <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" value="{{$ambil->nama}}">
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Username</label>
                              <input class="form-control" type="text" name="username" placeholder="Username" value="{{$ambil->ID_User}}" readonly>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Jenis Kelamin</label>
                              <select class="form-control" aria-label="Default select example" name="jenis_kelamin">
                                <option value="1" <?php if($ambil->jenis_kelamin==1) ?> selected>Laki - Laki</option>
                                <option value="2">Perempuan</option>
                               
                              </select>
                            
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Tanggal Lahir</label>
                              <input class="form-control" type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" value="{{$ambil->tanggal_lahir}}">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Nomor Telpon</label>
                              <input class="form-control" type="text" name="nomor_telpon" placeholder="Nomor Telpon" value="{{$ambil->nomor_telpon}}">
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Email</label>
                              <input class="form-control" type="email" name="Email" placeholder="Email" value="{{$ambil->Email}}">
                            </div>
                          </div>
                        </div>
                        
                        <div class="row">
                          
                          <div class="col">
                            <div class="form-group">
                              <label>Provinsi</label>
                              <select name="provinsi" id="provinsi" class="form-control" placeholder="provinsi">
                              <option>{{$ambil->provinsi}}</option>
                              <option value="ACEH">ACEH</option>
                              <option value="BALI">BALI</option>
                              <option value="BANTEN">BANTEN</option>
                              <option value="BENGKULU">BENGKULU</option>
                              <option value="DI YOGYAKARTA">DI YOGYAKARTA</option>
                              <option value="DKI JAKARTA">DKI JAKARTA</option>
                              <option value="GORONTALO">GORONTALO</option>
                              <option value="JAMBI">JAMBI</option>
                              <option value="JAWA BARAT" >JAWA BARAT</option>
                              <option value="JAWA TENGAH" >JAWA TENGAH</option>
                              <option value="JAWA TIMUR">JAWA TIMUR</option>
                              <option value="KALIMANTAN BARAT">KALIMANTAN BARAT</option>
                              <option value="KALIMANTAN SELATAN">KALIMANTAN SELATAN</option>
                              <option value="KALIMANTAN TENGAH">KALIMANTAN TENGAH</option>
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
                          <div class="col">
                            <div class="form-group">
                              <label>Kabupaten</label>
                              <select class="form-control" name="kabupaten">
                                <?php 

                                $k = DB::SELECT("SELECT * FROM kabupaten WHERE Nama_Provinsi='$ambil->provinsi'");

                                 ?>
                                 <option>{{$ambil->kabupaten}}</option>
                                 @foreach($k as $kab)
                                 <option value="{{$kab->Nama_Kabupaten}}">{{$kab->Nama_Kabupaten}}</option>
                                 @endforeach
                                 
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Kecamatan</label>
                              <select class="form-control" name="kecamatan">
                                <?php 

                                $c = DB::SELECT("SELECT * FROM kecamatan WHERE Nama_Provinsi='$ambil->provinsi'");

                                 ?>
                                 <option>{{$ambil->kecamatan}}</option>
                                 @foreach($c as $kec)
                                 <option value="{{$kec->Nama_Kecamatan}}">{{$kec->Nama_Kecamatan}}</option>
                                 @endforeach
                                 
                              </select>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Kelurahan / Desa</label>
                              <select class="form-control" name="kelurahan_desa">
                                <?php 

                                $d = DB::SELECT("SELECT * FROM kelurahan_desa WHERE Nama_Provinsi='$ambil->provinsi'");

                                 ?>
                                 <option>{{$ambil->kelurahan_desa}}</option>
                                 @foreach($d as $des)
                                 <option value="{{$des->Nama_Desa}}">{{$des->Nama_Desa}}</option>
                                 @endforeach
                               </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Alamat</label>
                               <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat">{{$ambil->alamat}}</textarea>
                            </div>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                    
                    </div>
                    <div class="row">
                      <div class="col d-flex justify-content-end">
                        <button class="btn btn-primary" type="submit">Simpan Perubahan</button>
                      </div>
                    </div>
                  </form>
                 

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


@endsection