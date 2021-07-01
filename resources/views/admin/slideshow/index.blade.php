@extends('admin.layouts.admin_base')

@section('content')
    <h1 class="m-0 text-dark">List Slideshow</h1>
    <br>

    <p align="right">
        <i>
            <a href="slide/tambah" class="btn btn-primary">&plus; Tambah Slide</a>
        </i>
    </p>

    <div style="overflow-x:auto;">
        <table class="table">
            <thead class="bg-success">
                <tr>
                <!-- <th scope="col">ID  </th> -->
                    <th scope="col">ID Slide</th> 
                    <th scope="col">Judul Slide</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $slide)
                    <tr>                
                        <td scope="row">{{$slide->id}}</td>
                        <td scope="row">{{$slide->judul}}</td>
                        <td scope="row">{{$slide->judul}}</td>
                        <td scope="row">{{$slide->foto}}</td>
                        <td scope="row">
                            <a href="slide/{{$slide->id}}" class="btn btn-primary btn-sm float-left">Open</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection