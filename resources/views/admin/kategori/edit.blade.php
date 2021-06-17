@extends('admin.layouts.admin_base')

@section('content')
    <a href="{{ url()->previous() }}" class="btn btn-light btn-sm">&laquo; Go Back</a>
    <h1>Buat Kategori</h1>
    {!! Form::open(['action' => ['\App\Http\Controllers\KategoriController@update', $kategori->ID_Kategori], 
    'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <h3>{{$kategori->ID_Kategori}}</h3>

        <div class="form-group">
            {{Form::label('Nama_Kategori', 'Nama Kategori')}}
            {{Form::text('Nama_Kategori', $kategori->Nama_Kategori, ['class' => 'form-control', 'placeholder' => 'Nama Kategori'])}}
        </div>

        <div class="form-group">
            {{Form::label('Deskripsi', 'Deskripsi')}}
            {{Form::textarea('Deskripsi', $kategori->Deskripsi, ['class' => 'form-control', 'placeholder' => 'Deskripsi Kategori'])}}
        </div>

        <div class="form-group">
            {{Form::label('', 'Gambar')}} 
            <br>
            {!! Form::file('gambar_kat') !!}
        </div>

        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Save', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    <br>
@endsection
