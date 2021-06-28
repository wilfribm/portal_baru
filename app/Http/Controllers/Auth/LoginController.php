<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Exception;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Session;
use Auth;
use App\Providers\RouteServiceProvider;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }
    public function loginBiasa(Request $request){

        $validasi = db::table('master_user')
                         ->where('ID_User', $request->input('ID_User'))
                         ->get()->first;
        // //inijuga
        // $petani = db::table('master_user')
        //                  ->where('ID_User', $request->input('ID_User'))
        //                  ->get()->first;
        // //batashapus

        $role = DB::table('master_user_kat')
                        ->where('ID_User', $request->input('ID_User'))
                        ->first();

        // $ID_User = DB::table('master_user')->where('ID_User', $request->input('ID_User'))
        //                 ->first();
        // $password = DB::table('master_user')->where('password', $request->input('password'))
        //                 ->first();
        // $validasi = DB::table('master_user')
        //     ->where('ID_User', '=', $ID_User)
        //     ->where('password', '=', $password)
        //     ->count();

        if($validasi){ //apakah ID_User tersebut ada atau tidak
            // if(Hash::check($request->input('Password'), $validasi->ID_User->Password)){
            // if(($request->input('Password'), $validasi->ID_User->Password)){
            if(sha1($request->input('Password')) == $validasi->ID_User->Password){
                $request->session()->put('login','1');
                $request->session()->put('ID_User',$request->input('ID_User'));
                if ($role->ID_Kategori == 'ADP') {
                    return redirect('/admin/approval');

                }elseif($role->ID_Kategori == 'PET'){
                    return view('petani/dashboard_petani');
                }else {
                    if ($validasi->ID_User->Tingkat_Priv == 1) {
                        return redirect('pengajar/dashboard');
                    } else {
                        return redirect(' ')->with('alert','Akun anda belum di Approve Admin !');
                    }
                }
            } else{
                return redirect(' ')->with('alert','Password atau User, Salah !');
            }
        }
        // //Tambah darisini
        // elseif($petani){
        //     if(sha1($request->input('Password')) == $petani->Password AND $request->input('ID_User') == $petani->ID_User ){
        //         return view('petani/dashboard_petani');
        //     }
        // }// batas hapus
        else{
            return redirect(' ')->with('alert','Password atau User, Salah !');
        }


}
        public function index(){
            if(!Session::get('login')){
                return redirect('login')->with('alert','Kamu harus login dulu');
            }
            else{
                return view('pengajar/dashboard');
            }
        }
        public function logout(){
            Session::flush();
            return redirect(' ')->with('success','Kamu sudah logout');
        }

}