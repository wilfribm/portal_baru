@extends('admin.layouts.admin_base')

@section('content')
    <a href="{{ url()->previous() }}" class="btn btn-light btn-sm">&laquo; Go Back</a>
    <h1>Buat slide</h1>
    {!! Form::open(['action' => '\App\Http\Controllers\slideController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        
        <div class="hidden">
            
            {{Form::hidden('id', '', ['class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('judul', 'Judul slide')}}
            {{Form::text('judul', '', ['class' => 'form-control', 'placeholder' => 'Judul Slide'])}}
        </div>

        <div class="form-group">
            {{Form::label('keterangan', 'Keterangan')}}
            {{Form::textarea('keterangan', '', ['class' => 'form-control', 'placeholder' => 'Keterangan'])}}
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