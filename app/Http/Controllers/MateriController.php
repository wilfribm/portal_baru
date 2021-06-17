<?php

namespace App\Http\Controllers;

use DB;
use Session;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
class MateriController extends Controller
{
    public function matmenu(Request $request)
    {

        $getuser = $request->session()->get('ID_User');
            // mengambil data dari table books
    $materi = DB::table('master_topik')
                    ->where('ID_User',$getuser)     
                    -> get();
    // mengirim data books ke view books
    return view('pengajar/upload_materi', ['materi' => $materi]);
    }
    
    
    
    
    public function materiupload(Request $request){

        $nama = $request->session()->get('ID_User');
        $nama_materi = $request->input('nama_materi');
        // menyimpan data file yang diupload ke variabel $file* 
        $file = $request->file('dokumen');
        $tujuan_upload = 'materipengajar';
        $file->move($tujuan_upload,$request->input('nama_materi'). '-' .$nama. '-' . date("Y-m-d") .'.pdf');
        
        $hasil = array(

            'ID_Topik'=> $request->input('Topik'),
            'nama_materi' => $nama_materi,
            'deskripsi' => $request->input('deskripsi'),
            'link_video' => $request->input('link_video'),
            'create_at' => $ldate = date('Y-m-d H:i:s'),
            'ID_User'=>$nama,
            'edit_at' => $ldate = date('Y-m-d H:i:s'),
            'dokumen' => $request->input('nama_materi'). '-' .$nama. '-' . date("Y-m-d") .'.pdf'
        );
            DB::table('master_upload_materi')->insert($hasil);
        return redirect('pengajar/indexmateri')-> with('status', 'Data  Berhasil DiTambah');

    }
    public function materiindex(Request $request)
    {
 

        $getuser = $request->session()->get('ID_User');
            // mengambil data dari table books
            
    $showmateri = DB::table('master_upload_materi')
                    ->join('master_topik', 'master_topik.ID_Topik', '=', 'master_upload_materi.ID_Topik')
                    ->where('master_upload_materi.ID_User',$getuser)     
                    -> get();
    // mengirim data books ke view books
    return view('pengajar/indexmateri', ['showmateri' => $showmateri]);


    }
    public function edit($ID){
        // mengambil data books berdasarkan id yang dipilih
        $materi = DB::table('master_upload_materi')
        ->join('master_topik', 'master_topik.ID_Topik', '=', 'master_upload_materi.ID_Topik')
        ->where('ID',$ID)
        ->first();
        // dd($materi);
        // passing data books yang didapat ke view edit.blade.php
        return view('pengajar/editmateri', compact('materi'));
        }
        
        public function update(Request $request) 
{
    $nama = $request->session()->get('ID_User');
    $nama_materi = $request->input('nama_materi');
    // menyimpan data file yang diupload ke variabel $file* 
    $file = $request->file('dokumen');
    $tujuan_upload = 'materipengajar';
    
    if(empty ($file)){
        return redirect('pengajar/indexmateri')->with('alert','Update Materi Gagal Harap Masukan Update File PDF');
    }else{
        
    $file->move($tujuan_upload,$request->input('nama_materi'). '-' .$nama. '-' . date("Y-m-d") .'.pdf');
    // update data
    $update = array(

        'ID_Topik'=> $request->input('id_topik'),
        'nama_materi' => $nama_materi,
        'deskripsi' => $request->input('deskripsi'),
        'link_video' => $request->input('link_video'),
        'edit_at' => $ldate = date('Y-m-d H:i:s'),
        'dokumen' => $request->input('nama_materi'). '-' .$nama. '-' . date("Y-m-d") .'.pdf'
    );
    // dd($update);
    DB::table('master_upload_materi')-> where('ID', $request -> ID) -> update(
      $update
    );
    // alihkan halaman edit ke halaman books
    return redirect('pengajar/indexmateri') -> with('status', 'Data Berhasil DiUbah');
}    
}
public function destroy($ID) 
{
    // menghapus data books berdasarkan id yang dipilih
    DB::table('master_upload_materi') -> where('ID', $ID) -> delete();
    // Alihkan ke halaman books
    return redirect('pengajar/indexmateri') -> with('status', 'Data Berhasil DiHapus');
}
// public function index(){
//     if(!Session::get('login')){
//         return redirect('login')->with('alert','Kamu harus login dulu');
//     }
//     else{
//         return view('pengajar/indexmateri');
//     }
// }
}

