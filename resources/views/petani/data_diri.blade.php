
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
                                  src="{{ asset('foto_petani/' . $detail->Foto) }}" alt="Card image cap"></span>
                    </div>
                  </div>
                </div>
          <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-center text-sm-left mb-2 mb-sm-0">
                    
                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">{{Session::get('ID_User')}} </h4>
                    
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
                    <span class="#">
                      <a href="{{url('cetak/petani')}}/{{$lahan->ID_User}}" class="btn btn-sm btn-info" target="_blank">Cetak Kartu Anggota</a>
                      @if($lahan->Status == 1)
                                        <a href="#" class="btn btn-sm btn-success"> Status : <b>Aktif</b></a>
                                        @else
                                        <a href="#" class="btn btn-sm btn-danger">Status : <b>Tidak Aktif</b></a>
                                        @endif

                    </span>
                    <!-- <div class="text-muted"><small>Joined 09 Dec 2017</small></div> -->
                  </div>
                </div>
              </div>

              <ul class="nav nav-tabs">
                <li class="nav-item"><a href="" class="active nav-link">Profile</a></li>

              </ul>
              <div class="tab-content pt-3">
                <div class="tab-pane active">
                  <form class="form" novalidate="">
                    <div class="row">
                      <div class="col">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Nama Lengkap</label>
                              <input class="form-control" type="text" name="name" placeholder="Nama Lengkap" value="{{$detail->nama}}" readonly>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Username</label>
                              <input class="form-control" type="text" name="username" placeholder="Username" value="{{$detail->ID_User}}" readonly>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Jenis Kelamin</label>
                              <input class="form-control" type="text" name="jenis_kelamin" placeholder="Jenis Kelaim" value="@if($detail->jenis_kelamin == 1)Laki - Laki @else Perempuan @endif " readonly>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Tanggal Lahir</label>
                              <input class="form-control" type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" value="{{$detail->tanggal_lahir}}" readonly>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Nomor Telpon</label>
                              <input class="form-control" type="text" name="nomor_telpon" placeholder="Nomor Telpon" value="{{$detail->nomor_telpon}}" readonly>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Email</label>
                              <input class="form-control" type="email" name="Email" placeholder="Email" value="{{$detail->Email}}" readonly>
                            </div>
                          </div>
                        </div>
                        
                        <div class="row">
                          
                          <div class="col">
                            <div class="form-group">
                              <label>Provinsi</label>
                              <input class="form-control" type="text" name="provinsi" placeholder="Provinsi" value="{{$detail->provinsi}}" readonly>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Kabupaten</label>
                              <input class="form-control" type="text" name="kabupaten" placeholder="Kabupaten" value="{{$detail->kabupaten}}" readonly> 
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Kecamatan</label>
                              <input class="form-control" type="text" name="kecamatan" placeholder="Kecamatan" value="{{$detail->kecamatan}}" readonly>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Kelurahan / Desa</label>
                              <input class="form-control" type="text" name="kelurahan_desa" placeholder="Kelurahan/Desa" value="{{$detail->kelurahan_desa}}" readonly>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Alamat</label>
                               <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat" readonly>{{$detail->alamat}}</textarea>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Jumlah Lahan</label>
                              <input class="form-control" type="text" name="jml_lahan" placeholder="Jumlah Lahan" value="{{$lahan->jml_lahan}}" readonly>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Jumlah Tenaga Kerja Musiman</label>
                              <input class="form-control" type="text" name="jml_tng_kerja_musiman" placeholder="Jumlah Tenaga Kerja Musiman" value="{{$lahan->jml_tng_kerja_musiman}}" readonly>
                            </div>
                          </div>
                        </div>
                        

                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                            
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    </div>
                    <div class="row">
                      <div class="col justify-content-end">
                        <button class="btn btn-warning btn-sm"><a style="color:white; text-decoration:none;" href="/ganti/password/{{$detail->ID_User}}">Ganti Password</a></button>
                        <button class="btn btn-primary btn-sm"><a style="color:white; text-decoration:none;" href="/ubah/profile/{{$detail->ID_User}}">Ubah Profile</a></button>
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