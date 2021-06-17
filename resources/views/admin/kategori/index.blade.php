@extends('admin.layouts.admin_base')

@section('content')
    <h1 class="m-0 text-dark">List Kategori</h1>
    <br>

    <p align="right">
        <i>
            <a href="kategori/create" class="btn btn-primary">&plus; Tambah Kategori</a>
        </i>
    </p>

    <div style="overflow-x:auto;">
        <table class="table">
            <thead class="bg-success">
                <tr>
                <!-- <th scope="col">ID  </th> -->
                    <th scope="col">ID Kategori</th> 
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($list as $kategori)
                    <tr>                
                        <td scope="row">{{$kategori->ID_Kategori}}</td>
                        <td scope="row">{{$kategori->Nama_Kategori}}</td>
                        @php
                            $str = strlen($kategori->Deskripsi) > 50 ? substr($kategori->Deskripsi,0,50)."..." : $kategori->Deskripsi;
                        @endphp
                        <td scope="row">{{$str}}</td>
                        <td scope="row">
                            <a href="kategori/{{$kategori->ID_Kategori}}" class="btn btn-primary btn-sm float-left">Open</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{$list->links("pagination::bootstrap-4")}}
        </div>
    </div>


@endsection
