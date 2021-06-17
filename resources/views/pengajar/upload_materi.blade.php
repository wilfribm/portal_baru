@extends('pengajar.pengajar_template')

@section('content')
 <!-- left column -->
 <div class="col-md-6">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">UPLOAD MATERI</h3>
        </div>
        <!-- form start -->
        <form role="form" method="post" enctype="multipart/form-data" action="{{url('pengajar/upload_materi')}}">
          <div class="box-body">
                <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <div class="form-group">
                <label for="semester">Pilih Topik:</label>
                <select style="width: 50%" class="form-control" name="Topik" id="kategori">
                  <option >--- Pilih Topik ---</option>
                  @foreach($materi as $mat)
                  <option value="{{$mat->ID_Topik}}">{{$mat->Topik}}</option>
                  @endforeach

                </select>
            </div>

            <div class="form-group">
                <label for="title">Nama Materi:</label>
                <input type="text" style="width: 100%" class="form-control" name="nama_materi"/>
            </div>
            <div class="form-group">
                <label for="title">Deskripsi:</label>
                <textarea class="form-control" name="deskripsi" rows="3" ></textarea>
            </div>
            <div class="form-group">
                <label for="title">Link Video (Opsional):</label>
                <input type="text" style="width: 100%" class="form-control" placeholder="Contoh: https://www.youtube.com/embed/euHFMEr0cTk " name="link_video"/>
            </div>

            <div class="form-group">
                <label for="title">Upload Materi Dokumen PDF (Opsional):</label>
                <input type="file" style="width: 100%" class="form-control" name="dokumen"/>
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
        <br>
      </div>
    
</div>


@endsection