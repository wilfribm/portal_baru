<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Carbon;
use Session;
use Illuminate\Validation\Rule;



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

        $provinsi= DB::table('provinsi')
                ->get(["Nama_Provinsi"]);

        $kab = DB::SELECT("SELECT * FROM kabupaten WHERE Nama_Provinsi='ACEH'");
        
        return view('petani.ubah_profile', compact('ambil','provinsi'));

    }

    public function getKabupaten(Request $request)
    {
        $kabupaten['kabupaten']= DB::table('kabupaten')
                ->where("Nama_Provinsi",$request->Nama_Provinsi)
                ->get(["Nama_Kabupaten","Nama_Provinsi"]);
        return response()->json($kabupaten);
    }

    public function getKecamatan(Request $request)
    {
        $kecamatan['kecamatan']= DB::table('kecamatan')
                ->where("Nama_Kabupaten",$request->Nama_Kabupaten)
                ->get(["Nama_Kecamatan","Nama_Kabupaten","Nama_Provinsi"]);
        return response()->json($kecamatan);
    }

    public function getDesa(Request $request)
    {
        $kelurahan_desa['kelurahan_desa']= DB::table('kelurahan_desa')
                ->where("Nama_Kecamatan",$request->Nama_Kecamatan)
                ->get(["Nama_Desa","Nama_Kecamatan","Nama_Kabupaten","Nama_Provinsi"]);
        return response()->json($kelurahan_desa);
    }

     public function loadData(Request $request)
    {
        if ($request->has('q')) {
            $cari = $request->q;
            $data = DB::table('kabupaten')
                    ->select('Nama_Kabupaten')
                    ->where('Nama_Kabupaten', 'LIKE', '%$cari%')
                    ->get();
            // var_dump($data);
            return response()->json($data);
        }
    }

    

    public function update_profile(Request $request, $id)
    {
        Validator::extend('without_spaces', function($attr, $value){
        return preg_match('/^\S*$/u', $value);
    });
        // $validator = Validator::make(
        //     array(
        //       'Email'=>$request['Email'],
        //      ),
        //     array(
        //     //   'Email' => 'required|email|unique:master_petani,Email,'.$request['id'],
            
        //      ));

        //      if ($validator->fails())
        //     {
        //     $messages = $validator->messages();
        //     return back()->with('message', 'Email Failed');
        //     }
        // $user = DB::table('master_detail_user')
        //     ->join('master_user_kat', 'master_user_kat.ID_User', '=', 'master_detail_user.ID_User')
        //     ->join('master_petani', 'master_petani.ID_User', '=', 'master_detail_user.ID_User')
        //     ->where('master_detail_user.Email', $request->Email)->get();

        // if(sizeof($user) > 0){
        // $msg = 'Email sudah pernah digunakan, silakan gunakan email lain.';
        // Session::flash('error', $msg);
        // return back();
        // }

        // $id = $request->input('id');
        $dt = new Carbon\Carbon();
        $before = $dt->subYears(13)->format('Y-m-d');
        // $user = DB::table('master_petani')->find($this->id);
        
        //User::find($this->users);
       
    
        // $user = DB::table('master_petani')
        //         ->where('ID_User', '=', $this->id)->first();
      $this->validate($request, [
            $nm = 'nama' => 'required|regex:/^[a-zA-Z ]*$/',
            $nt = 'nomor_telpon'=>'required|regex:/^[0-9]+$/|min:10|max:12',
            $jk = 'jenis_kelamin'=>'required|regex:/^[1-2]+$/',
            // $em = 'Email'=>'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            // $em = 'Email'=>'required|email|unique:master_petani,Email,'.$user->id,
            // $em = 'Email'=>'required|email|unique:master_petani,Email',
            $pv = 'provinsi' => 'required',
            $kb = 'kabupaten' => 'required',
            $kc = 'kecamatan' => 'required',
            $kd = 'kelurahan_desa' => 'required',
            $tgl= 'tanggal_lahir' => 'required|date|before:' . $before,
            $alamat = 'alamat' => 'required|max:80',
        ], [

            'nama.required' => 'Nama yang diubah Harus diisi',
            'nama.regex' => 'Nama yang diubah Harus Mengandung Huruf',
            // 'nama.max' => 'Nama yang diubah Tidak Valid',
            // 'nama.min' => 'Nama yang diubah Tidak Valid',

            'jenis_kelamin.regex' => 'Jenis Kelamin Belum dipilih',

            // 'Email.required' => 'Email perlu diisi',
            // 'Email.exists' => 'Email sudah digunakan, gunakan yang lainnya.',

            'tanggal_lahir.before' => 'Tanggal lahir Tidak Valid, setidaknya anda lahir 13 tahun lalu',
             
            'provinsi.required' => 'Provinsi Belum dipilih',
            'kabupaten.required' => 'Kabupaten Belum dipilih',
            'kecamatan.required' => 'Kecamatan Belum dipilih',
            'kelurahan_desa.required' => 'Desa Belum dipilih',

            'nomor_telpon.required' => 'Nomor Wajib diisi',
            'nomor_telpon.regex' => 'Nomor yang diubah Harus Angka',
            'nomor_telpon.min' => 'Nomor yang diubah Tidak Valid, minimal 10 karakter',
            'nomor_telpon.max' => 'Nomor yang diubah Terlalu Banyak, maksimal 12 karakter',

            'alamat.required' => 'Alamat wajib diisi',
            'alamat.max' => 'Alamat yang diubah Terlalu Banyak, maksimal 80 karakter',
        ]);

        


        $id = $request->route('id');
        $Nama_Petani = substr($request->input($nm),0,29);
        //$Nama_Petani = $request->input('nama');
        $Jenis_Kelamin = $request->input('jenis_kelamin');
        $Alamat_Petani = $request->input('alamat');
        $Tanggal_Lahir = $request->input('tanggal_lahir');
        $Provinsi = $request->input('provinsi');
        $Kabupaten = $request->input('kabupaten');
        $Kecamatan = $request->input('kecamatan');
        $Kelurahan_desa = $request->input('kelurahan_desa');
        $Nomor_Telpon = $request->input('nomor_telpon');
        $Email = $request->input('Email');

        // $user = DB::table('master_petani')->where('ID_User',$id)->first();
        // $this->validate($request,[
        // 'Email'=>['required',
        //     Rule::unique('master_petani')->ignore($id),
        //     ]
        // ]);
        
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
            $resorce->move("foto_petani", $name);
            //$resorce->move(\base_path() ."/public/foto_petani", $name);
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


        $kel = DB::table('master_kel_tani')
                ->select('Nama_Kelompok_Tani')
                ->where('ID_User', $id)
                ->first();

        // dd($kel);


        $url = "http://okenih.rapidserver.my.id/petani/$cetak->ID_User";

        

        
        return view('petani.cetak_kartu_petani', compact('cetak','url','kel'));
    }

    public function selectSearch(Request $request)
    {
        $movies = [];

        if($request->has('q')){
            $search = $request->q;

            // $movies =Movie::select("id", "name")
            //         ->where('name', 'LIKE', "%$search%")
            //         ->get();
           
           $movies =DB::SELECT('provinsi')
                    ->where('name', 'LIKE', "%$search%")
                    ->get();

            // $movies = $ddb::select('id','Nama_Provinsi')
            //     ->where('Nama_Provinsi', 'LIKE', '%$search%')
            //     ->get();

          

        }
        return response()->json($movies);
    }

    public function ganti_password(Request $request, $id)
    {
        $id = $request->route('id');
        $user = DB::table('master_user')
                ->where('ID_User', $id)
                ->first();
        return view('petani.ganti_password', compact('user'));
    }

    public function ganti(Request $request, $id)
    {
        $this->validate($request, [
            $p = 'Password' => 'required|min:3',                

            $cp = 'CPassword' => 'required|min:3|max:20|same:Password',
        ],[
            'Password.required' => 'Password Harus Diisi',
            'CPassword.required' => 'Konfirmasi Password Harus Diisi',
            'Password.min' => 'Password Minimal 3 Karakter',
            'CPassword.min' => 'Konfirmasi Password Minimal 3 Karakter',
            'CPassword.same' => 'Password Tidak Sama',
        ]);

        // $Password = $request->input('Password');
        
        $Password = $request->input($p);
        $hashpass=sha1($Password);
        $reset = DB::table('master_user')
                ->where('ID_User', $id)
                ->update(['Password'=> $hashpass]);
        if($reset){
        return back()->with('success', 'Password Berhasil Diubah');
        }else{
            echo "Gagal";
        }

    }
    

    
}


