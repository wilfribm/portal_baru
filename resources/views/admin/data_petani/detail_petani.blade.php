@extends('admin.layouts.admin_base')
@section('content')
<div class="row">
                   <div class="col-md-12">
                        <h1>Detail Petani</h1>
                   </div>

                    <div class="col-lg-12">
                        <!--konten-->
                        <div class="card" style="width: 18rem;">
                                  <img class="card-img-top" 
                                  src="{{ asset('foto_petani/' . $detail_petani->Foto) }}" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title"><b>Username : {{$detail_petani->ID_User}}</b></h5>
                              
                            </div>
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item">Nama Lengkap : {{$detail_petani->Nama_Petani}} </li>
                              <li class="list-group-item">Alamat : {{$detail_petani->Alamat_Petani}}</li>
                              <li class="list-group-item">Nomor Telepon : {{$detail_petani->Nomor_Telpon}}</li>
                              <li class="list-group-item">
                                Pendidikan Terakhir : {{$detail_petani->Pendidikan_Terakhir}}
                              </li>
                              <li class="list-group-item">
                                Jumlah Tanggungan  : {{$detail_petani->Jumlah_Tanggungan}}
                              </li>
                              <li class="list-group-item">
                                Agama : {{$detail_petani->Agama}}
                              </li>
                              <li class="list-group-item">
                                Tanggal Lahir : {{$detail_petani->Tanggal_Lahir}}
                              </li>
                              <li class="list-group-item">
                                Deskripsi Keahlian : {{$detail_petani->Deskripsi_Keahlian}}
                              </li>
                              <li class="list-group-item">
                                Status Petani : 
                                        
                                        @if($detail_petani->Status == 1)
                                        <a href="#" class="btn btn-sm btn-success">Aktif</a>
                                        @else
                                        <a href="#" class="btn btn-sm btn-danger">Tidak Aktif</a>
                                        @endif
                              </li>
                              <li class="list-group-item">
                                Email Petani : {{$detail_petani->Email}}
                              </li>

                            </ul>
                            <div class="card-body">
                              <a href="{{url('admin/daftar/petani/semua')}}" class="btn btn-lg btn-danger btn-sm">Kembali</a>
                              <a href="{{url('reset/password')}}/{{$detail_petani->ID_User}}" class="btn btn-lg btn-warning btn-sm">Ganti Password</a>
                              <a href="{{url('refresh')}}/{{$detail_petani->ID_User}}" class="btn btn-lg btn-info btn-sm">Refresh</a>
                              
                            </div>
                          </div>  
                         </div>   
                        </div>  
                            
                    <div class="row">
                        
                    </div>
                </div>
@endsection