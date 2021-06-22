@extends('admin.layouts.admin_base')
@section('content')
    <h1 class="m-0 text-dark">Daftar Petani</h1>
    <br>

    <div style="overflow-x:auto;">
        <table class="table">
            <thead class="bg-success">
                <tr>
                <!-- <th scope="col">ID  </th> -->                    
                    <th scope="col">No</th>
                    <th scope="col">Nama Petani</th>
                    <th scope="col">Kecamatan</th>
                    <th scope="col">Kabupaten</th>
                    <th scope="col">Provinsi</th>
                    <th scope="col">Desa / Kelurahan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($daftar as $petani)
                            <tr>    
                            <td scope="row">
                                {{ ++$i }}
                            </td>

                                <td scope="row">{{$petani->Nama_Petani}}</td>

                                <td scope="row">{{$petani->Kecamatan}}</td>

                                <td scope="row">{{$petani->Kabupaten}}</td>

                                <td scope="row">{{$petani->Provinsi}}</td>

                                <td scope="row">{{$petani->Desa_Kelurahan}}</td>

                                <td scope="row">
                                    <div class="dropdown">
                                        <button class="btn btn-primary float-right dropdown-toggle" type="button" 
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Aksi
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          <a class="btn btn-s btn-info btn-sm" href="KartuAnggotaTani/{{$petani->ID_User}}" style="margin-left: 10px; margin-top: 5px;">Kartu Anggota</a><br>
                                           <a class="btn btn-s btn-primary btn-sm" href="/detail/{{$petani->ID_User}}"

                                            
                                            
                                            style="margin-left: 10px; margin-top: 5px;">Detail</a><br>
                                           <a class="btn btn-s btn-warning btn-sm" href="/ubah/{{$petani->ID_User}}" style="margin-left: 10px; margin-top: 5px;">Ubah</a><br>
                                           <a class="btn btn-s btn-danger btn-sm" href="{{url('hapus')}}/{{$petani->ID_User}}" style="margin-left: 10px; margin-top: 5px;" onclick="return confirm('Anda Yakin?');">Hapus</a><br>
                                           
                                          <div class="dropdown-divider"></div>
                                            
                                        </div>
                                      </div>
                                    </td>
                                </td>
                            </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{$daftar->links("pagination::bootstrap-4")}}
            
        </div>
    </div>
@endsection
