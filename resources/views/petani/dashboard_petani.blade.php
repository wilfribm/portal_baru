@extends('petani.layouts.admin_base')
@section('content')
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><div class="num">{{$lahan}}</div><sup style="font-size: 20px"></sup></h3>

                <p>--</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">Data Lahan <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><div class="num">{{$petani}}</div><sup style="font-size: 20px"></sup></h3>

                <p>--</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">Data Petani <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><div class="num">{{$berita}}</div><sup style="font-size: 20px"></sup></h3>

                <p>--</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">Data Berita <i class="fas fa-arrow-circle-right"></i></a>
              
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><div class="num">{{$materi}}</div><sup style="font-size: 20px"></sup></h3>

                <p>--</p>
              </div>
              
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">DataMateri<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <script>
          jQuery(document).ready(function($) {
            $('.num').counterUp({
              delay: 100,
              time: 1000
            });
          });
        </script>
@endsection
