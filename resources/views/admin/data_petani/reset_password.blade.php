@extends('admin.layouts.admin_base')

@section('content')
<div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-pills">                     
                        <h1>Ganti Password</h1>

                        
                        <br>
                        <br>

                </div>
                
                <br><br>
         <div class="row">
          </div> 
         
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <form action="{{url('reset')}}/{{$user->ID_User}}" method="post">
              {{ csrf_field() }}
               
                <div class="col-mb-3">
                    <label>Password Baru</label>
                    <input id="Nama_Petani" name="Password" type="password" class="form-control" placeholder="Password">
                </div>
                
                  <div class="col-mb-3" style="margin-top: 10px;">
                <input class="btn btn-primary btn-sm" type="submit" value="Ubah">
                <a href="/detail/{{$user->ID_User}}" class="btn btn-warning btn-sm">Batal</a>
            </div>

            </form>
          </div>
          
        </div>
@endsection