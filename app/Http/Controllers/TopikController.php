<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class TopikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function katmenu()
    {

            
    $kategori = DB::table('master_kategori')
                    -> where('ID_Kategori', 'like', 'KL%')
                    -> get();
    
    return view('pengajar/upload_topik', ['kategori' => $kategori]);
    }
    public function topikinput(Request $request)
    {
        $nama = $request->session()->get('ID_User');
        $topik = $request->input('topik');
        // menyimpan data file yang diupload ke variabel $file* 
        $file = $request->file('foto');
        $tujuan_upload = 'fototopik';
        $file_name=$file->getClientOriginalName(); 
        $file->move($tujuan_upload,$file_name);
        
        $upload_topik = array(

            'ID_Kategori'=> $request->input('ID_Kategori'),
            'topik' => $topik,
            'ID_User'=>$nama,
            'input_img' =>$file_name
        );
            DB::table('master_topik')->insert($upload_topik);
        return redirect('pengajar/indextopik')-> with('alert-success', 'Topik Baru Berhasil DiTambah');

        // $value = $request->session()->get('ID_User');
        
        // $ID_Kategori = $request->input('ID_Kategori');
        // $topik = $request->input('topik');
         
        // $data_inp=array('ID_Kategori'=>$ID_Kategori,'topik'=>$topik,'ID_User'=>$value);
        // DB::table('master_topik')->insert($data_inp);
        // return redirect('pengajar/indextopik');
        
    }
    public function katindex(Request $request)
    {
        $getuser = $request->session()->get('ID_User');
            // mengambil data dari table books
    $showtopik = DB::table('master_topik')
                    ->join('master_kategori', 'master_kategori.ID_Kategori', '=', 'master_topik.ID_Kategori')
                    ->where('ID_User',$getuser)     
                    -> get();
    // mengirim data books ke view books
    return view('pengajar/indextopik', ['showtopik' => $showtopik]);
    }

    public function destroy($ID_Topik) 
{
    // menghapus data books berdasarkan id yang dipilih
    DB::table('master_topik') -> where('ID_Topik', $ID_Topik) -> delete();
    // Alihkan ke halaman books
    return redirect('pengajar/indextopik') -> with('status', 'Data Buku Berhasil DiHapus');
}
public function edit($ID_Topik){
    // mengambil data books berdasarkan id yang dipilih
    $topik = DB::table('master_topik')->where('ID_Topik',$ID_Topik)->first();
    // passing data books yang didapat ke view edit.blade.php
    // dd($topik);
    return view('pengajar/edittopik', compact('topik'));
    }

    public function update(Request $request) 
    {
        // $nama = $request->session()->get('ID_User');
        // $topik = $request->input('Topik');
        // // menyimpan data file yang diupload ke variabel $file* 
        // $file = $request->file('foto');
        // $tujuan_upload = 'fototopik';
        // $file_name=$file->getClientOriginalName(); 
        // $file->move($tujuan_upload,$file_name);
        
        // $data_input = array(

        //     'ID_Kategori'=> $request->input('ID_Kategori'),
        //     'topik' => $topik,
        //     'ID_User'=>$nama,
        //     'input_img' =>$file_name
        // );
        //     DB::table('master_topik')-> where('ID_Topik', $request -> ID_Topik)->update($data_input);
        // return redirect('pengajar/indextopik')-> with('status', 'Data Berhasil DiUbah');
        $nama = $request->session()->get('ID_User');
  
        // menyimpan data file yang diupload ke variabel $file* 
        $file = $request->file('foto');
        $tujuan_upload = 'fototopik';
        if(empty ($file)){
            return redirect('pengajar/indextopik')->with('alert','Update Materi Gagal Harap Masukan Update Foto Topik');
        }else{  
        $file_name=$file->getClientOriginalName(); 
        $file->move($tujuan_upload,$file_name);
        
        $upload_topik = array(
            // 'ID_Topik' => $request->input('ID_Topik'),
            'ID_Kategori'=> $request->input('ID_Kategori'),
            'topik' => $request->input('Topik'),
            'ID_User'=>$nama,
            'input_img' =>$file_name
        );
            DB::table('master_topik')->  where('ID_Topik', $request -> ID_Topik)->update($upload_topik);
        return redirect('pengajar/indextopik')-> with('status', 'Data  Berhasil DiTambah');
    }
        // $value = $request->session()->get('ID_User');
        

        // $data_input=array('ID_Kategori'=>$request->input('ID_Kategori'),
        //                     'Topik'=>$request->input('Topik'));

        // DB::table('master_topik')-> where('ID_Topik', $request -> ID_Topik) -> update(
        //     $data_input
        //   );
        //   // alihkan halaman edit ke halaman books
        //   return redirect('pengajar/indextopik') -> with('status', 'Data Buku Berhasil DiUbah');
}
}