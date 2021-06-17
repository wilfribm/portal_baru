@extends('admin.layouts.admin_base')
@section('content')
    <h1 class="m-0 text-dark">List Pengajar</h1>
    <br>

    <div style="overflow-x:auto;">
        <table class="table">
            <thead class="bg-success">
                <tr>
                <!-- <th scope="col">ID  </th> -->
                    <th scope="col">User ID</th>                    
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pengajar as $guru)
                            <tr>                
                                <td scope="row">{{$guru->ID_User}}</td>
                                <td scope="row">{{$guru->nama}}</td>
                                <td scope="row">{{$guru->alamat}}</td>
                                <td scope="row">{{$guru->Email}}</td>
                                <td scope="row">
                                    <a href="pengajar/{{$guru->ID_User}}" class="btn btn-primary btn-sm">Open</a>
                                    &ensp;
                                </td>
                            </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{$pengajar->links("pagination::bootstrap-4")}}
        </div>
    </div>
@endsection
