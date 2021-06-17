<?php

namespace App\Http\Controllers\Auth;

//use App\User;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;


class RegisterController extends Controller
{
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
    public function daftar_baru(Request $request){
        $ID_User = $request->input('ID_User');
        $Password = $request->input('password');
        $PIN = '123456'; 
        $jawaban = ' asal ';
        $Tingkat_Priv = '0';
        $nama = $request->input('nama');
        $jenis_kelamin = $request->input('jenis_kelamin');
        $tanggal_lahir = $request->input('tanggal_lahir');
        $alamat = $request->input('alamat');
        $provinsi= $request->input('provinsi');
        $kabupaten = 'asal ';
        $kecamatan = 'asal ';
        $kelurahan_desa = 'asal ';  
        $nomor_telpon = $request->input('nomor_telpon');
        $Email = $request->input('Email');
        $foto = 'asal';
        $ID_Kategori = 'TL';
        //$hashpass=bcrypt($Password);
        $hashpass=sha1($Password);

     $m_user=array('ID_User'=>$ID_User,'password'=>$hashpass,'jawaban'=>$jawaban,'PIN'=>$PIN,'Tingkat_Priv'=>$Tingkat_Priv);

        $detail=array('ID_User'=>$ID_User, 'nama'=>$nama,'jenis_kelamin'=>$jenis_kelamin,
                    'tanggal_lahir'=>$tanggal_lahir,'alamat'=>$alamat,'provinsi'=>$provinsi,'nomor_telpon'=>$nomor_telpon,'Email'=>$Email,
                    'kabupaten'=>$kabupaten,'kecamatan'=>$kecamatan,'kelurahan_desa'=>$kelurahan_desa,'foto'=>$foto);
                    
        $kat=array('ID_User'=>$ID_User, 'ID_kategori'=>$ID_Kategori); 

        $count =DB::table('master_user')->where('ID_User', $ID_User)->count();
        
        if($count > 0){
            return redirect('/register')->with('alert','Maaf Username ànda telah digunakan ');
        }else{
        
                  
                    DB::table('master_user')->insert($m_user);
                    DB::table('master_detail_user')->insert($detail);
                    DB::table('master_user_kat')->insert($kat);
                   
                    return redirect(' ')->with('status','Selamat Anda berhasil Mendaftar Tunggu Konfirmasi Dari Admin ');         
        } 
                 
    }
    public function showprovinsi(){
        
    }
}