// namespace App\Http\Controllers;

// use DB;
// use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
// use Validator;




// class PetaniProfileController extends Controller
// {
//     // public function data_diri_petani(Request $request){
//     //     $getuser = $request->session()->get('ID_User');
//     //     $showprofile = DB::table('master_detail_user')
//     //                             ->join('master_user_kat', 'master_user_kat.ID_User', '=', 'master_detail_user.ID_User')
//     //                             ->where('master_detail_user.ID_User',$getuser)
//     //                             ->first();


//     //     // $showprofile = DB::table('SELECT * FROM master_petani');
                                
//     //     // var_dump($showprofile);
//     //     return view('petani.data_diri', compact('showprofile'));
//     // }

//     public function data_diri_petani(Request $request, $id)
//     {
       
//         $id = $request->route('id');
//         // $data = DB::SELECT("SELECT * FROM master_detail_user WHERE ID_User = '$id_user'");
//        $detail = DB::table('master_detail_user')
//                 ->where('ID_User', $id)
//                 ->first();
//         $lahan = DB::table('master_petani')
//                 ->where('ID_User', $id)
//                 ->first();
        
//         // var_dump($detail);
//          return view('petani.data_diri', compact('detail','lahan'));
//     }

    

//     public function ubah_profile(Request $request, $id)
//     {
//         $id = $request->route('id');
//         $ambil = DB::table('master_detail_user')
//                 ->where('ID_User', $id)
//                 ->first();

        

        
//         $kab = DB::SELECT("SELECT * FROM kabupaten WHERE Nama_Provinsi='ACEH'");
        
