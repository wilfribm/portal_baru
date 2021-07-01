@extends('admin.layouts.admin_base')

@section('content')
    <a href="{{ url()->previous() }}" class="btn btn-light btn-sm">&laquo; Go Back</a>
    <h1>Edit Slide</h1>
    {!! Form::open(['action' => ['\App\Http\Controllers\slideController@update', $slide->id], 
    'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <h3>{{$slide->id}}</h3>

        <div class="form-group">
            {{Form::label('judul', 'Judul Slide')}}
            {{Form::text('judul', $slide->judul, ['class' => 'form-control', 'placeholder' => 'Judul Slide'])}}
        </div>

        <div class="form-group">
            {{Form::label('keterangan', 'Keterangan')}}
            {{Form::textarea('keterangan', $slide->keterangan, ['class' => 'form-control', 'placeholder' => 'Keterangan'])}}
        </div>

        <div class="form-group">
            {{Form::label('', 'Foto Slide')}} 
            <br>
            {!! Form::file('foto') !!}
        </div>

        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Save', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    <br>
@endsection
