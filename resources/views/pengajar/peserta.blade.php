@extends('pengajar.pengajar_template')

@section('content')
<h1 class="m-0 text-dark">Banyak Peserta Melihat Materi</h1>
<br>


<!-- <article>
    <h1>We&rsquo;ll be back soon!</h1>
    <div>
        <p>Sorry for the inconvenience but we&rsquo;re performing some maintenance at the moment. If you need to you can always <a href="mailto:#">contact us</a>, otherwise we&rsquo;ll be back online shortly!</p>
        <p>&mdash; The Team</p>
    </div>
</article> -->

<table class="table">
  <thead class="bg-success">
    <tr>
      <th scope="col">Dilihat Sebanyak</th>
      <th scope="col">Nama Materi</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($getdatapeserta as $gdp)
    <tr>
 
      <th scope="row">{{$gdp->total}}</th>
        
    
      <td>{{$gdp->nama_materi}}</td>

      <td>
     
    
      </td>
      @endforeach   
    </tr>
    
  </tbody>
</table>


@endsection