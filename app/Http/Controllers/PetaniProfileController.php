<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;




class PetaniProfileController extends Controller
{
    // public function data_diri_petani(Request $request){
    //     $getuser = $request->session()->get('ID_User');
    //     $showprofile = DB::table('master_detail_user')
    //                             ->join('master_user_kat', 'master_user_kat.ID_User', '=', 'master_detail_user.ID_User')
    //                             ->where('master_detail_user.ID_User',$getuser)
    //                             ->first();


    //     // $showprofile = DB::table('SELECT * FROM master_petani');
                                
    //     // var_dump($showprofile);
    //     return view('petani.data_diri', compact('showprofile'));
    // }

    public function data_diri_petani(Request $request, $id)
    {
       
        $id = $request->route('id');
        // $data = DB::SELECT("SELECT * FROM master_detail_user WHERE ID_User = '$id_user'");
       $detail = DB::table('master_detail_user')
                ->where('ID_User', $id)
                ->first();
        $lahan = DB::table('master_petani')
                ->where('ID_User', $id)
                ->first();
        
        // var_dump($detail);
         return view('petani.data_diri', compact('detail','lahan'));
    }

    

    public function ubah_profile(Request $request, $id)
    {
        $id = $request->route('id');
        $ambil = DB::table('master_detail_user')
                ->where('ID_User', $id)
                ->first();

        
        $kab = DB::SELECT("SELECT * FROM kabupaten WHERE Nama_Provinsi='ACEH'");
        
        return view('petani.ubah_profile', compact('ambil'));

    }

    public function update_profile(Request $request, $id)
    {
        $id = $request->route('id');
        $Nama_Petani = $request->input('nama');
        $Jenis_Kelamin = $request->input('jenis_kelamin');
        $Alamat_Petani = $request->input('alamat');
        $Tanggal_Lahir = $request->input('tanggal_lahir');
        $Provinsi = $request->input('provinsi');
        $Kabupaten = $request->input('kabupaten');
        $Kecamatan = $request->input('kecamatan');
        $Kelurahan_desa = $request->input('kelurahan_desa');
        $Nomor_Telpon = $request->input('nomor_telpon');
        $Email = $request->input('Email');
        
       //  $Pendidikan_Terakhir = $request->input('Pendidikan_Terakhir');
       //  $Jumlah_Tanggungan = $request->input('Jumlah_Tanggungan');
       //  $Agama = $request->input('Agama');
        
       //  $Deskripsi_Keahlian = $request->input('Deskripsi_Keahlian');
       // $Status = $request->input('Status');

       //  $nama_istri = $request->input('nama_istri');
       //  $jml_tng_kerja_musiman = $request->input('jml_tng_kerja_musiman');
       //  $jml_lahan = $request->input('jml_lahan');

            
            $resorce  = $request->file('Foto');
            // $name   = $resorce->getClientOriginalName();
            // $resorce->move(\base_path() ."/public/foto_petani", $name);
            

          if(!empty($resorce)){
            $name   = $resorce->getClientOriginalName();
            $resorce->move(\base_path() ."/public/foto_petani", $name);
                $maspet = array('Nama_Petani'=>$Nama_Petani, 'Email'=>$Email, 'Alamat_Petani'=>$Alamat_Petani,'Nomor_Telpon'=>$Nomor_Telpon, 'Tanggal_Lahir'=>$Tanggal_Lahir,'Provinsi'=>$Provinsi, 'Kabupaten'=>$Kabupaten,'Kecamatan'=>$Kecamatan,'Desa_Kelurahan'=>$Kelurahan_desa, 'Foto'=>$name);

                    $detail=array('nama'=>$Nama_Petani,
                    'tanggal_lahir'=>$Tanggal_Lahir,'alamat'=>$Alamat_Petani,'nomor_telpon'=>$Nomor_Telpon,'Email'=>$Email, 'jenis_kelamin'=>$Jenis_Kelamin,'provinsi'=>$Provinsi, 'kabupaten'=>$Kabupaten,'kecamatan'=>$Kecamatan,'kelurahan_desa'=>$Kelurahan_desa, 'Foto'=>$name);
                    DB::table('master_petani')->where('ID_User', $id)->update($maspet);
                    DB::table('master_detail_user')->where('ID_User', $id)->update($detail);
          }else{
             $maspet = array('Nama_Petani'=>$Nama_Petani, 'Email'=>$Email, 'Alamat_Petani'=>$Alamat_Petani,'Nomor_Telpon'=>$Nomor_Telpon, 'Tanggal_Lahir'=>$Tanggal_Lahir,'Provinsi'=>$Provinsi, 'Kabupaten'=>$Kabupaten,'Kecamatan'=>$Kecamatan,'Desa_Kelurahan'=>$Kelurahan_desa);

                    $detail=array('nama'=>$Nama_Petani,
                    'tanggal_lahir'=>$Tanggal_Lahir,'alamat'=>$Alamat_Petani,'nomor_telpon'=>$Nomor_Telpon,'Email'=>$Email, 'jenis_kelamin'=>$Jenis_Kelamin,'provinsi'=>$Provinsi, 'kabupaten'=>$Kabupaten,'kecamatan'=>$Kecamatan,'kelurahan_desa'=>$Kelurahan_desa);
                    DB::table('master_petani')->where('ID_User', $id)->update($maspet);
                    DB::table('master_detail_user')->where('ID_User', $id)->update($detail);
          }
                    
           
             

         

        
        return back()->with('success', 'Ubah Petani Berhasil');

    }

     public function lahan_petani(Request $request, $id)
    {
       
        $id = $request->route('id');
        // $data = DB::SELECT("SELECT * FROM master_detail_user WHERE ID_User = '$id_user'");
       $lahan_petani = DB::table('master_petani')
                ->where('ID_User', $id)
                ->first();

        // var_dump($lahan_petani);
         return view('petani.lahan', compact('lahan_petani'));
    }

    public function cetak_petani(Request $request, $id)
    {
        $id = $request->route('id');
        $cetak = DB::table('master_petani')->where('ID_User',$id)->first();
        $url = "http://okenih.rapidserver.my.id/petani/$cetak->ID_User";
        
        return view('petani.cetak_kartu_petani', compact('cetak','url'));
    }

    
}
