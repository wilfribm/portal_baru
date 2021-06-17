@extends('pengajar.pengajar_template')

@section('content')
<h1 class="m-0 text-dark">Kategori</h1>
<br>
<table class="table">
  <thead class="bg-success">
 
    <tr>
      <th scope="col">KATEGORI</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
  <?php $i = 1; ?>
        @foreach($indexing as $in)
    <tr>

      <th scope="row">{{$in->ID_Kategori}} - {{$in->Nama_Kategori}}</th>

      <td>
      <a href=" topik/{{$in->ID_Kategori}}" class="btn btn-xs btn-primary">Lihat</a>
      
      </td>
      @endforeach
    </tr>

 
  </tbody>
</table>


@endsection