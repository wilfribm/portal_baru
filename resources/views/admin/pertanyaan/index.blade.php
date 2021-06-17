@extends('admin.layouts.admin_base')

@section('content')
    <h1 class="m-0 text-dark">List Pertanyaan</h1>
    <br>

    <div style="overflow-x:auto;">
        <table class="table">
            <thead class="bg-success">
                <tr>
                <!-- <th scope="col">ID  </th> -->
                    <th scope="col">Penanya</th> 
                    <th scope="col">Pertanyaan</th>
                    <th scope="col">Ditanyakan pada</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($list as $pertanyaan)
                    @if (empty($pertanyaan->jawaban_isi))
                        <tr>                
                            <td scope="row">{{$pertanyaan->ID_Penanya}}</td>
                            <td scope="row">{{$pertanyaan->pertanyaan_isi}}</td>
                            <td scope="row">{{$pertanyaan->created_at}}</td>
                            <td scope="row">
                                <a href="pertanyaan/{{$pertanyaan->pertanyaan_id}}" class="btn btn-primary btn-sm float-left">Open</a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{$list->links("pagination::bootstrap-4")}}
        </div>
    </div>


@endsection