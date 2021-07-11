<?php

namespace App\Http\Controllers\Auth;

//use App\User;
use Illuminate\Http\Request;
use DB;
use Validator;

use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Validation\ValidatesRequests;


class RegisterController extends Controller
{
    use ValidatesRequests;
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    // /**
    //  * Get a validator for an incoming registration request.
    //  *
    //  * @param  array  $data
    //  * @return \Illuminate\Contracts\Validation\Validator
    //  */
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users',
    //         'password' => 'required|string|min:6|confirmed',
    //     ]);
    // }

    // /**
    //  * Create a new user instance after a valid registration.
    //  *
    //  * @param  array  $data
    //  * @return \App\User
    //  */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => bcrypt($data['password']),
    //     ]);
    // }
    public function insertform(){
        return view('/register');
        }
    // public function daftar_baru(Request $request){

        

        // $ID_User = $request->input('ID_User');
        // $Password = $request->input('password');
        // $PIN = '123456'; 
        // $jawaban = ' asal ';
        // $Tingkat_Priv = '0';

        // $nama = $request->input('nama');
        // $jenis_kelamin = $request->input('jenis_kelamin');
        // $tanggal_lahir = $request->input('tanggal_lahir');
        // $alamat = $request->input('alamat');
        // $provinsi= $request->input('provinsi');
        // $kabupaten = 'asal ';
        // $kecamatan = 'asal ';
        // $kelurahan_desa = 'asal ';
        // $jumlah_lahan = 'Tidak Ada';  
        // $jumlah_tenaga = 'Tidak Ada';  
        // $nomor_telpon = $request->input('nomor_telpon');
        // $Email = $request->input('Email');
        // $foto = 'asal';
        
        // $ID_Kategori = $request->input('ID_Kategori');
        // //$hashpass=bcrypt($Password);
        // $hashpass=sha1($Password);

     // $m_user=array('ID_User'=>$ID_User,'password'=>$hashpass,'jawaban'=>$jawaban,'PIN'=>$PIN,'Tingkat_Priv'=>$Tingkat_Priv);

     //    $detail=array('ID_User'=>$ID_User, 'nama'=>$nama,'jenis_kelamin'=>$jenis_kelamin,
     //                'tanggal_lahir'=>$tanggal_lahir,'alamat'=>$alamat,'provinsi'=>$provinsi,'nomor_telpon'=>$nomor_telpon,'Email'=>$Email,
     //                'kabupaten'=>$kabupaten,'kecamatan'=>$kecamatan,'kelurahan_desa'=>$kelurahan_desa,'foto'=>$foto);
                    
     //    $kat=array('ID_User'=>$ID_User, 'ID_kategori'=>$ID_Kategori); 

     //    $maspet = array('ID_User'=>$ID_User, 'Nama_Petani'=>$nama, 'Email'=>$Email, 'Alamat_Petani'=>$alamat, 'Provinsi'=>$provinsi, 'Nomor_Telpon'=>$nomor_telpon, 'Tanggal_Lahir'=>$tanggal_lahir, 'jns_kelamin'=>$jenis_kelamin, 'jml_lahan'=>$jumlah_lahan, 'jml_tng_kerja_musiman'=>$jumlah_tenaga);

     //    $count =DB::table('master_user')->where('ID_User', $ID_User)->count();

     //    $namatgl =DB::table('master_petani')
     //        ->where('Nama_Petani', $nama)
     //        ->where('Tanggal_Lahir', $tanggal_lahir)
     //        ->count();
        
     //    if($count > 0){
     //        return redirect('/register')->with('alert','Maaf Username anda telah digunakan ');
     //    }elseif($namatgl > 0){
     //        return redirect('/register')->with('alert','Maaf Anda Sudah Memiliki Akun');
     //    }

     //    else{
        
                  
     //                DB::table('master_user')->insert($m_user);
     //                DB::table('master_detail_user')->insert($detail);
     //                DB::table('master_petani')->insert($maspet);

     //                DB::table('master_user_kat')->insert($kat);
                   
     //                return redirect('/login')->with('success','Selamat Anda berhasil Mendaftar, Silakan Login');         
     //    } 
                 
    // }

    // public function daftar_baru_admin(Request $request){
    //     $ID_User = $request->input('ID_User'); //OK
    //     $Password = $request->input('password');
    //     $PIN = '123456'; 
    //     $jawaban = ' asal ';
    //     $Tingkat_Priv = '0';
    //     $nama = $request->input('nama');
    //     $jenis_kelamin = $request->input('jenis_kelamin');
    //     $tanggal_lahir = $request->input('tanggal_lahir');
    //     $alamat = $request->input('alamat');
    //     $provinsi= $request->input('provinsi');
    //     $kabupaten = 'asal ';
    //     $kecamatan = 'asal ';
    //     $kelurahan_desa = 'asal ';  
    //     $nomor_telpon = $request->input('nomor_telpon');
    //     $Email = $request->input('Email');
    //     $foto = 'asal';
    //     $ID_Kategori = $request->input('ID_Kategori'); //OK
    //     //$hashpass=bcrypt($Password);
    //     $hashpass=sha1($Password);

