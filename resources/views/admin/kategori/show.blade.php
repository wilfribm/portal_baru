@extends('admin.layouts.admin_base')

@section('content')
    @php $url = url()->current(); @endphp
    @if(\Session::has('alert'))
        <div class="alert alert-danger">
            <div>{{Session::get('alert')}}</div>
        </div>
    @endif
    @if(\Session::has('alert-success'))
        <div class="alert alert-success">
            <div>{{Session::get('alert-success')}}</div>
        </div>
    @endif

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
                                    <h2 class="d-block">{{$kategori->Nama_Kategori}}</h2>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown">
                            <button class="btn btn-primary float-right dropdown-toggle" type="button" 
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="{{$kategori->ID_Kategori}}/edit">Edit</a>
                              <div class="dropdown-divider"></div>
                                {!!Form::open(['action' => ['\App\Http\Controllers\KategoriController@destroy', 
                                $kategori->ID_Kategori], 'method' => 'POST'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'dropdown-item'])}}
                                {!!Form::close()!!}
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
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Gambar</label>
                                            </div>
                                            @if (!empty($gambar)) 
                                                <div class="col-md-8 col-6">
                                                    <img style= "width: 40%" src="./../../gambar_kategori/{{$gambar->nama}}">
                                                </div>    
                                            @else
                                                <div class="col-md-8 col-6">
                                                    Tidak ada gambar
                                                </div>
                                            @endif
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">ID Kategori</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$kategori->ID_Kategori}}
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Nama Kategori</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$kategori->Nama_Kategori}}
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Deskripsi</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$kategori->Deskripsi}}
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

{{-- {!!Form::open(['action' => ['\App\Http\Controllers\KategoriController@destroy', $kategori->ID_Kategori], 'method' => 'POST', 'class' => 'float-left'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger btn-sm'])}}
{!!Form::close()!!} --}}

