@extends('pengajar.pengajar_template')

@section('content')
 <!-- left column -->
 <div class="col-md-6">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">EDIT TOPIK</h3>
        </div>
        <!-- form start -->

        <form role="form" method="post" enctype="multipart/form-data" action="{{url('/pengajar/indextopik/update')}}">
        {{csrf_field()}}
          <div class="box-body">
                <input type="hidden" name="ID_Topik" id="ID_Topik"  value="{{ $topik->ID_Topik}}"  name="_token" />
            <div class="form-group">
            
            
                <label for="semester">KATEGORI:</label>
                
                <input type="text" style="width: 50%" class="form-control" id="ID_Kategori" name="ID_Kategori" value="{{ $topik ->ID_Kategori }}" readonly>

               
               
            </div>

            <div class="form-group">
                <label for="title">Nama Topik:</label>
                <input type="text" style="width: 50%" class="form-control" id="Topik" value="{{ $topik->Topik }}" name="Topik"/>
            </div>
            <div class="form-group">
                <label for="semester">GAMBAR Sebelumnya:</label><br>
                <a href="./../../fototopik/{{$topik->input_img}}" target="_blank">
                <img width="460" height="345" border="0" align="center"  src="./../../fototopik/{{$topik->input_img}}"/>
                </a>
                <!-- <img src="{{ URL::to('/') }}/fototopik/{{$topik->input_img}}" alt="image" width="460" height="345"> -->

                </select>
                </div>
            <div class="form-group">
                <label for="title">Upload Foto Topik:</label>
                <input type="file" style="width: 50%"  class="form-control" name="foto"/>
            </div>
          </div>
            <!-- <div class="form-group">
                <label for="title">Link Video:</label>
                <input type="text" style="width: 50%" class="form-control" name="video"/>
            </div>
            <div class="form-group">
                <label for="title">Deskripsi:</label>
                <textarea class="form-control" name="judul" rows="3" placeholder="Judul ..."></textarea>
            </div>


            <div class="form-group">
                <label for="title">Upload Materi Dokumen (PDF Scan):</label>
                <input type="file" class="form-control" name="dokumen"/>
            </div>
          </div>
          /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
        <br>
      </div>
    
</div>


@endsection