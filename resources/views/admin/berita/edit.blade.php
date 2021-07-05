@extends('admin.layouts.admin_base_berita')

@section('content')
    <a href="{{ url()->previous() }}" class="btn btn-light btn-sm">&laquo; Go Back</a>
    <h1>Edit Berita</h1>
    {!! Form::open(['action' => ['\App\Http\Controllers\BeritaController@update', $berita->id], 
    'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <h3>{{$berita->id}}</h3>

        <div class="form-group">
            {{Form::label('judul', 'Judul Berita')}}
            {{Form::text('judul', $berita->judul, ['class' => 'form-control', 'placeholder' => 'Judul Berita'])}}
        </div>

        <div class="form-group">
            {{Form::label('isi', 'Isi Berita')}}
            {{Form::textarea('isi', $berita->isi, ['class' => 'form-control summernote', 'placeholder' => 'Isi Berita'])}}
        </div>

        <div class="form-group">
            {{Form::label('', 'Foto berita')}} 
            <br>
            {!! Form::file('foto') !!}
        </div>

        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Save', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    <br>
@endsection
