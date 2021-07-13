@extends('landing_page.layout')

@section('content')
    
      <div class="container" style="padding-top:150px;padding-bottom:80px;">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">MATERI</h2>
        </div>
        <div style="overflow-x:auto;">

        <form class="d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="GET" action="{{url('/listMateri/cariMateri')}}" style="padding-bottom:15px;">
            <div class="input-group">
                <input type="search" class="form-control bg-light border-1 small" placeholder="Cari Materi" aria-label="Search" name="cari" value="{{ old('cari') }}">
                <div class="input-group-append">
                    <button class="btn btn-primary border-1" style="background-color:#049c44;color:white;" type="submit">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>

                <table class="table table-bordered">
                    <thead>
                        <tr class="table-success">
                            <th scope="col" class="text-center">NO</th>
                            <th scope="col" class="text-center">Nama Materi</th>
                            <th scope="col" class="text-center">Penulis</th>
                            <th scope="col" class="text-center">Tanggal</th>
                            <th scope="col" class="text-center">File</th>
                            <th scope="col" class="text-center">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($listMateri as $no => $data)  
                        <tr>
                            <td scope="row" class="text-center">{{ $listMateri->firstItem() + $no }}</td>
                            <td scope="row">{{ $data->nama_materi }}</td>
                            <td scope="row">{{ $data->nama }}</td>
                            <td scope="row">{{ $data->create_at }}</td>
                            <td class="text-center"><a href=""><i class="far fa-file-pdf"></i> PDF</a></td>
                            <td class="text-center"><a href="/listMateri/detailMateri/{{$data->ID}}"><button class="btn btn-primary" style="background-color:#049c44;color:white;">Buka</button></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                    <div class="d-flex justify-content-center">
                        {{$listMateri->links("pagination::bootstrap-4")}}
                    </div>
            </div>
        </div>

@endsection