//         return view('petani.ubah_profile', compact('ambil'));

//     }

//      public function loadData(Request $request)
//     {
//         if ($request->has('q')) {
//             $cari = $request->q;
//             $data = DB::table('kabupaten')
//                     ->select('Nama_Kabupaten')
//                     ->where('Nama_Kabupaten', 'LIKE', '%$cari%')
//                     ->get();
//             // var_dump($data);
//             return response()->json($data);
//         }
//     }

    

//     public function update_profile(Request $request, $id)
//     {
//         Validator::extend('without_spaces', function($attr, $value){
//         return preg_match('/^\S*$/u', $value);
//     });
//       $this->validate($request, [
//          // $request->validate([
//             // $id = 'ID_User' => 'required|min:3|max:10|without_spaces',

//             // $idk = 'ID_Kategori' => 'required|regex:/^[a-zA-Z]+$/u',

//             $nm = 'nama' => 'required|regex:/^[a-zA-Z ]*$/|max:30|min:3',
            
            
//             $nt = 'nomor_telpon'=>'required|regex:/^[0-9]+$/|min:10|max:12',

//             $jk = 'jenis_kelamin'=>'required|regex:/^[1-2]+$/',

//             $pv = 'provinsi' => 'required|regex:/^[a-zA-Z ]*$/',
//             $kb = 'kabupaten' => 'required|regex:/^[a-zA-Z ]*$/',
//             $kc = 'kecamatan' => 'required|regex:/^[a-zA-Z ]*$/',
//             $kd = 'kelurahan_desa' => 'required|regex:/^[a-zA-Z ]*$/',

            
            

