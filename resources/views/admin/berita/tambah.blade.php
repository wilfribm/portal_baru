@extends('admin.layouts.admin_base_berita')

@section('content')

    <a href="{{ url()->previous() }}" class="btn btn-light btn-sm">&laquo; Go Back</a>
    <h1>Buat Berita</h1>
    {!! Form::open(['action' => '\App\Http\Controllers\BeritaController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        
        <div class="hidden">
            <!-- {{Form::label('judul', 'Judul Berita')}} -->
            {{Form::hidden('id', '', ['class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('judul', 'Judul Berita')}}
            {{Form::text('judul', '', ['class' => 'form-control', 'placeholder' => 'Judul Berita'])}}
        </div>

        <div class="form-group">
            {{Form::label('isi', 'Isi Berita')}}
            {{Form::textarea('isi', '', ['class' => 'form-control summernote', 'placeholder' => 'isi Berita'])}}
        </div>

        <div class="form-group">
            {{Form::label('', 'Foto')}} 
            <br>
            {!! Form::file('foto') !!}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
    <br>
@endsection