<?php

namespace App\Http\Controllers;

use DB;
use Session;
use Intervention\Image\ImageManagerStatic as Image;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function Profile(Request $request){
        $getuser = $request->session()->get('ID_User');
        $showprofile = DB::table('master_detail_user')
                                ->join('master_user_kat', 'master_user_kat.ID_User', '=', 'master_detail_user.ID_User')
                                ->where('master_detail_user.ID_User',$getuser)
                                ->first();
        $fotoprofil = DB::table('master_detail_user')
                                ->join('master_user_kat', 'master_user_kat.ID_User', '=', 'master_detail_user.ID_User')
                                ->where('master_detail_user.ID_User',$getuser)
                                ->first();                        
        return view('pengajar/profile', compact('showprofile','fotoprofil'));
    }
    public function ubahprofil(Request $request, $id){
        
            $id = $request->route('id');
            $getuser = $request->session()->get('ID_User');
            $fotoprofil = DB::table('master_detail_user')
                                ->join('master_user_kat', 'master_user_kat.ID_User', '=', 'master_detail_user.ID_User')
                                ->where('master_detail_user.ID_User',$getuser)
                                ->first();  
            $showprofile = DB::table('master_detail_user')
                ->where('ID_User', $id)
                ->first();
            $provinsi= DB::table('provinsi')
                ->get(["Nama_Provinsi"]);
            return view('pengajar.ubah_profile', compact('showprofile','fotoprofil','provinsi'));
        }
    public function update_profile(Request $request, $id)
    {
        // $id = $request->route('id');
        $Nama = $request->input('nama');
        $Jenis_Kelamin = $request->input('jenis_kelamin');
        $Alamat = $request->input('alamat');
        $Tanggal_Lahir = $request->input('tanggal_lahir');
        $Provinsi = $request->input('provinsi');
        $Kabupaten = $request->input('kabupaten');
        $Kecamatan = $request->input('kecamatan');
        $Kelurahan_desa = $request->input('kelurahan_desa');
        $Nomor_Telpon = $request->input('nomor_telpon');
        $Email = $request->input('Email');
        // $resorce  = $request->file('Foto');

        if($request->hasFile('Foto')) {
            $Foto  = $request->file('Foto');
            $nama_Foto   = $Foto->getClientOriginalName();
            $Resize = Image::make($Foto->getRealPath());
            $Resize->resize(140, 160);
            $Resize->save(public_path('/foto_pengajar/' .$nama_Foto));

            // $resorce->move(\base_path() ."/public/foto_pengajar", $name);
                // $maspet = array('Nama_Petani'=>$Nama, 'Email'=>$Email, 'Alamat_Petani'=>$Alamat_Petani,'Nomor_Telpon'=>$Nomor_Telpon, 'Tanggal_Lahir'=>$Tanggal_Lahir,'Provinsi'=>$Provinsi, 'Kabupaten'=>$Kabupaten,'Kecamatan'=>$Kecamatan,'Desa_Kelurahan'=>$Kelurahan_desa, 'Foto'=>$name);

                $detail=array('nama'=>$Nama,
                    'tanggal_lahir'=>$Tanggal_Lahir,'alamat'=>$Alamat,'nomor_telpon'=>$Nomor_Telpon,'Email'=>$Email, 'jenis_kelamin'=>$Jenis_Kelamin,'provinsi'=>$Provinsi, 'kabupaten'=>$Kabupaten,'kecamatan'=>$Kecamatan,'kelurahan_desa'=>$Kelurahan_desa, 'Foto'=>$nama_Foto);

                    // DB::table('master_petani')->where('ID_User', $id)->update($maspet);
                    DB::table('master_detail_user')->where('ID_User', $id)->update($detail);
        }else{
            // $maspet = array('Nama_Petani'=>$Nama, 'Email'=>$Email, 'Alamat_Petani'=>$Alamat_Petani,'Nomor_Telpon'=>$Nomor_Telpon, 'Tanggal_Lahir'=>$Tanggal_Lahir,'Provinsi'=>$Provinsi, 'Kabupaten'=>$Kabupaten,'Kecamatan'=>$Kecamatan,'Desa_Kelurahan'=>$Kelurahan_desa);

                $detail=array('nama'=>$Nama,
                    'tanggal_lahir'=>$Tanggal_Lahir,'alamat'=>$Alamat,'nomor_telpon'=>$Nomor_Telpon,'Email'=>$Email, 'jenis_kelamin'=>$Jenis_Kelamin,'provinsi'=>$Provinsi, 'kabupaten'=>$Kabupaten,'kecamatan'=>$Kecamatan,'kelurahan_desa'=>$Kelurahan_desa);
                    // DB::table('master_petani')->where('ID_User', $id)->update($maspet);
                    DB::table('master_detail_user')->where('ID_User', $id)->update($detail);
          }
        return redirect('pengajar/profile')->with('success', 'Profile berhasil diperbarui');
    }

    // public function ambilProvinsi($id){
    // 	$provinsi= DB::table('provinsi')
    //             ->where('Nama_Provinsi', $id)
    //             ->pluck('Nama_Provinsi');
    //     return json_encode($provinsi);
    // }

    public function ambilKabupaten(Request $request){
    	// $kabupaten= DB::table('kabupaten')
        //         // ->join('provinsi')
        //         ->where('Nama_Provinsi', $id)
        //         ->pluck('Nama_Provinsi','Nama_Kabupaten');
        // return json_encode($kabupaten);
        $data['kabupaten'] = DB::table('kabupaten')
                    ->where("Nama_Provinsi",$request->Nama_Provinsi)
                    ->get(["Nama_Kabupaten"]);
        return response()->json($data);
    }

    public function ambilKecamatan(Request $request){
        $data['kecamatan'] = DB::table('kecamatan')
                    ->where("Nama_Kabupaten",$request->Nama_Kabupaten)
                    ->get(["Nama_Kabupaten","Nama_Kecamatan"]);
        return response()->json($data);

    	// $kecamatan= DB::table('kecamatan')
        //         ->where('Nama_Kabupaten', $id)
        //         ->pluck('Nama_Provinsi','Nama_Kecamatan');
        // return json_encode($kecamatan);
    }

    public function ambilKelurahan(Request $request){
    	$data['kelurahan_desa'] = DB::table('kelurahan_desa')
                    ->where("Nama_Kecamatan",$request->NK)
                    ->get(["Nama_Desa"]);
        return response()->json($data);
    }
}