//             // 'email' => 'required|email|unique:users',

//             // $p = 'password' => 'required|min:3',                

//             // $cp = 'password_confirmation' => 'required|min:3|max:20|same:password',

//         ], [

//             // 'ID_User.required' => 'Username Harus diisi',

//             // 'ID_User.min' => 'Username Harus 3 Karakter',

//             // 'ID_User.max' => 'Username Hanya Maksimal 10 Karakter',

//             // 'ID_User.without_spaces' => 'Username Tidak Boleh Mengandung Spasi',

//             'nama.required' => 'Nama yang diubah Harus diisi',
//             'nama.regex' => 'Nama yang diubah Harus Mengandung Huruf',
//             'nama.max' => 'Nama yang diubah Tidak Valid',
//             'nama.min' => 'Nama yang diubah Tidak Valid',

//             'jenis_kelamin.regex' => 'Jenis Kelamin Belum dipilih',

//             'provinsi.regex' => 'Provinsi Belum dipilih',
//             'kabupaten.regex' => 'Kabupaten Belum dipilih',
//             'kecamatan.regex' => 'Kecamatan Belum dipilih',
//             'kelurahan_desa.regex' => 'Kelurahan / Desa Belum dipilih',
//             // 'ID_Kategori.regex' => 'Harap Pilih Mendaftar Sebagai Apa',

//             'nomor_telpon.required' => 'Nomor yang diubah Harus diisi',
//             'nomor_telpon.regex' => 'Nomor yang diubah Harus Angka',
//             'nomor_telpon.min' => 'Nomor yang diubah Tidak Valid',
//             'nomor_telpon.max' => 'Nomor yang diubah Terlalu Banyak',

//             // 'password.required' => 'Password Harus Diisi',
//             // 'password.min' => 'Password Minimal 3 Karakter',
//             // 'password_confirmation.same' => 'Password Tidak Sama',

//         ]);


//         $id = $request->route('id');
//         $Nama_Petani = $request->input('nama');
//         $Jenis_Kelamin = $request->input('jenis_kelamin');
//         $Alamat_Petani = $request->input('alamat');
//         $Tanggal_Lahir = $request->input('tanggal_lahir');
//         $Provinsi = $request->input('provinsi');
//         $Kabupaten = $request->input('kabupaten');
//         $Kecamatan = $request->input('kecamatan');
//         $Kelurahan_desa = $request->input('kelurahan_desa');
//         $Nomor_Telpon = $request->input('nomor_telpon');
//         $Email = $request->input('Email');
        
//        //  $Pendidikan_Terakhir = $request->input('Pendidikan_Terakhir');
//        //  $Jumlah_Tanggungan = $request->input('Jumlah_Tanggungan');
//        //  $Agama = $request->input('Agama');
        
//        //  $Deskripsi_Keahlian = $request->input('Deskripsi_Keahlian');
//        // $Status = $request->input('Status');

//        //  $nama_istri = $request->input('nama_istri');
//        //  $jml_tng_kerja_musiman = $request->input('jml_tng_kerja_musiman');
//        //  $jml_lahan = $request->input('jml_lahan');

            
//             $resorce  = $request->file('Foto');
//             // $name   = $resorce->getClientOriginalName();
//             // $resorce->move(\base_path() ."/public/foto_petani", $name);
            

//           if(!empty($resorce)){
//             $name   = $resorce->getClientOriginalName();
//             $resorce->move(\base_path() ."/public/foto_petani", $name);
//                 $maspet = array('Nama_Petani'=>$Nama_Petani, 'Email'=>$Email, 'Alamat_Petani'=>$Alamat_Petani,'Nomor_Telpon'=>$Nomor_Telpon, 'Tanggal_Lahir'=>$Tanggal_Lahir,'Provinsi'=>$Provinsi, 'Kabupaten'=>$Kabupaten,'Kecamatan'=>$Kecamatan,'Desa_Kelurahan'=>$Kelurahan_desa, 'Foto'=>$name);

