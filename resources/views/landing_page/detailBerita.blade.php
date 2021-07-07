@extends('landing_page.layout')

@section('content')    
    <div class="container" style="padding-top:80px;">
        <div class="row">
            <div class="col-12">
                <br>
                <div class="card">

                    <div class="card-body">
                            <div class="d-flex justify-content-start">
                                <div class="userData ml-3">
                                    <h2 class="d-block">{{$detailBerita->judul}}</h2>
                                    <label style="font-weight:bold;">Oleh: {{$detailBerita->NIK}} | {{$detailBerita->tanggal}}</label>
                                </div>
                            </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                        <div class="row">
                                                <div class="col-md-8">
                                                    <img style= "width: 100%" src="./../../foto_berita/{{$detailBerita->foto}}">
                                                </div> 
                                        </div> <br/>

                                        <div class="row">
                                            <div class="col-md-8" >
                                                {!!$detailBerita->isi!!}
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection