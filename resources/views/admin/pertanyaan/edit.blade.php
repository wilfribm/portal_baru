@extends('admin.layouts.admin_base')

@section('content')
    <a href="{{ url()->previous() }}" class="btn btn-light btn-sm">&laquo; Go Back</a>
    <h2>Arahkan Pertanyaan</h2>
    {!! Form::open(['action' => ['\App\Http\Controllers\PertanyaanController@update', 
    $pertanyaan->pertanyaan_id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            @if (!empty($pertanyaan->gambar_pertanyaan))
                <div class="row">
                    <div class="col-sm-3 col-md-2 col-5">
                        <label style="font-weight:bold;">Gambar</label>
                    </div>
                    <div class="col-md-8 col-6">
                        <img style= "width: 40%" src="./../../../gambar_pertanyaan/{{$pertanyaan->gambar_pertanyaan}}">
                    </div>
                </div>
                <hr />
            @endif
            {{Form::label('ID_Penanya', 'Penanya')}}
            <input disabled type="text" class="form-control" placeholder="{{$pertanyaan->ID_Penanya}}">
        </div>
        <div class="form-group">
            {{Form::label('ID_Penjawab', 'Penjawab')}}
            @if (empty($pertanyaan->ID_Penjawab))
                {{ Form::select('ID_Penjawab', $pengajarOptions, null, ['class'=>'form-control']) }}
            @else
                <input disabled type="text" class="form-control" placeholder="{{$pertanyaan->ID_Penjawab}}">
            @endif
        </div>
        <div class="form-group">
            {{Form::label('pertanyaan_isi', 'Pertanyaan')}}
            <div>
                <textarea disabled class="form-control">{{$pertanyaan->pertanyaan_isi}}</textarea>
            </div>
        </div>
        <div class="form-group">
            {{Form::label('jawaban_isi', 'Jawaban')}}
            <div>
                {{Form::textarea('jawaban_isi', $pertanyaan->jawaban_isi, ['class' => 'form-control', 'placeholder' => 'Jawaban'])}}
            </div>
        </div>

        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Save', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    <br>
@endsection