//                     $detail=array('nama'=>$Nama_Petani,
//                     'tanggal_lahir'=>$Tanggal_Lahir,'alamat'=>$Alamat_Petani,'nomor_telpon'=>$Nomor_Telpon,'Email'=>$Email, 'jenis_kelamin'=>$Jenis_Kelamin,'provinsi'=>$Provinsi, 'kabupaten'=>$Kabupaten,'kecamatan'=>$Kecamatan,'kelurahan_desa'=>$Kelurahan_desa, 'Foto'=>$name);

                  
//                     DB::table('master_petani')->where('ID_User', $id)->update($maspet);
//                     DB::table('master_detail_user')->where('ID_User', $id)->update($detail);
                

//           }else{
//              $maspet = array('Nama_Petani'=>$Nama_Petani, 'Email'=>$Email, 'Alamat_Petani'=>$Alamat_Petani,'Nomor_Telpon'=>$Nomor_Telpon, 'Tanggal_Lahir'=>$Tanggal_Lahir,'Provinsi'=>$Provinsi, 'Kabupaten'=>$Kabupaten,'Kecamatan'=>$Kecamatan,'Desa_Kelurahan'=>$Kelurahan_desa);

//                     $detail=array('nama'=>$Nama_Petani,
//                     'tanggal_lahir'=>$Tanggal_Lahir,'alamat'=>$Alamat_Petani,'nomor_telpon'=>$Nomor_Telpon,'Email'=>$Email, 'jenis_kelamin'=>$Jenis_Kelamin,'provinsi'=>$Provinsi, 'kabupaten'=>$Kabupaten,'kecamatan'=>$Kecamatan,'kelurahan_desa'=>$Kelurahan_desa);

                

//                     DB::table('master_petani')->where('ID_User', $id)->update($maspet);
//                     DB::table('master_detail_user')->where('ID_User', $id)->update($detail);
//           }
                    
           
             

         

        
//         return back()->with('success', 'Ubah Petani Berhasil');

//     }

//      public function lahan_petani(Request $request, $id)
//     {
       
//         $id = $request->route('id');
//         // $data = DB::SELECT("SELECT * FROM master_detail_user WHERE ID_User = '$id_user'");
//        $lahan_petani = DB::table('master_petani')
//                 ->where('ID_User', $id)
//                 ->first();

//         // var_dump($lahan_petani);
//          return view('petani.lahan', compact('lahan_petani'));
//     }

//     public function cetak_petani(Request $request, $id)
//     {
//         $id = $request->route('id');
//         $cetak = DB::table('master_petani')->where('ID_User',$id)->first();


//         $kel = DB::table('master_kel_tani')
//                 ->select('Nama_Kelompok_Tani')
//                 ->where('ID_User', $id)
//                 ->first();

//         // dd($kel);


//         $url = "http://okenih.rapidserver.my.id/petani/$cetak->ID_User";

        

        
//         return view('petani.cetak_kartu_petani', compact('cetak','url','kel'));
//     }

//     public function selectSearch(Request $request)
//     {
//         $movies = [];

//         if($request->has('q')){
//             $search = $request->q;

//             // $movies =Movie::select("id", "name")
//             //         ->where('name', 'LIKE', "%$search%")
//             //         ->get();
           
//            $movies =DB::SELECT('provinsi')
//                     ->where('name', 'LIKE', "%$search%")
//                     ->get();

//             // $movies = $ddb::select('id','Nama_Provinsi')
//             //     ->where('Nama_Provinsi', 'LIKE', '%$search%')
//             //     ->get();

          

//         }
//         return response()->json($movies);
//     }

    

    
// }
