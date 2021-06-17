@extends('admin.layouts.admin_base')

@section('content')
    <a href="{{ url()->previous() }}" class="btn btn-light btn-sm">&laquo; Go Back</a>
    <h1>Buat Kategori</h1>
    {!! Form::open(['action' => '\App\Http\Controllers\KategoriController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('ID_Kategori', 'ID')}}
            {{Form::text('ID_Kategori', '', ['class' => 'form-control', 'placeholder' => 'Format "KL(nomor), ex: KL1"'])}}
        </div>

        <div class="form-group">
            {{Form::label('Nama_Kategori', 'Nama Kategori')}}
            {{Form::text('Nama_Kategori', '', ['class' => 'form-control', 'placeholder' => 'Nama Kategori'])}}
        </div>

        <div class="form-group">
            {{Form::label('Deskripsi', 'Deskripsi')}}
            {{Form::textarea('Deskripsi', '', ['class' => 'form-control', 'placeholder' => 'Deskripsi Kategori'])}}
        </div>

        <div class="form-group">
            {{Form::label('', 'Gambar')}} 
            <br>
            {!! Form::file('gambar_kat') !!}
        </div>

        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    <br>
@endsection