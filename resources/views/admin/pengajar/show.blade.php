@extends('admin.layouts.admin_base')

@section('content')
    @php $url = url()->current(); @endphp

    <a href="{{ substr($url,0,strrpos($url,'/')) }}" class="btn btn-light btn-sm">&laquo; Go Back</a>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <br>
                <div class="card">

                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="userData ml-3">
                                    <h1 class="d-block">{{$detail->nama}}</h1>
                                    <h6 class="d-block"><a href="javascript:void(0)">{{$jumTopik}}</a> Topik</h6>
                                    <h6 class="d-block"><a href="javascript:void(0)">{{$jumMateri}}</a> Materi</h6>
                                </div>
                            </div>
                        </div>

                        <a class="btn btn-primary float-right" href="{{$detail->ID_User}}/edit">
                            Edit
                        </a>

                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs nav-fill mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" 
                                        aria-controls="basicInfo" aria-selected="true">Basic Info</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="topikMateri-tab" data-toggle="tab" href="#topikMateri" role="tab" 
                                        aria-controls="topikMateri" aria-selected="false">Topik & Materi</a>
                                    </li>
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    {{-- Basic Info --}}
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Nama Lengkap</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$detail->nama}}
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">User ID</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$detail->ID_User}}
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Jenis Kelamin</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                @if ($detail->jenis_kelamin == 1)
                                                    Laki - laki
                                                @else
                                                    Perempuan
                                                @endif
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Birth Date</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$detail->tanggal_lahir}}
                                            </div>
                                        </div>
                                        <hr />
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Alamat</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$detail->alamat}}
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Nomor Telepon</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$detail->nomor_telpon}}
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Email</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$detail->Email}}
                                            </div>
                                        </div>
                                        <hr />
                                    </div>
                                    {{-- Topik & Materi --}}
                                    <div class="tab-pane fade" id="topikMateri" role="tabpanel" aria-labelledby="topikMateri-tab">
                                        @if (count($topiks) > 0)
                                            <div class="accordion" id="accordionExample">
                                                @php
                                                    $i=0;
                                                @endphp
                                                @foreach ($topiks as $topik)
                                                    @php
                                                        $i=$i+1;
                                                    @endphp
                                                    <div class="card">
                                                        <div class="card-header" id="heading{{$i}}">
                                                            <h2 class="mb-0">
                                                                <button class="btn btn-link btn-block text-left" type="button" 
                                                                data-toggle="collapse" data-target="#collapse{{$i}}" aria-expanded="true" 
                                                                aria-controls="collapse{{$i}}">
                                                                    <label>Topik {{$i}}: {{$topik->Topik}}</label>
                                                                </button>
                                                            </h2>
                                                        </div>

                                                        @if (count($materis) > 0)
                                                            @php
                                                                $j=0;
                                                            @endphp
                                                            <div id="collapse{{$i}}" class="collapse show" aria-labelledby="heading{{$i}}" 
                                                            data-parent="#accordionExample">
                                                                <div class="card-body">
                                                                    @foreach ($materis as $materi)
                                                                        @if ($materi->ID_Topik == $topik->ID_Topik)
                                                                            @php
                                                                                $j=$j+1;
                                                                            @endphp 
                                                                            <p>Materi {{$j}}: {{$materi->nama_materi}}</p><hr />                                                                            
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        @else
                                                            <div id="collapse{{$i}}" class="collapse show" aria-labelledby="heading{{$i}}" 
                                                            data-parent="#accordionExample">
                                                                <div class="card-body">
                                                                    <div class="alert alert-info alert-dismissible fade show">
                                                                        <strong>Info!</strong> Topik ini belum memiliki Materi.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>
                                                @endforeach
                                            </div>
                                        @else
                                            <div class="alert alert-info alert-dismissible fade show">
                                                <strong>Info!</strong> Pengajar belum memiliki Topik & Materi.
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> {{-- CARD --}}

                </div>
            </div>
        </div>
    </div>
@endsection
