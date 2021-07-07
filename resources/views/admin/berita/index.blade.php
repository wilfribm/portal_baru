@extends('admin.layouts.admin_base')

@section('content')
    <h1 class="m-0 text-dark">List Berita</h1>
    <br>

    <p align="right">
        <i>
            <a href="berita/tambah" class="btn btn-primary">&plus; Tambah Berita</a>
        </i>
    </p>

    <div style="overflow-x:auto;">
        <table class="table">
            <thead class="bg-success">
                <tr>
                <!-- <th scope="col">ID  </th> -->
                    <th scope="col">ID Berita</th> 
                    <th scope="col">Judul Berita</th>
                    <!-- <th scope="col">Isi Berita</th> -->
                    <th scope="col">NIK</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $b)
                    <tr>                
                        <td scope="row">{{$b->id}}</td>
                        <td scope="row">{{$b->judul}}</td>
                        <!-- <td scope="row">{{$b->isi}}</td> -->
                        <td scope="row">{{$b->NIK}}</td>
                        <td scope="row">{{$b->foto}}</td>
                        <td scope="row">{{$b->tanggal}}</td>
                        <td scope="row">
                            <a href="berita/{{$b->id}}" class="btn btn-primary btn-sm float-left">Open</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
              {{$data->links("pagination::bootstrap-4")}}
            </div>
    </div>

@endsection