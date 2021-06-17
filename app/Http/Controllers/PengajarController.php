<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengajar = DB::table('master_detail_user')
                ->join('master_user', function($join){
                    $join->on('master_detail_user.ID_User', '=', 'master_user.ID_User')
                        ->where('master_user.Tingkat_Priv', '=', 1);
                })
                ->join('master_user_kat', function($join){
                    $join->on('master_detail_user.ID_User', '=', 'master_user_kat.ID_User')
                        ->where('master_user_kat.ID_Kategori', 'TL');
                })
                ->paginate(10);
                
        return view('admin.pengajar.index', ['pengajar'=> $pengajar]);
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
        $detail = DB::table('master_detail_user')
                ->where('ID_User', $id)
                ->first();
        
        $topiks = DB::table('master_topik')
                ->where('ID_User', $id)
                ->get();
        
        $materis = DB::table('master_upload_materi')
                ->where('ID_User', $id)
                ->get();
        
        $jumTopik = DB::table('master_topik')
                ->where('ID_User', $id)
                ->count();
        
        $jumMateri = DB::table('master_upload_materi')
                ->where('ID_User', $id)
                ->count();

        return view('admin.pengajar.show', ['detail'=>$detail, 'topiks'=>$topiks, 'materis'=>$materis, 'jumTopik'=>$jumTopik, 'jumMateri'=>$jumMateri]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detail = DB::table('master_detail_user')
                ->where('ID_User', $id)
                ->first();
        
        return view('admin.pengajar.edit', ['detail'=>$detail]);
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
        $this->validate($request, [
            'nama'=>'required',
            'tanggal_lahir'=>'required',
            'alamat'=>'required',
            'nomor_telpon'=>'required',
            'Email'=>'required'
        ]);

        DB::table('master_detail_user')
                ->where('ID_User', $id)
                ->update([
                    'nama' => $request->nama, 
                    'tanggal_lahir' => $request->tanggal_lahir, 
                    'alamat' => $request->alamat, 
                    'nomor_telpon' => $request->nomor_telpon, 
                    'Email' => $request->Email
                    ]);
        
        return redirect('/admin/pengajar')->with('success', 'Pengajar berhasil di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('master_user')
            ->where('ID_User', $id)
            ->delete();
     
        DB::table('master_detail_user')
            ->where('ID_User', $id)
            ->delete();
        
        DB::table('master_user_kat')
            ->where('ID_User', $id)
            ->delete();

        return redirect('/admin/pengajar')->with('success', 'Pengajar berhasil di Hapus');
    }
}
