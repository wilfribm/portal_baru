@extends('pengajar.pengajar_template')

@section('content')
 <!-- left column -->
 <div class="col-md-6">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">UPLOAD TOPIK</h3>
        </div>
        <!-- form start -->

        <form role="form" method="post" enctype="multipart/form-data" action="{{url('pengajar/upload_topik')}}">
          <div class="box-body">
                <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <div class="form-group">
            
            
                <label for="semester">KATEGORI:</label>
                
                <select style="width: 50%" class="form-control" name="ID_Kategori" id="ID_Kategori">
                  <option >--- Pilih Ketegori ---</option>
                  @foreach($kategori as $kat)
                  <option value="{{$kat->ID_Kategori}}">{{$kat->ID_Kategori}} - {{$kat->Nama_Kategori}}</option>
                  @endforeach

                </select>
               
            </div>

            <div class="form-group">
                <label for="title">Nama Topik:</label>
                <input type="text" name="topik" id="topik" style="width: 50%" class="form-control" name="subtopik"/>
            </div>
            <!-- <div class="form-group">
        <label for="input_img">Upload Foto Materi</label>
        <input class="form-control" name="input_img" type="file" id="input_img"> -->
        <!-- <img class="col-sm-6" id="preview"  src=""> -->
        <!-- <p class="help-block">Example block-level help text here.</p> -->
    <!-- </div> -->
            <!-- <div class="form-group">
                <label for="title">Link Video:</label>
                <input type="text" style="width: 50%" class="form-control" name="video"/>
            </div>
            <div class="form-group">
                <label for="title">Deskripsi:</label>
                <textarea class="form-control" name="judul" rows="3" placeholder="Judul ..."></textarea>
            </div> -->


            <div class="form-group">
                <label for="title">Upload Foto Topik:</label>
                <input type="file" style="width: 50%" class="form-control" name="foto"/>
            </div>
          </div>


          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
        <br>
      </div>
    
</div>


@endsection