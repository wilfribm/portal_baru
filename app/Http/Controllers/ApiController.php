<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class ApiController extends Controller
{
    public function register(Request $request){
        $ID_User = $request->input('ID_User');
        $Password = $request->input('Password');
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
        $ID_Kategori = 'PSL';
        //$hashpass=bcrypt($Password);
        $hashpass = sha1($request->input('Password'));

     $m_user=array('ID_User'=>$ID_User,'Password'=>$hashpass,'jawaban'=>$jawaban,'PIN'=>$PIN,'Tingkat_Priv'=>$Tingkat_Priv);

        $detail=array('ID_User'=>$ID_User, 'nama'=>$nama,'jenis_kelamin'=>$jenis_kelamin,
                    'tanggal_lahir'=>$tanggal_lahir,'alamat'=>$alamat,'provinsi'=>$provinsi,'nomor_telpon'=>$nomor_telpon,'Email'=>$Email,
                    'kabupaten'=>$kabupaten,'kecamatan'=>$kecamatan,'kelurahan_desa'=>$kelurahan_desa,'foto'=>$foto);
                    
        $kat=array('ID_User'=>$ID_User, 'ID_kategori'=>$ID_Kategori); 

        $count =DB::table('master_user')->where('ID_User', $ID_User)->count();
        
        if($count > 0){
            return response()->json([
                "message" => "Not Acceptable"
            ], 406);
        }else{
        
                  
                    DB::table('master_user')->insert($m_user);
                    DB::table('master_detail_user')->insert($detail);
                    DB::table('master_user_kat')->insert($kat);
                   
                    return response()->json([
                        "message" => "student record created",
                        "ID_User" => $ID_User,
                        "nama" => $nama,
                        "foto" => $foto
                    ], 201);        
        } 
                 
    }
    
    public function login(Request $request){

        $validasi = db::table('master_user')
                         ->where('ID_User',$username = $request->input('ID_User'))
                         ->get()->first;
        // $validasi = DB::table('master_user')
        //     ->where('ID_User', '=', $ID_USer)
        //     ->where('password', '=', $password)
        //     ->count();
        if($validasi){ //apakah ID_User tersebut ada atau tidak
            //if(Hash::check($pass=$request->input('Password'), $validasi->ID_User->Password)){
            if(sha1($request->input('Password')) == $validasi->ID_User->Password){
                $ambildata= DB::table('master_detail_user')->where('ID_User',$username)->get();
                $unquoted = preg_replace('/^(\'(.*)\'|"(.*)")$/', '$2$3', $ambildata);
                
                return response()->json(["Result"=>
                ["ResultCode"=> 1,
                "ResultMessage"=>"Success Login" ],
                "User"=>$ambildata
            ], 200);
            } else{
                return response()->json(["Result"=>
                ["ResultCode"=> 0,
                "ResultMessage"=>"User atau password salah" ]], 401);
            }
        }else{
            return response()->json(["Result"=>
            ["ResultCode"=> 0,
            "ResultMessage"=>"User atau password salah" ]
            ], 401);
    }
}
//     public function login(Request $request){

//         $validasi = db::table('master_user')
//                          ->where('ID_User',$username = $request->input('ID_User'))
//                          ->get()->first;
//         // $validasi = DB::table('master_user')
//         //     ->where('ID_User', '=', $ID_USer)
//         //     ->where('password', '=', $password)
//         //     ->count();
//         if($validasi){ //apakah ID_User tersebut ada atau tidak
//             //if(Hash::check($pass=$request->input('Password'), $validasi->ID_User->Password)){
//             if(sha1($request->input('password')) == $validasi->ID_User->password){
//                 $ambildata= DB::table('master_detail_user')->where('ID_User',$username)->get();
//                 // $unquoted = preg_replace('/^(\'(.*)\'|"(.*)")$/', '$2$3', $ambildata);
                
//                 return response()->json(["Result"=>
//                 ["ResultCode"=> 1,
//                 "ResultMessage"=>"Success Login" ],
//                 "User"=>$ambildata
//             ], 200);
//             } else{
//                 return response()->json(["Result"=>
//                 ["ResultCode"=> 0,
//                 "ResultMessage"=>"User atau password salah" ]], 401);
//             }
//         }else{
//             return response()->json(["Result"=>
//             ["ResultCode"=> 0,
//             "ResultMessage"=>"User atau password salah" ]
//             ], 401);
//     }
// }
    
   
    public function pesertapilihmateri(request $request){
        $ID_Materi = $request->input('ID_Materi');
        $ID_User_Siswa = $request->input('ID_User_Siswa');
        $ID_User = $request->input('ID_User');
        
        $input=array('ID_Materi'=>$ID_Materi,'ID_User_Siswa'=>$ID_User_Siswa,'ID_User'=>$ID_User);
        DB::table('master_peserta_pilih_materi')->insert($input);
        return response()->json(["Result"=>
        ["ResultCode"=> 1,
        "ResultMessage"=>"Success Data Masuk Ke Database" ],
            "ID_Materi" => $ID_Materi,
            "ID_User_Siswa" => $ID_User_Siswa,
            "ID_User" => $ID_Materi
        ], 201);
    
    }
    public function kategori()
    {
    
    $kategori = DB::table('master_kategori')
            ->join('master_gambar', 'master_kategori.ID_Kategori', '=', 'master_gambar.id_ref')
            ->where('id_ref', 'like', 'KL%')
            ->get();

    return response()->json(["Result"=>
    ["ResultCode"=> 1,
    "ResultMessage"=>"Success Ambil Data" ],
    "ListKategori"=> $kategori,
    ], 200);
    }
    public function topik($kategori)
    {

            
    $topik = DB::table('master_topik')->where('ID_Kategori',$kategori)
                                    -> get();
    
    return response()->json(["Result"=>
    ["ResultCode"=> 1,
    "ResultMessage"=>"Success Ambil Data" ],
    "ListTopik" => $topik
 
    ], 200);
    }
    public function getmateri($ID_Topik){
        // $getuser = $request->session()->get('ID_User');
         // mengambil data dari table 
         
        $showmateri = DB::table('master_upload_materi')
                        ->where('ID_Topik',$ID_Topik)
                        -> get();
        // mengirim data books ke view books
        return response()->json(["Result"=>
        ["ResultCode"=> 1,
        "ResultMessage"=>"Success Ambil Data" ],
        "ListMateri" => $showmateri
        
        ], 200);
     }
     public function pengajar($user)
     {
             // mengambil data dari table books
     $pengajar = DB::table('master_user_kat')
                     ->join('master_detail_user', 'master_user_kat.ID_User', '=', 'master_detail_user.ID_User') 
                     ->where('master_user_kat.ID_User',$user)
                     -> get();
     // mengirim data books ke view books
     return response()->json(["Result"=>
     ["ResultCode"=> 1,
     "ResultMessage"=>"Success" ],
     "User"=>$pengajar
 ], 200);
    }

    // ADMIN
    public function pertanyaan(request $request){
        $ID_Penanya = $request->input('ID_Penanya');
        $pertanyaan_isi = $request->input('pertanyaan_isi');
        $ID_Penjawab = $request->input('ID_Penjawab');
        $tipe = $request->input('tipe');
        $created_at = DB::raw('now()');
        $updated_at = DB::raw('now()');

        if ($request->hasFile('gambar_pertanyaan')) {
            // Get File Name w/ Ext
            $filenameWithExt = $request->file('gambar_pertanyaan')->getClientOriginalName();
            // Get Just File Name
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get Just Ext
            $extension = $request->file('gambar_pertanyaan')->getClientOriginalExtension();
            // File Name To Store
            $fileNameToStore = $ID_Penanya.'_'.$filename.'_'.time().'.'.$extension;
            // Upload Image
            $store_location = 'gambar_pertanyaan';
            $file = $request->file('gambar_pertanyaan');
            $file->move($store_location, $fileNameToStore);
        } else{
            $fileNameToStore = 'NoImage.jpg';
        }

        $input=array(
            'ID_Penanya'=>$ID_Penanya, 
            'ID_Penjawab'=>$ID_Penjawab, 
            'pertanyaan_isi'=>$pertanyaan_isi, 
            'created_at'=>$created_at, 
            'updated_at'=>$updated_at, 
            'gambar_pertanyaan'=>$fileNameToStore,
            'tipe'=>$tipe
        );

        DB::table('pertanyaans')->insert($input);
        return response()->json(["Result"=>
        [
            "ResultCode"=> 1,
            "ResultMessage"=>"Success Data Masuk Ke Database" ],
            "ID_Penanya" => $ID_Penanya,
            "ID_Penjawab" => $ID_Penjawab,
            "pertanyaan_isi" => $pertanyaan_isi,
            "gambar_pertanyaan" => $fileNameToStore,
            "tipe" => $tipe
        ], 201);
    }

    public function getPertanyaan($id){
         
        $pertanyaan = DB::table('pertanyaans')
                        ->where('pertanyaan_id',$id)
                        ->get();

        return response()->json(["Result"=>
        ["ResultCode"=> 1,
        "ResultMessage"=>"Success Ambil Data" ],
        "pertanyaan" => $pertanyaan
        ], 200);
     }

     public function getIndexPertanyaan($id){
         $pertanyaan = DB::table('pertanyaans')
                        ->where('ID_Penanya', $id)
                        ->get();
        
        return response()->json(["Result"=>
        ["ResultCode"=> 1,
        "ResultMessage"=>"Success Ambil Data" ],
        "pertanyaan" => $pertanyaan
        ], 200);
     }
     public function history(Request $request){
        $ID_Materi = $request->input('ID_Materi');
        $ID_Pengajar = $request->input('ID_Pengajar');
        $ID_User = $request->input('ID_User');
        $nama_materi = $request->input('nama_materi');
        $ID_Topik = $request->input('ID_Topik');
        
        $inputhistory=array('ID_Materi'=>$ID_Materi,
                      'ID_Pengajar'=>$ID_Pengajar,
                      'ID_User'=>$ID_User,
                      'ID_Pengajar'=>$ID_Pengajar,
                      'nama_materi'=>$nama_materi,
                      'ID_Topik'=>$ID_Topik);
        DB::table('history')->insert($inputhistory);
        return response()->json([
            "message" => "History Baru dari user",
            "ID_User" => $ID_User,
            "nama_materi" => $nama_materi,
            "ID_materi" => $ID_Materi,
            "nama_materi"=>$nama_materi

        ], 201);        
    } 
    public function showhistory($ID){
        $showhistory = DB::table('history')
        ->join('master_upload_materi', 'history.ID_Materi', '=', 'master_upload_materi.ID') 
        ->where('history.ID_User',$ID)
        ->get();  
        return response()->json(["Result"=>
        ["ResultCode"=> 1,
        "ResultMessage"=>"Success Ambil Data" ],
        "showhistory" => $showhistory
        ], 200);
    }

     public function edit_profile(Request $request){
        // $ID_User = $request->input('ID_User');
        // $Password = $request->input('password');
        $PIN = '0'; 
        $jawaban = ' ';
        $Tingkat_Priv = '0';
        $nama = $request->input('nama');
        $jenis_kelamin = $request->input('jenis_kelamin');
        $tanggal_lahir = $request->input('tanggal_lahir');
        $alamat = $request->input('alamat');
        $provinsi= $request->input('provinsi');
        $kabupaten = ' ';
        $kecamatan = ' ';
        $kelurahan_desa = ' ';  
        $nomor_telpon = $request->input('nomor_telpon');
        $Email = $request->input('Email');
        $foto = ' ';
        // $ID_Kategori = 'TL';
        //$hashpass=bcrypt($Password);
        // $hashpass=sha1($Password);

    //  $m_user=array('ID_User'=>$ID_User,'password'=>$hashpass,'jawaban'=>$jawaban,'PIN'=>$PIN,'Tingkat_Priv'=>$Tingkat_Priv);

        $update_profile=array( 'nama'=>$nama,'jenis_kelamin'=>$jenis_kelamin,
                    'tanggal_lahir'=>$tanggal_lahir,'alamat'=>$alamat,'provinsi'=>$provinsi,'nomor_telpon'=>$nomor_telpon,'Email'=>$Email,
                    'kabupaten'=>$kabupaten,'kecamatan'=>$kecamatan,'kelurahan_desa'=>$kelurahan_desa,'foto'=>$foto);
                    
        // $kat=array('ID_User'=>$ID_User, 'ID_kategori'=>$ID_Kategori); 

        // $count =DB::table('master_user')->where('ID_User', $ID_User)->count();
        
        // if($count > 0){
        //     return redirect('/register')->with('alert','Maaf Username ànda telah digunakan ');
        // }else{
            // if(empty ($update_profile)){
            //     return response()->json([
            //         "message" => "Update Profile gagal Harap input semua data"
            //     ], 406);
            // }else{
                  
                    // DB::table('master_user')->insert($m_user);
                    DB::table('master_detail_user')->where('ID_User', $request -> ID_User)->update($update_profile);
                    // DB::table('master_user_kat')->insert($kat);
                    return response()->json(["Result"=>
                    ["ResultCode"=> 1,
                    "ResultMessage"=>"Success Update Data Profile" ],
                    "update_profile" => $update_profile
                    ], 200);
                    // return redirect(' ')->with('status','Selamat Anda berhasil Mendaftar Tunggu Konfirmasi Dari Admin ');         
        // } 
                 
    }
}
