<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class MappingController extends Controller
{
    public function index(Request $request)
    {
        $getuser = $request->session()->get('ID_User');
// AND tl.ID_User not in('') 
// AND l.ID_Lahan not in('') 


        $data_lahan = DB::table('master_petani')
        ->select('master_peta_lahan.ID_Lahan', 'master_petani.Nama_Petani','master_peta_lahan.Koordinat_Y','master_peta_lahan.Koordinat_X','master_peta_lahan.Desa', 'trans_lahan.ID_User', 'master_kel_tani.Nama_Kelompok_Tani')
        ->join('trans_lahan', 'trans_lahan.ID_User', '=', 'master_petani.ID_User') 
        ->join('master_peta_lahan', 'trans_lahan.ID_Lahan', '=', 'master_peta_lahan.ID_Lahan')
        ->join('master_kel_tani', 'master_kel_tani.ID_Kelompok_Tani', '=', 'master_peta_lahan.ID_Kelompok_Tani')
        ->where('trans_lahan.status_aktif',1)
        ->where('trans_lahan.status_lahan','milik')
        ->orderBy('master_peta_lahan.ID_Lahan')  
        -> get();

        return view('admin/mapping/lihat_peta', compact ('data_lahan'));
    }

    public function edit(Request $request,$indexing){
        $getuser = $request->session()->get('ID_User');
        $fotoprofil = DB::table('master_detail_user')
                                ->join('master_user_kat', 'master_user_kat.ID_User', '=', 'master_detail_user.ID_User')
                                ->where('master_detail_user.ID_User',$getuser)
                                ->first();
        // mengambil data books berdasarkan id yang dipilih
        $topik = DB::table('master_topik')->where('ID_User',$getuser)
                                            
                                            ->where('ID_Kategori',$indexing)
                                            ->get();
        // passing data books yang didapat ke view edit.blade.php
        return view('pengajar/topik', compact('topik','fotoprofil'));
    }

    public function showMateri(Request $request,$topik){
        $getuser = $request->session()->get('ID_User');
        $fotoprofil = DB::table('master_detail_user')
                                ->join('master_user_kat', 'master_user_kat.ID_User', '=', 'master_detail_user.ID_User')
                                ->where('master_detail_user.ID_User',$getuser)
                                ->first();
        // mengambil data books berdasarkan id yang dipilih
        $materi = DB::table('master_upload_materi')->where('master_upload_materi.ID_User',$getuser)
                                            ->join('master_topik', 'master_topik.ID_Topik', '=', 'master_upload_materi.ID_Topik')
                                            ->where('master_upload_materi.ID_Topik',$topik)
                                            ->get();
        // passing data books yang didapat ke view edit.blade.php
        return view('pengajar/materi', compact('materi','fotoprofil'));
    }
}
