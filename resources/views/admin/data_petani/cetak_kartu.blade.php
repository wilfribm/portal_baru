<!DOCTYPE html>
<html lang="en">
<head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      
</head>
<body>
  <style type="text/css">
    body{
    background-color: green;
}
.profile-badge{
    border:1px solid #c1c1c1;
    padding:5px;
    position: relative;
}
.profile-badge img{
    height: 200px;
    width: 100%;
}
.user-detail{
    background-color: #fff;
    position: relative;
    padding:65px 0px 10px 0px;
    color:#8B8B89;
}
.user-detail h3, h4{
    margin: 0px;
    margin:0px 0px 5px 0px;
    color: #000;
}
.user-detail p{
    font-size:14px;
}
.user-detail .btn{
    margin-bottom:10px;
    background-color: #fff;
    border:1px solid #DEDEDE;
    border-radius: 0px;
    color:black;
}
.user-detail .btn i{
    color:#D35B4D;
    padding-right:18px;
}
.profile-pic{
    position: absolute;
    height:120px;
    width:120px;
    left: 50%;
    transform: translateX(-50%);
    top: 140px;
    z-index: 1001;
}
.profile-pic img{
    height: 100%;
    width: 100%;
    border-radius: 50%;
    box-shadow: 0px 0px 5px 0px #c1c1c1;
}
.hover-detail{
    background-color: #fff;
    border:1px solid #7C7C7C;
    position: absolute;
    width: 200px;
    box-shadow: 0px 0px 6px 0px #7C7C7C; 
    display:none;
    top: 145px;
    left: 50%;
    transform: translateX(-50%);
}
.hover-detail:hover,
.user-detail .btn:hover ~ .hover-detail{
    display: block;
}
.checkbox label{
    text-align: left;
    width: 100%;
}
.Following label{
    padding-bottom: 5px;
    border-bottom:1px solid #c2c2c2;
}
.checkbox label span{
    float:right;
}
.hover-detail{
    padding:5px;
}
  </style>
  <script type="text/javascript"> 
    
  window.print();
 
 </script>
 
    
    <div class="container">

        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-xs-12 profile-badge">
                <img src="{{asset('/foto_petani/dutataniid-teks.png') }}" style="width:80px;height: 80px;position: absolute;padding-left: 12px;padding-top: 5px;" >
                <img src="{{asset('/foto_petani/bg1.jpg') }}">
                
                <div class="profile-pic">
                    <img src="{{ asset('foto_petani/' . $cetak->Foto) }}">
                </div>
                <div class="user-detail text-center">
                  
                  <h4>{{$cetak->Nama_Petani}}</h4>
                  <h5>{{$cetak->Alamat_Petani}}</h5>
                  <h5>{{$cetak->Desa_Kelurahan}}</h5>

                  <p>Petani</p>
                </div>
                
            </div>
        </div>
    </div>
</body>

</html>