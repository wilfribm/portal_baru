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
                        <div class="">
                            <div class="d-flex justify-content-start">
                                <div class="userData ml-3">
                                    <h2 class="d-block">{{$slide->judul}}</h2>
                                </div>
                            </div>
                        </div>
                        

                        <div class="dropdown">
                            <button class="btn btn-primary float-right dropdown-toggle" type="button" 
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="{{$slide->id}}/edit">Edit</a>
                              <div class="dropdown-divider"></div>
                                {!!Form::open(['action' => ['\App\Http\Controllers\slideController@destroy', 
                                $slide->id], 'method' => 'POST'])!!}
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
                                        role="tab" aria-controls="basicInfo" aria-selected="true">Informasi</a>
                                    </li>
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Foto</label>
                                            </div>
                                            @if (!empty($slide)) 
                                                <div class="col-md-8 col-6">
                                                    <img style= "width: 40%" src="./../../foto_slide/{{$slide->foto}}">
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
                                                <label style="font-weight:bold;">Keterangan</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$slide->keterangan}}
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

{{-- {!!Form::open(['action' => ['\App\Http\Controllers\BeritaController@destroy', $berita->id], 'method' => 'POST', 'class' => 'float-left'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger btn-sm'])}}
{!!Form::close()!!} --}}