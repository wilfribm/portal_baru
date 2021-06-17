<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;
use Illuminate\Support\Facades\DB;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = DB::table('pertanyaans')
                    ->whereNull('jawaban_isi')
                    ->paginate(10);
        return view('admin.pertanyaan.index')->with('list', $list);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pertanyaan = Pertanyaan::find($id);

        return view('admin.pertanyaan.show')->with('pertanyaan', $pertanyaan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pertanyaan = Pertanyaan::find($id);

        $pengajars = DB::table('master_detail_user')
                ->join('master_user', function($join){
                    $join->on('master_detail_user.ID_User', '=', 'master_user.ID_User')
                        ->where('master_user.Tingkat_Priv', '=', 1);
                })
                ->join('master_user_kat', function($join){
                    $join->on('master_detail_user.ID_User', '=', 'master_user_kat.ID_User')
                        ->where('master_user_kat.ID_Kategori', 'TL');
                })
                ->get();
            

        $pengajarOptions = array('Admin' => 'Admin') + $pengajars->pluck('nama', 'ID_User')->toArray();
        
        return view('admin.pertanyaan.edit')->with('pertanyaan', $pertanyaan)->with('pengajarOptions', $pengajarOptions);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $pertanyaan = Pertanyaan::find($id);
        $pertanyaan->ID_Penjawab = $request->input('ID_Penjawab');
        $pertanyaan->jawaban_isi = $request->input('jawaban_isi');
        $pertanyaan->save();

        return redirect('/admin/pertanyaan')->with('success', 'Pertanyaan telah di Arahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pertanyaan = Pertanyaan::find($id);

        if (!empty($pertanyaan->gambar_pertanyaan)) {
            $image_path = 'gambar_pertanyaan'.'/'.$pertanyaan->gambar_pertanyaan;
            
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }
        

        $pertanyaan->delete();
        
        return redirect('/admin/pertanyaan')->with('success', 'Pertanyaan telah dihapus');
    }
    public function pengajarlihatpertanyaan(Request $request)
    {

        $getuser = $request->session()->get('ID_User');
            // mengambil data dari table books
    $pertanyaan = DB::table('pertanyaans')
                    ->where('ID_Penjawab',$getuser)     
                    -> get();
    // mengirim data books ke view books
    return view('pengajar/indexpertanyaan', ['pertanyaan' => $pertanyaan]);
    }

    public function jawabpertanyaan(Request $request,$ID)
    {

        $getuser = $request->session()->get('ID_User');
            // mengambil data dari table books
    $jawab = DB::table('pertanyaans')
                    ->where('pertanyaan_id',$ID)     
                    ->first();
    // mengirim data books ke view books
    return view('pengajar/menjawab', compact('jawab'));
    }
    
    public function simpan(Request $request){
      $getpertanyaan = $request->input('ID');
  $simpanjawaban=array(

      'jawaban_isi'=>$request->input('jawaban_isi')
    );
    // dd($getpertanyaan);
    DB::table('pertanyaans')
        ->where('pertanyaan_id',$getpertanyaan)
        -> update(
        $simpanjawaban
      );
      return redirect('pengajar/indexpertanyaan') -> with('status', 'Data Berhasil DiUbah');

    }
}
