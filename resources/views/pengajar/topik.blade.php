@extends('pengajar.pengajar_template')

@section('content')
<h1 class="m-0 text-dark">List Topik</h1>
<br>
<table class="table">
  <thead class="bg-success">
    <tr>
      <th scope="col">Topik</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php $i = 1; ?>
        @foreach($topik as $top)
        <tr>
      <th scope="row">{{$top->Topik}}</th>
      <input type="hidden" value="{{$top->ID_Topik}}">

      <td>
      <a href="../materi/{{$top->ID_Topik}}" class="btn btn-xs btn-primary">Lihat</a>
      
      </td>
      @endforeach
    </tr>
    
  </tbody>
</table>


@endsection