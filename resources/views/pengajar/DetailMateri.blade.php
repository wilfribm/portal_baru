
@extends('pengajar.pengajar_template')

@section('content')


 <div class="col-md-10">
     
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">EDIT MATERI</h3>
        </div>
      
        <form role="form" method="post" enctype="multipart/form-data" action="{{url('/pengajar/indexmateri/update')}}">
        {{csrf_field()}}
          <div class="box-body">
                <input class="form-control" type="hidden" name="ID" id="id"  value="{{ $materi->ID}}"  name="_token" />
            <div class="form-group">
                <label for="semester">Topik:</label>
                <input class="form-control" type="hidden" name="ID" id="id"  value="{{ $materi->ID_Topik}}"  name="ID_Topik" />
                <input type="text" style="width: 100%" class="form-control" id="Topik" name="Topik" value="{{ $materi->Topik }}" readonly>

                </select>
            </div>

            <div class="form-group">
                <label for="title">Nama Materi:</label>
                <input type="text" style="width: 100%" class="form-control" id="nama_materi" value="{{ $materi->nama_materi }}" name="nama_materi" readonly>
            </div>
            <div class="form-group">
                <label for="title">Deskripsi:</label>
                <textarea class="form-control" style="width: 100%" id="deskripsi" placeholder="{{ $materi->deskripsi }}" value="{{ $materi->deskripsi }}"  name="deskripsi" rows="3" readonly></textarea>
            </div>
            <div class="form-group">

                <label for="title">Link Video (Opsional):</label>
                </div>
                <div class="form-group row">
                <input type="text" style="width: 100%" class="form-control" id="link_video"  value="{{ $materi->link_video }}"  name="link_video" readonly>
            </div>
            </div>

            <div class="form-group">
            <label for="country">Namafile sebelumnya:</label>  
                <input ype="file" style="width: 100%" class="form-control" id="dokumen" name="dokumen" value="{{ $materi->dokumen }}"  readonly>
                <br>
                <button><a href="./../../materipengajar/{{$materi->dokumen}}">Download File</a></button>
                <br>
                <br>
            </div>
          </div>
         

          <!-- <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div> -->
        </form>
        <br>
      </div>
    
</div>


@endsection