
<!DOCTYPE html>
<html> <!-- Bagian halaman HTML yang akan konvert -->
<head>
    <meta charset='UTF-8'>
    <link rel="shortcut icon" href="#">
    <title>Cetak Kartu Anggota Petani</title>
</head>
<body onload='window.print()' style="font-family: arial;font-size: 12px;position:absolute;">
    
<div style="width: 400px;height: 250px;margin: 50px; background-color: green;">
   <!--  <img style="position: absolute;padding-left: 12px;padding-top: 5px;" class="img-responsive img" alt="Responsive image" src="{{ asset('img/favicon.ico') }}" width="40px">
    <img style="position: absolute;padding-left: 312px;padding-top: 5px;" class="img-responsive img" alt="Responsive image" src="{{ asset('img/favicon.ico') }}" width="50px">
    <p style="position: absolute; font-family: arial; font-size: 10px; padding-left: 85px;text-transform: uppercase; text-align: center;"> Duta Tani <b style="font-size: 12px"></b></p> -->
    <p style="padding-left: 123px;padding-top: 70px; "><b>KARTU ANGGOTA PETANI</b></p>
    <img style="border: 1px solid #ffffff;position: absolute;margin-left: 20px;margin-top: -20px;" src="{{ asset('foto_petani/' . $cetak->Foto) }}" width="80px">
        <table style="margin-top: -10px; padding-left: 120px; position: relative;font-family: arial;font-size: 11px;">
            <tr>
                <td>ID Petani</td>
                <td>:</td>
                <td>{{$cetak->ID_User}}</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>{{$cetak->Nama_Petani}}</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>{{$cetak->Agama}}</td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>{{$cetak->Tanggal_Lahir}}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>{{$cetak->Alamat_Petani}}</td>
            </tr>
            </tr><tr>
                <td>Desa / Kelurahan</td>
                <td>:</td>
                <td>{{$cetak->Desa_Kelurahan}}</td>
            </tr>
            <tr>
                <td>Kecamatan</td>
                <td>:</td>
                <td>{{$cetak->Kecamatan}}</td>
            </tr>
            <tr>
                <td>Kabupaten</td>
                <td>:</td>
                <td>{{$cetak->Kabupaten}}</td>
            </tr>
            <tr>
                <td>Provinsi</td>
                <td>:</td>
                <td>{{$cetak->Provinsi}}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>
                @if($cetak->Status == 1)
                <b>Aktif</b>
                @else
                <b>Tidak Aktif</b>
                @endif
                </td>
            </tr>
        </table>
       
</div>


</body>
</html>
