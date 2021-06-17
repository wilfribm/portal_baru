<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApprovalController extends Controller
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
                        ->where('master_user.Tingkat_Priv', '=', 0);
                })
                ->join('master_user_kat', function($join){
                    $join->on('master_detail_user.ID_User', '=', 'master_user_kat.ID_User')
                        ->where('master_user_kat.ID_Kategori', 'TL');
                })
                ->paginate(10);
                
        return view('admin.approval.index', ['pengajar'=> $pengajar]);
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

        return view('admin.approval.show', ['detail'=>$detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        DB::table('master_user')
              ->where('ID_User', $id)
              ->update(['Tingkat_Priv' => $request->priv]);
        return redirect('/admin/approval')->with('success', 'Pengajuan berhasil di terima');
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

        return redirect('/admin/approval')->with('success', 'Pengajuan berhasil di tolak');
    }
}
