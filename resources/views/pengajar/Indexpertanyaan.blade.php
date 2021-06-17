@extends('pengajar.pengajar_template')


@section('content')
    <h1 class="m-0 text-dark">List Pertanyaan</h1>
    <br>
    {{-- @if(\Session::has('alert'))
        <div class="alert alert-danger">
            <div>{{Session::get('alert')}}</div>
        </div>
    @endif
    @if(\Session::has('alert-success'))
        <div class="alert alert-success">
            <div>{{Session::get('alert-success')}}</div>
        </div>
    @endif --}}

    {{-- <p align="right">
        <i>
            <button type="button" class="btn btn-primary    , nav-icon fa fa-plus" onclick="location.href='{{url('pengajar/indexpertanyaan')}}';"> Pertanyaan</button>
        </i>
    </p> --}}

    <div style="overflow-x:auto;">
        <table class="table">
            <thead class="bg-success">
                <tr>
                <!-- <th scope="col">ID  </th> -->
                    <th scope="col">Penanya</th> 
                    <th scope="col">Pertanyaan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @php $no = 1; @endphp
            @foreach($pertanyaan as $tanya)
                    <tr>                
                        <td scope="row">{{$tanya->ID_Penanya}}</td>
                        <td scope="row">{{$tanya->pertanyaan_isi  }}</td>
                        <!-- <td scope="row">#</td> -->
                        <td scope="row">
                            <a href="indexpertanyaan/menjawab/{{ $tanya->pertanyaan_id }}" class="btn btn-primary btn-sm float-left">Open</a>
                            @endforeach
                        </td>
                    </tr>
                
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
           
        </div>
    </div>

@endsection