@extends('admin.layouts.admin_base')

@section('content')
    <a href="{{ url()->previous() }}" class="btn btn-light btn-sm">&laquo; Go Back</a>
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
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs nav-fill mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" 
                                        role="tab" aria-controls="basicInfo" aria-selected="true">Basic Info</a>
                                    </li>
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    {{-- Basic Info --}}
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                        {!! Form::open(['action' => ['\App\Http\Controllers\PengajarController@update', 
                                        $detail->ID_User], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                            <div class="row">
                                                <div class="col-sm-3 col-md-2 col-5">
                                                    {{Form::label('nama', 'Nama Lengkap')}}                                                
                                                </div>
                                                <div class="col-md-8 col-6">
                                                    {{Form::text('nama', $detail->nama, ['class' => 'form-control', 
                                                    'placeholder' => 'Nama Lengkap'])}}
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
                                                    {{Form::label('tanggal_lahir', 'Tanggal Lahir')}}
                                                </div>
                                                <div class="col-md-8 col-6">
                                                    {{Form::text('tanggal_lahir', $detail->tanggal_lahir, ['class' => 'form-control', 
                                                    'placeholder' => 'YYYY-MM-DD'])}}
                                                </div>
                                            </div>
                                            <hr />
                                            
                                            <div class="row">
                                                <div class="col-sm-3 col-md-2 col-5">
                                                    {{Form::label('alamat', 'Alamat')}}
                                                </div>
                                                <div class="col-md-8 col-6">
                                                    {{Form::text('alamat', $detail->alamat, ['class' => 'form-control', 
                                                    'placeholder' => 'Alamat'])}}
                                                </div>
                                            </div>
                                            <hr />

                                            <div class="row">
                                                <div class="col-sm-3 col-md-2 col-5">
                                                    {{Form::label('nomor_telpon', 'Nomor Telepon')}}
                                                </div>
                                                <div class="col-md-8 col-6">
                                                    {{Form::text('nomor_telpon', $detail->nomor_telpon, ['class' => 'form-control', 
                                                    'placeholder' => 'Nomor Telepon'])}}
                                                </div>
                                            </div>
                                            <hr />

                                            <div class="row">
                                                <div class="col-sm-3 col-md-2 col-5">
                                                    {{Form::label('Email', 'Email')}}
                                                </div>
                                                <div class="col-md-8 col-6">
                                                    {{Form::text('Email', $detail->Email, ['class' => 'form-control', 
                                                    'placeholder' => 'Email'])}}
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="text-center">
                                                {{Form::hidden('_method', 'PUT')}}
                                                {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                                            </div>
                                        {!! Form::close() !!}
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
