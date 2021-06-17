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
                                    {!! Form::open(['action' => ['\App\Http\Controllers\ApprovalController@update', 
                                    $detail->ID_User], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                                        {!! Form::hidden('priv', 1) !!}
                                        {{Form::hidden('_method', 'PUT')}}
                                        {{Form::submit('Terima', ['class'=>'btn btn-primary btn-sm'])}}
                                    {!! Form::close() !!}
                                    <br>
                                    {!!Form::open(['action' => ['\App\Http\Controllers\ApprovalController@destroy', 
                                    $detail->ID_User], 'method' => 'POST'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Tolak', ['class' => 'btn btn-danger btn-sm'])}}
                                    {!!Form::close()!!}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" 
                                        role="tab" aria-controls="basicInfo" aria-selected="true">Basic Info</a>
                                    </li>
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                        

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Full Name</label>
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
                                </div>
                            </div>
                        </div>
                    </div> {{-- CARD --}}

                </div>
            </div>
        </div>
    </div>
@endsection
