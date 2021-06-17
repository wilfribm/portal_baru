
@extends('pengajar.pengajar_template')

@section('content')


 <div class="col-md-10">
     
      <div class="box box-primary">
      <div>
                @if(\Session::has('alert'))
                <div class="alert alert-danger">
                    <div>{{Session::get('alert')}}</div>
                </div>
            @endif
            @if(\Session::has('alert-success'))
                <div class="alert alert-success">
                    <div>{{Session::get('alert-success')}}</div>
                </div>
            @endif
  </div>
        <div class="box-header with-border">
          <h3 class="box-title">Jawab Pertanyaan</h3>
        </div>
      
        <form role="form" method="post" enctype="multipart/form-data" action="{{url('/pengajar/indexpertanyaan/simpan')}}">
        {{csrf_field()}}
          <div class="box-body">
                <input class="form-control" type="hidden" name="ID" id="id"  value="{{$jawab->pertanyaan_id}}"  name="_token" />
            <div class="form-group">
                <label for="semester">penanya:</label>
                <input type="text" style="width: 100%" class="form-control" id="Topik" name="Topik" value="{{$jawab->ID_Penanya}}" readonly>

                </select>
            </div>
            <div class="form-group">
                <label for="semester">Pertanyaan:</label>
                <input type="text" style="width: 100%" class="form-control" id="Topik" name="Topik" value="{{$jawab->pertanyaan_isi}}" readonly>

                </select>
            </div>

            <div class="form-group">
                <label for="semester">GAMBAR (jika ada):</label><br>
                <!-- <img src="./../../../gambar_pertanyaan/{{$jawab->gambar_pertanyaan}}" alt="image" width="460" height="345"> -->
                <a href="./../../../gambar_pertanyaan/{{$jawab->gambar_pertanyaan}}" target="_blank">
                <img width="460" height="345" border="0" align="center"  src="./../../../gambar_pertanyaan/{{$jawab->gambar_pertanyaan}}"/>
                </a>
                </select>

            <div class="form-group">
                <label for="title">Jawaban:</label>
                <textarea class="form-control" style="width: 100%" id="jawaban_isi" placeholder="{{$jawab->jawaban_isi}}"  name="jawaban_isi" rows="3" ></textarea>
            </div>
            
           
         

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
        <br>
      </div>
    
</div>


@endsection