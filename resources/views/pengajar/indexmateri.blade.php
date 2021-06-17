@extends('pengajar.pengajar_template')

@section('content')
<h1 class="m-0 text-dark">List Materi</h1>
<div class="col-6">
<!-- @if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @elseif(session('alert'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session('alert') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif -->
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
    </div>

<p align="right">
<i>
<button type="button" class="btn btn-primary    , nav-icon fa fa-plus" onclick="location.href='{{url('pengajar/upload_materi')}}';"> Tambah Materi</button>
</i>
</p>
<div class="table-responsive">
<table class="table">
  <thead class="bg-success">
    <tr>
    <!-- <th scope="col">No</th> -->
      <th scope="col">Topik</th>
      <th scope="col">Materi</th>
      <th scope="col">Deskripsi</th>
      <!-- <th scope="col">Dokumen</th> -->
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
  @php $no = 1; @endphp
    @foreach($showmateri as $indexmateri)
    <tr>
      <!-- <th scope="row">{{$indexmateri->ID}}</th> -->
      <th scope="row">{{$indexmateri->Topik}}</th>
      <th scope="row">{{$indexmateri->nama_materi}}</th>
      <th scope="row">{{$indexmateri->deskripsi}}</th>      
      <!-- <th scope="row">{{$indexmateri->dokumen}}</a></th> -->
      <td>
      <a href="editmateri/{{ $indexmateri->ID }}" class="btn btn-xs btn-primary btn-lg">Lihat</a> |
      <a href="indexmateri/destroy/{{$indexmateri->ID}}" class="btn btn-xs btn-danger btn-lg" onclick="return confirm('yakin?');" >Delete</a>
      @endforeach
     
      </td>
    </tr>
    
    </tr>
  </tbody>
</table>
</div>


@endsection