    //  $m_user=array('ID_User'=>$ID_User,'password'=>$hashpass,'jawaban'=>$jawaban,'PIN'=>$PIN,'Tingkat_Priv'=>$Tingkat_Priv);

    //     $detail=array('ID_User'=>$ID_User, 'nama'=>$nama,'jenis_kelamin'=>$jenis_kelamin,
    //                 'tanggal_lahir'=>$tanggal_lahir,'alamat'=>$alamat,'provinsi'=>$provinsi,'nomor_telpon'=>$nomor_telpon,'Email'=>$Email,
    //                 'kabupaten'=>$kabupaten,'kecamatan'=>$kecamatan,'kelurahan_desa'=>$kelurahan_desa,'foto'=>$foto);

    //     $maspet = array('ID_User'=>$ID_User, 'Nama_Petani'=>$nama, 'Email'=>$Email, 'Alamat_Petani'=>$alamat, 'Provinsi'=>$provinsi, 'Nomor_Telpon'=>$nomor_telpon, 'Tanggal_Lahir'=>$tanggal_lahir, 'jns_kelamin'=>$jenis_kelamin);
                    
    //     $kat=array('ID_User'=>$ID_User, 'ID_kategori'=>$ID_Kategori); 

    //     $count =DB::table('master_user')->where('ID_User', $ID_User)->count();

    //      $namatgl =DB::table('master_petani')
    //         ->where('Nama_Petani', $nama)
    //         ->where('Tanggal_Lahir', $tanggal_lahir)
    //         ->count();
        
    //     if($count > 0){
    //         return redirect('/register')->with('alert','Maaf Username ànda telah digunakan ');
    //     }elseif($namatgl > 0){
    //         return redirect('/register')->with('alert','Maaf Anda Sudah Memiliki Akun');
    //     }
    //     else{
        
                  
    //                 DB::table('master_user')->insert($m_user);
    //                 DB::table('master_detail_user')->insert($detail);
    //                 DB::table('master_petani')->insert($maspet);
    //                 DB::table('master_user_kat')->insert($kat);
                   
    //                 return redirect('admin/daftar/petani')->with('success', 'Tambah Petani Berhasil');         
    //     } 
                 
    // }
    public function showprovinsi(){
        
    }


