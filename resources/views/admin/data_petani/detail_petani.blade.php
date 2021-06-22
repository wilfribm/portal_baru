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
                                  src="{{asset('img/favicon.ico')}}" alt="Card image cap">
                                  <div class="card-body">
                                    <h5 class="card-title">ID User  : {{$detail_petani->ID_User}}</h5>

                                    <h5 class="card-title" style="margin-top: 5px;">Nama Lengkap : {{$detail_petani->Nama_Petani}}</h5>
                                    <h5 class="card-title" style="margin-top: 5px;">Alamat : {{$detail_petani->Alamat_Petani}}</h5>
                                    <h5 class="card-title" style="margin-top: 5px;">Nomor Telepon : {{$detail_petani->Nomor_Telpon}}</h5>

                                    <h5 class="card-title" style="margin-top: 5px;">Pendidikan Terakhir : {{$detail_petani->Pendidikan_Terakhir}}</h5>

                                    <h5 class="card-title" style="margin-top: 5px;">Jumlah Tanggungan  : {{$detail_petani->Jumlah_Tanggungan}}</h5> 

                                   

                                    <h5 class="card-title" style="margin-top: 5px;">Agama : {{$detail_petani->Agama}}</h5>



                                    <h5 class="card-title" style="margin-top: 5px;">Tanggal Lahir : {{$detail_petani->Tanggal_Lahir}}</h5>

                                    <h5 class="card-title" style="margin-top: 5px;">Deskripsi Keahlian : {{$detail_petani->Deskripsi_Keahlian}}</h5>

                                    <h5 class="card-title" style="margin-top: 5px;">Status Petani : 
                                        
                                        @if($detail_petani->Status == 1)
                                        <a href="#" class="btn btn-sm btn-success">Aktif</a>
                                        @else
                                        <a href="#" class="btn btn-sm btn-danger">Tidak Aktif</a>
                                        @endif

                                    </h5>
                                    <h5 class="card-title" style="margin-top: 5px;">Email Petani : {{$detail_petani->Email}}</h5>   
                                  </div>
                                </div>
                                    
                                
                         </div>   
                        </div>  
                            
                    <div class="row">
                        <div class="col-md-12 text-left">
                            <a class="btn btn-lg btn-danger" href="{{url('admin/daftar/petani/semua')}}">Back</a>
                        </div>
                    </div>
                </div>
@endsection