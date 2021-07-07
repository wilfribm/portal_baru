<!-- <!DOCTYPE html>
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

</html> -->
<!DOCTYPE html>
<html>
<head>
  <title></title>

</head>
<body>
  <style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Abel');

html, body {
  background: #FCEEB5;
  font-family: Abel, Arial, Verdana, sans-serif;
}

.center {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
}

.card {
  width: 450px;
  height: 250px;
  background-color: #fff;
  background: linear-gradient(#f8f8f8, #fff);
  box-shadow: 0 8px 16px -8px rgba(0,0,0,0.4);
  border-radius: 6px;
  overflow: hidden;
  position: relative;
  margin: 1.5rem;
}

.card h1 {
  text-align: center;
}

.card .additional {
  position: absolute;
  width: 150px;
  height: 100%;
  background: linear-gradient(#dE685E, #EE786E);
  transition: width 0.4s;
  overflow: hidden;
  z-index: 2;
}

.card.green .additional {
  background: linear-gradient(green, #A2CCB6);
}


.card:hover .additional {
  width: 100%;
  border-radius: 0 5px 5px 0;
}

.card .additional .user-card {
  width: 150px;
  height: 100%;
  position: relative;
  float: left;
}

.card .additional .user-card::after {
  content: "";
  display: block;
  position: absolute;
  top: 10%;
  right: -2px;
  height: 80%;
  border-left: 2px solid rgba(0,0,0,0.025);*/
}

.card .additional .user-card .level,
.card .additional .user-card .points {
  top: 15%;
  color: #fff;
  text-transform: uppercase;
  font-size: 0.75em;
  font-weight: bold;
  background: rgba(0,0,0,0.15);
  padding: 0.125rem 0.75rem;
  border-radius: 100px;
  white-space: nowrap;
}

.card .additional .user-card .points {
  top: 85%;
}

.card .additional .user-card svg {
  top: 50%;
}

.card .additional .more-info {
  width: 300px;
  float: left;
  position: absolute;
  left: 150px;
  height: 100%;
}

.card .additional .more-info h1 {
  color: #fff;
  margin-bottom: 0;
}

.card.green .additional .more-info h1 {
  color: #224C36;
}

.card .additional .coords {
  margin: 0 1rem;
  color: #fff;
  font-size: 1rem;
}

.card.green .additional .coords {
  color: #325C46;
}

.card .additional .coords span + span {
  float: right;
}

.card .additional .stats {
  font-size: 2rem;
  display: flex;
  position: absolute;
  bottom: 1rem;
  left: 1rem;
  right: 1rem;
  top: auto;
  color: #fff;
}

.card.green .additional .stats {
  color: #325C46;
}

.card .additional .stats > div {
  flex: 1;
  text-align: center;
}

.card .additional .stats i {
  display: block;
}

.card .additional .stats div.title {
  font-size: 0.75rem;
  font-weight: bold;
  text-transform: uppercase;
}

.card .additional .stats div.value {
  font-size: 1.5rem;
  font-weight: bold;
  line-height: 1.5rem;
}

.card .additional .stats div.value.infinity {
  font-size: 2.5rem;
}

.card .general {
  width: 300px;
  height: 100%;
  position: absolute;
  top: 0;
  right: 0;
  z-index: 1;
  box-sizing: border-box;
  padding: 1rem;
  padding-top: 0;
}

.card .general .more {
  position: absolute;
  bottom: 1rem;
  right: 1rem;
  font-size: 0.9em;
}



  </style>
  <script type="text/javascript">
      window.print();
  </script>
<div class="center">

  

  <div class="card green">
    <div class="additional">
      <div class="user-card">
        <!-- <div class="level center">
          Kartu Anggota Duta Tani
        </div> -->
          <img src="data:image/png;base64,{{\DNS2D::getBarcodePNG($url, 'QRCODE')}}" alt="barcode" style="width: 80px;margin-left: 35px;margin-top: 50px;background-color: white;" />
          

         

            
        <div class="points center" style="margin-top: -65px;" >

          Kelompok Tani
        </div>
        <!-- <svg width="110" height="110" viewBox="0 0 250 250" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="title desc" class="center"> -->

            <!-- <img src="{{ asset('foto_petani/' . $cetak->Foto) }}" width="110" height="110" viewBox="0 0 250 250" role="img" aria-labelledby="title desc" class="center" style="border-radius: 50%; margin-top: -60px;"> -->



          <title id="title">Teacher</title>
          <!-- <desc id="desc">Cartoon of a Caucasian woman smiling, and wearing black glasses and a purple shirt with white collar drawn by Alvaro Montoro.</desc> -->
          <style>
            .skin { fill: #eab38f; }
            .eyes { fill: #1f1f1f; }
            .hair { fill: #2f1b0d; }
            .line { fill: none; stroke: #2f1b0d; stroke-width:2px; }
          </style>
          <defs>
            <clipPath id="scene">
              <circle cx="125" cy="125" r="115"/>
            </clipPath>
            <clipPath id="lips">
              <path d="M 106,132 C 113,127 125,128 125,132 125,128 137,127 144,132 141,142  134,146  125,146  116,146 109,142 106,132 Z" />
            </clipPath>
          </defs>
          <circle cx="125" cy="125" r="120" fill="rgba(0,0,0,0.15)" />
         <!--  <img src="{{asset('/foto_petani/dt_teks.png') }}" width="70" height="70" > -->
          <g stroke="none" stroke-width="0" clip-path="url(#scene)">
            <rect x="0" y="0" width="250" height="250" fill="#b0d2e5" />
            <g id="head">
              <path fill="none" stroke="#111111" stroke-width="2" d="M 68,103 83,103.5" />
              <path class="hair" d="M 67,90 67,169 78,164 89,169 100,164 112,169 125,164 138,169 150,164 161,169 172,164 183,169 183,90 Z" />
              <circle cx="125" cy="100" r="55" class="skin" />
              <ellipse cx="102" cy="107" rx="5" ry="5" class="eyes" id="eye-left" />
              <ellipse cx="148" cy="107" rx="5" ry="5" class="eyes" id="eye-right" />
              <rect x="119" y="140" width="12" height="40" class="skin" />
              <path class="line eyebrow" d="M 90,98 C 93,90 103,89 110,94" id="eyebrow-left" />
              <path class="line eyebrow" d="M 160,98 C 157,90 147,89 140,94" id="eyebrow-right"/>
              <path stroke="#111111" stroke-width="4" d="M 68,103 83,102.5" />
              <path stroke="#111111" stroke-width="4" d="M 182,103 167,102.5" />
              <path stroke="#050505" stroke-width="3" fill="none" d="M 119,102 C 123,99 127,99 131,102" />
              <path fill="#050505" d="M 92,97 C 85,97 79,98 80,101 81,104 84,104 85,102" />
              <path fill="#050505" d="M 158,97 C 165,97 171,98 170,101 169,104 166,104 165,102" />
              <path stroke="#050505" stroke-width="3" fill="rgba(240,240,255,0.4)" d="M 119,102 C 118,111 115,119 98,117 85,115 84,108 84,104 84,97 94,96 105,97 112,98 117,98 119,102 Z" />
              <path stroke="#050505" stroke-width="3" fill="rgba(240,240,255,0.4)" d="M 131,102 C 132,111 135,119 152,117 165,115 166,108 166,104 166,97 156,96 145,97 138,98 133,98 131,102 Z" />
              <path class="hair" d="M 60,109 C 59,39 118,40 129,40 139,40 187,43 189,99 135,98 115,67 115,67 115,67 108,90 80,109 86,101 91,92 92,87 85,99 65,108 60,109" />
              <path id="mouth" fill="#d73e3e" d="M 106,132 C 113,127 125,128 125,132 125,128 137,127 144,132 141,142  134,146  125,146  116,146 109,142 106,132 Z" /> 
              <path id="smile" fill="white" d="M125,141 C 140,141 143,132 143,132 143,132 125,133 125,133 125,133 106.5,132 106.5,132 106.5,132 110,141 125,141 Z" clip-path="url(#lips)" />
            </g>
            <g id="shirt">
              <path fill="#8665c2" d="M 132,170 C 146,170 154,200 154,200 154,200 158,250 158,250 158,250 92,250 92,250 92,250 96,200 96,200 96,200 104,170 118,170 118,170 125,172 125,172 125,172 132,170 132,170 Z"/>
              <path id="arm-left" class="arm" stroke="#8665c2" fill="none" stroke-width="14" d="M 118,178 C 94,179 66,220 65,254" />
              <path id="arm-right" class="arm" stroke="#8665c2" fill="none" stroke-width="14" d="M 132,178 C 156,179 184,220 185,254" />
              <path fill="white" d="M 117,166 C 117,166 125,172 125,172 125,182 115,182 109,170 Z" />
              <path fill="white" d="M 133,166 C 133,166 125,172 125,172 125,182 135,182 141,170 Z" />
              <circle cx="125" cy="188" r="4" fill="#5a487b" />
              <circle cx="125" cy="202" r="4" fill="#5a487b" />
              <circle cx="125" cy="216" r="4" fill="#5a487b" />
              <circle cx="125" cy="230" r="4" fill="#5a487b" />
              <circle cx="125" cy="244" r="4" fill="#5a487b" />
              <path stroke="#daa37f" stroke-width="1" class="skin hand" id="hand-left" d="M 51,270 C 46,263 60,243 63,246 65,247 66,248 61,255 72,243 76,238 79,240 82,243 72,254 69,257 72,254 82,241 86,244 89,247 75,261 73,263 77,258 84,251 86,253 89,256 70,287 59,278" /> 
              <path stroke="#daa37f" stroke-width="1" class="skin hand" id="hand-right" d="M 199,270 C 204,263 190,243 187,246 185,247 184,248 189,255 178,243 174,238 171,240 168,243 178,254 181,257 178,254 168,241 164,244 161,247 175,261 177,263 173,258 166,251 164,253 161,256 180,287 191,278"/> 
            </g>
          </g>
        </svg>
      </div>
      <!-- <div class="more-info">
        <h1>{{$cetak->Nama_Petani}}</h1>
        <div class="coords">
          <span>Group Name</span>
          <span>Joined January 2019</span>
        </div>
        <div class="coords">
          <span>Position/Role</span>
          <span>City, Country</span>
        </div>
        <div class="stats">
          <div>
            <div class="title">Awards</div>
            <i class="fa fa-trophy"></i>
            <div class="value">2</div>
          </div>
          <div>
            <div class="title">Matches</div>
            <i class="fa fa-gamepad"></i>
            <div class="value">27</div>
          </div>
          <div>
            <div class="title">Pals</div>
            <i class="fa fa-group"></i>
            <div class="value">123</div>
          </div>
          <div>
            <div class="title">Coffee</div>
            <i class="fa fa-coffee"></i>
            <div class="value infinity">∞</div>
          </div>
        </div>
      </div> -->
    </div>
    <div class="general">
         <img src="{{asset('/foto_petani/logo_item.png') }}" width="50" height="50" style="position: absolute; margin-left: -1px; margin-top: 180px;" >

        <!--  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16" style="position: absolute;margin-top: 22px;margin-left: 40px;">
          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
        </svg> -->

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16" style="position: absolute;margin-top: 45px; margin-left: ">
        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
      </svg>

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16" style="position: absolute;margin-top: 73px;">
        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16" style="position: absolute;margin-top: 99px;">
      <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-fill" viewBox="0 0 16 16" style="position: absolute;margin-top: 125px;">
  <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
</svg>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-map-fill" viewBox="0 0 16 16" style="position: absolute;margin-top: 151px;">
  <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.598-.49L10.5.99 5.598.01a.5.5 0 0 0-.196 0l-5 1A.5.5 0 0 0 0 1.5v14a.5.5 0 0 0 .598.49l4.902-.98 4.902.98a.502.502 0 0 0 .196 0l5-1A.5.5 0 0 0 16 14.5V.5zM5 14.09V1.11l.5-.1.5.1v12.98l-.402-.08a.498.498 0 0 0-.196 0L5 14.09zm5 .8V1.91l.402.08a.5.5 0 0 0 .196 0L11 1.91v12.98l-.5.1-.5-.1z"/>
</svg>
      <h1 style="margin-top: -0px">{{$cetak->Nama_Petani}}</h1>

       <!-- <ul class="list-group list-group-flush"> -->
                              
                              <p style="margin-top: -15px;">&nbsp;&nbsp;&nbsp;&nbsp;  {{$cetak->Alamat_Petani}}
                              </p><br>
                              <p style="margin-top: -33px;">
                                &nbsp;&nbsp;&nbsp;&nbsp;  {{$cetak->Email}}<br>
                              </p>
                              <p style="margin-top: -11px;">
                                &nbsp;&nbsp;&nbsp;&nbsp;  {{$cetak->Nomor_Telpon}}<br>
                              </p>
                              <p style="margin-top: -10px;">
                                &nbsp;&nbsp;&nbsp;&nbsp; {{$cetak->Desa_Kelurahan}}<br>
                              </p>
                              <p style="margin-top: -12px;">
                                &nbsp;&nbsp;&nbsp;&nbsp; {{$cetak->jml_lahan}}
                              </p>
                              
                                
                              
                              
                              
                              
                              

                            </ul>
      <span class="more"></span>
      <!-- <h5 style="margin-left: 50px;">Berkomitmen Membangun Pertanian Indonesia</h5> -->
      <small style="position: absolute;margin-left: 47px;margin-top: 34px;font-size:12px;">Berkomitmen Membangun Pertanian Indonesia</small>
    </div>
  </div>

</div>
</body>
</html>