    public function daftar_baru(Request $request){
            // $this->validate($request,
     Validator::extend('without_spaces', function($attr, $value){
        return preg_match('/^\S*$/u', $value);
    });
      $this->validate($request, [
         // $request->validate([
            $id = 'ID_User' => 'required|min:3|max:10|without_spaces',

            $idk = 'ID_Kategori' => 'required|regex:/^[a-zA-Z]+$/u',

            $nm = 'nama' => 'required|regex:/^[a-zA-Z]+$/u',
            
            $nt = 'nomor_telpon'=>'required|regex:/^[0-9]+$/|min:10|max:12',

            $jk = 'jenis_kelamin'=>'required|regex:/^[1-2]+$/',

            $pv = 'provinsi' => 'required|regex:/^[a-zA-Z]+$/u',
            

            // 'email' => 'required|email|unique:users',

            $p = 'password' => 'required|min:3',                

            $cp = 'password_confirmation' => 'required|min:3|max:20|same:password',

        ], [

            'ID_User.required' => 'Username Harus diisi',

            'ID_User.min' => 'Username Harus 3 Karakter',

            'ID_User.max' => 'Username Hanya Maksimal 10 Karakter',

            'ID_User.without_spaces' => 'Username Tidak Boleh Mengandung Spasi',

            'nama.required' => 'Nama Harus diisi',
            'nama.regex' => 'Nama Harus Mengandung Huruf',

            'jenis_kelamin.regex' => 'Jenis Kelamin Belum dipilih',

            'provinsi.regex' => 'Provinsi Belum dipilih',
            'ID_Kategori.regex' => 'Harap Pilih Mendaftar Sebagai Apa',

            'nomor_telpon.required' => 'Nomor Harus diisi',
            'nomor_telpon.regex' => 'Nomor Harus Angka',
            'nomor_telpon.min' => 'Nomor Tidak Valid',
            'nomor_telpon.max' => 'Nomor Terlalu Banyak',

            'password.required' => 'Password Harus Diisi',
            'password.min' => 'Password Minimal 3 Karakter',
            'password_confirmation.same' => 'Password Tidak Sama',

        ]);
      // $dat = $this->validate($request, [

      //       // $ID_Kategori = 'ID_Kategori' =>'required',

      //       // $ID_User = 'ID_User' =>   'required',

      //       // $nama = 'nama'              =>      'required|string|min:2',

      //       // $Email = 'Email'             => 'required|email',

      //       // $alamat = 'alamat'              =>      'required',

      //       // $provinsi = 'provinsi'              =>      'required|string|min:4',

      //       // $nomor_telpon = 'nomor_telpon'             =>      'required|numeric',

      //       // $tanggal_lahir = 'tanggal_lahir'             =>  'required|max:10',

      //       // $jenis_kelamin = 'jenis_kelamin'              =>      'required|min:1',

      //       // $password = 'password'          =>      'required|alpha_num|min:3',

      //       // $confirm_password = 'password_confirmation'  =>      'required|same:password',
      //   ]);

        
       // $ID_User = tes()->except('ID_User');
       // $ID_User = json_encode($this['ID_User']);
       // $nama = $dat['nama'];
       // $Email = $dat['Email'];
       // $alamat = $dat['alamat'];
       // $provinsi = $dat['provinsi'];
       // $nomor_telpon = $dat['nomor_telpon'];
       // $tanggal_lahir = $dat['tanggal_lahir'];
       // $jenis_kelamin = $dat['jenis_kelamin'];
       // $password = $dat['password'];
       // $hashpass=sha1($password);


       //  $kabupaten = 'asal ';
       //  $kecamatan = 'asal ';
       //  $kelurahan_desa = 'asal ';
       //  $jumlah_lahan = 'Tidak Ada'; 
       //  $jumlah_tenaga = 'Tidak Ada';
       //  $foto = 'asal';

       //  $PIN = '123456'; 
       //  $jawaban = ' asal ';
       //  $Tingkat_Priv = '0';


        $ID_User = $request->input($id);
        $pambil = $request->input($p);
        $PIN = '123456'; 
        $jawaban = ' asal ';
        $Tingkat_Priv = '0';

        $nama = $request->input($nm);
        $jenis_kelamin = $request->input($jk);
        $tanggal_lahir = $request->input('tanggal_lahir');
        
        $alamat = $request->input('alamat');
        $provinsi= $request->input($pv);

        $kabupaten = 'asal ';
        $kecamatan = 'asal ';
        $kelurahan_desa = 'asal ';
        $jumlah_lahan = 'Tidak Ada';  
        $jumlah_tenaga = 'Tidak Ada';  
        $nomor_telpon = $request->input($nt);
        $Email = $request->input('Email');
        $foto = 'asal';
        
        $ID_Kategori = $request->input($idk);
        //$hashpass=bcrypt($Password);
        $hashpass=sha1($pambil);



       $m_user=array('ID_User'=>$ID_User,'password'=>$hashpass,'jawaban'=>$jawaban,'PIN'=>$PIN,'Tingkat_Priv'=>$Tingkat_Priv);

        $detail=array('ID_User'=>$ID_User, 'nama'=>$nama,'jenis_kelamin'=>$jenis_kelamin,
                    'tanggal_lahir'=>$tanggal_lahir,'alamat'=>$alamat,'provinsi'=>$provinsi,'nomor_telpon'=>$nomor_telpon,'Email'=>$Email,
                    'kabupaten'=>$kabupaten,'kecamatan'=>$kecamatan,'kelurahan_desa'=>$kelurahan_desa,'foto'=>$foto);
                    
        $kat=array('ID_User'=>$ID_User, 'ID_kategori'=>$ID_Kategori); 

        $maspet = array('ID_User'=>$ID_User, 'Nama_Petani'=>$nama, 'Email'=>$Email, 'Alamat_Petani'=>$alamat, 'Provinsi'=>$provinsi, 'Nomor_Telpon'=>$nomor_telpon, 'Tanggal_Lahir'=>$tanggal_lahir, 'jns_kelamin'=>$jenis_kelamin, 'jml_lahan'=>$jumlah_lahan, 'jml_tng_kerja_musiman'=>$jumlah_tenaga);

        $count =DB::table('master_user')->where('ID_User', $ID_User)->count();
        $emailcount =DB::table('master_petani')->where('Email', $Email)->count();

        $namatgl =DB::table('master_petani')
            ->where('Nama_Petani', $nama)
            ->where('Tanggal_Lahir', $tanggal_lahir)
            ->count();
        
        if($count > 0){
            return redirect('/register')->with('alert','Maaf Username anda telah digunakan ');
        }elseif($namatgl > 0){
            return redirect('/register')->with('alert','Maaf Anda Sudah Memiliki Akun');
        }elseif($emailcount > 0){
            return redirect('/register')->with('alert','Maaf Email Sudah Digunakan');
        }

        else{
        
                  
                    DB::table('master_user')->insert($m_user);
                    DB::table('master_detail_user')->insert($detail);
                    DB::table('master_petani')->insert($maspet);

                    DB::table('master_user_kat')->insert($kat);
                   
                   if($ID_Kategori == 'PET'){
                    return redirect('/login')->with('success','Selamat Anda berhasil Mendaftar Sebagai Petani, Silakan Login ');
                }else{
                    return redirect('/login')->with('success','Selamat Anda berhasil Mendaftar Sebagai Pengajar, Silakan Login ');
                }
                             
        } 


                 
    }

}
