<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\UserChart;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class landingpageController extends Controller
{
    public function index(){
        $berita = DB::select("SELECT * FROM master_berita_informasi ORDER BY id DESC LIMIT 3");
        $slides = DB::select("SELECT * FROM master_slideshow ORDER BY id DESC LIMIT 3");
        $slidesArray = json_decode(json_encode($slides),true);

        $materi = DB::table('master_upload_materi')
        ->join('master_detail_user', function($join){
            $join->on('master_detail_user.ID_User', '=', 'master_upload_materi.ID_User');
            })
        ->join('master_user', function($join){
            $join->on('master_user.ID_User', '=', 'master_upload_materi.ID_User');
            })
        ->count();
        
        $lahan = DB::table('master_peta_lahan')->count();
        $petani = DB::table('master_petani')->count();
        

        return view('landing_page.index', compact('berita','materi','lahan','petani'),['slidesArray'=>$slidesArray]);
    }

    public function listBerita(){
        $listBerita = DB::table('master_berita_informasi')
        ->orderBy('id','DESC')
        ->paginate(10);
        //$listBerita = DB::table('master_berita_informasi')->paginate(15);
        return view('landing_page.listBerita', compact('listBerita'));
    }

    public function detailBerita($id){
        $detailBerita = DB::table('master_berita_informasi')
                ->where('id', $id)
                ->first();
        return view('landing_page.detailBerita', compact('detailBerita'));
    }

    // public function listMateri(){
    //     $listMateri = DB::table('master_upload_materi')
    //     ->join('master_detail_user', function($join){
    //         $join->on('master_detail_user.ID_User', '=', 'master_upload_materi.ID_User');
    //         })
    //     ->join('master_user', function($join){
    //         $join->on('master_user.ID_User', '=', 'master_upload_materi.ID_User');
    //         })
    //     ->paginate(10);
    //     return view('landing_page.listMateri', compact('listMateri'));
    // }

    public function listMateri(Request $request){
        $pagination = 10;
    	$cari = $request->cari;
        $listMateri = DB::table('master_upload_materi')
        ->join('master_detail_user', function($join){
            $join->on('master_detail_user.ID_User', '=', 'master_upload_materi.ID_User');
            })
        ->join('master_user', function($join){
            $join->on('master_user.ID_User', '=', 'master_upload_materi.ID_User');
            })
        ->where('nama_materi','like','%'.$cari.'%')
        ->orwhere('nama','like','%'.$cari.'%')
        ->orwhere('create_at','like','%'.$cari.'%')
        // ->orwhere('ID_User','nilla')
        ->paginate($pagination);

        return view('landing_page.listMateri', compact('listMateri'))->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    public function detailMateri($id){
        $detailMateri= DB::table('master_upload_materi')
            ->join('master_detail_user', function($join){
            $join->on('master_detail_user.ID_User', '=', 'master_upload_materi.ID_User');
            })
            ->join('master_user', function($join){
            $join->on('master_user.ID_User', '=', 'master_upload_materi.ID_User');
            })
            ->where('ID',$id)
            ->get();
        return view('landing_page.detailMateri', compact('detailMateri'));
    }

    public function profil(){
        
    }
}
