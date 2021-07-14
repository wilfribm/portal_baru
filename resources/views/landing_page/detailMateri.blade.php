@extends('landing_page.layout')

@section('content')
    @foreach($detailMateri as $data)
    <div class="container" style="padding-top:80px;padding-bottom:80px;">
        <div class="row">
            <div class="col-12">
                <br>
                <div class="card">

                    <div class="card-body">
                            <div class="d-flex justify-content-start">
                                <div class="userData ml-3">
                                    <h2 class="d-block">{{$data->nama_materi}}</h2>
                                    <label style="font-weight:bold;">Oleh: {{$data->nama}} | {{$data->create_at}} | </label>
                                    <label style="font-weight:bold;">
                                    @foreach ($materi as $m)
                                        @if( file_exists( public_path('/materipengajar/' . $m->dokumen) ))
                                        <a href="./../../materipengajar/{{$m->dokumen}}"><i class="far fa-file-pdf"></i> Download Materi</a>
                                        @endif
                                    @endforeach
                                    </label>
                                </div>
                            </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                        <div class="row" style="margin:auto;">
                                            <div class="responsive-video">
                                                <iframe src="{{ $data->link_video }}" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-md-8">
                                                <h4>Deskripsi</h4>{!!$data->deskripsi!!}
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
    @endforeach
@endsection