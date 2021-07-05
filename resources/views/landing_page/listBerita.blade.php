@extends('landing_page.layout')

@section('content')
    
      <div class="container" style="padding-top:150px;padding-bottom:80px;">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">BERITA</h2>
        </div>
        <div class="row">

            @foreach ($listBerita as $berita)
          <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
            <div class="portfolio-item">
              <a href="/listBerita/detailBerita/{{$berita->id}}">
              <!-- Agar ukuran rapi, convert gambar ke pixel 750 x 500 -->
              <img class="img-fluid" src="./../../foto_berita/{{$berita->foto}}" alt="{{ $berita->judul }}" style="width:100%;"/>
              </a>
               
              <div class="portfolio-caption">
                <div class="portfolio-caption-heading">
                  <h5 style="padding-top: 10px;">{{$berita->judul}}</h5></div>
                  
              </div>
              <div class="portfolio-caption-subheading text-muted" style="padding-bottom:50px;">
                    {{$berita->tanggal}}
                  </div>
            </div>
            
          </div>
          @endforeach  
            <div class="d-flex justify-content-center">
              {{$listBerita->links("pagination::bootstrap-4")}}
            </div>
        </div>
      </div>

@endsection