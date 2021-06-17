@extends('pengajar.pengajar_template')

@section('content')
<h1 class="m-0 text-dark">List Topik</h1>
<br>
@if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif
            @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
            @endif
<p align="right">
<i>
<button type="button" class="btn btn-primary    , nav-icon fa fa-plus" onclick="location.href='{{url('pengajar/upload_topik')}}';"> Tambah Topik</button>
</i>
</p>
<div style="overflow-x:auto;">
<table class="table">
  <thead class="bg-success">
    <tr>
      <!-- <th scope="col">ID  </th> -->
      <th scope="col">KATEGORI</th>
      <th scope="col">Topik</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @php $no = 1; @endphp
    @foreach($showtopik as $indextopik)
    <tr>
    <!-- <th scope="row">{{$indextopik->ID_Topik}}</th> -->
    
      <th scope="row">{{$indextopik->ID_Kategori}} - {{$indextopik->Nama_Kategori}}</th>
      
      <th scope="row">{{$indextopik->Topik}}</th> 
     
      <td>
      <a href="edittopik/{{ $indextopik->ID_Topik }}" class="btn btn-xs btn-primary">Edit</a>
      <a href="indextopik/destroy/{{$indextopik->ID_Topik}}" class="btn btn-xs btn-danger" onclick="return confirm('yakin?');" >Delete</a>
      @endforeach
 
  </tbody>
</table>
</div>


@endsection