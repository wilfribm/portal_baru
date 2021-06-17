<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class DasboardController extends Controller
{
    public function index(Request $request)
    {
        $getuser = $request->session()->get('ID_User');
            // mengambil data dari table books
    $indexing = DB::table('master_topik')
                    ->join('master_kategori', 'master_kategori.ID_Kategori', '=', 'master_topik.ID_Kategori') 
                    ->where('master_topik.ID_User',$getuser)
                    ->groupBy('master_topik.ID_Kategori')  
                    -> get();
    // mengirim data books ke view books
    return view('pengajar/dashboard', ['indexing' => $indexing]);
    }
    public function edit(Request $request,$indexing){
        $getuser = $request->session()->get('ID_User');
        // mengambil data books berdasarkan id yang dipilih
        $topik = DB::table('master_topik')->where('ID_User',$getuser)
                                            
                                            ->where('ID_Kategori',$indexing)
                                            ->get();
        // passing data books yang didapat ke view edit.blade.php
        return view('pengajar/topik', compact('topik'));
}

    public function showMateri(Request $request,$topik){
        $getuser = $request->session()->get('ID_User');
        // mengambil data books berdasarkan id yang dipilih
        $materi = DB::table('master_upload_materi')->where('master_upload_materi.ID_User',$getuser)
                                            ->join('master_topik', 'master_topik.ID_Topik', '=', 'master_upload_materi.ID_Topik')
                                            ->where('master_upload_materi.ID_Topik',$topik)
                                            ->get();
        // passing data books yang didapat ke view edit.blade.php
        return view('pengajar/materi', compact('materi'));
    }
    public function DetailMateri(Request $request,$ID)
        {
            $getuser = $request->session()->get('ID_User');
            // mengambil data books berdasarkan id yang dipilih
        // mengambil data books berdasarkan id yang dipilih
        $materi = DB::table('master_upload_materi')
                         ->join('master_topik', 'master_topik.ID_Topik', '=', 'master_upload_materi.ID_Topik')
                        ->where('master_upload_materi.ID_User',$getuser)
                        ->where('master_upload_materi.ID',$ID)
                        ->first();
        // passing data books yang didapat ke view edit.blade.php
        return view('pengajar/DetailMateri', compact('materi'));
        }
        public function MateriPublic($ID){
            $materipublic = DB::table('master_upload_materi')->where('ID',$ID)->first();
            // passing data books yang didapat ke view edit.blade.php
            return view('/materi_public', compact('materipublic'));
        }

        public function lihatpeserta(Request $request){
            $getuser = $request->session()->get('ID_User');
            $getdatapeserta = DB::table('history')
                                ->select('ID_User',DB::raw('count(*) as total'),'nama_materi')
                                ->where('ID_Pengajar',$getuser)
                                ->groupBy('ID_Materi')
                                ->get();     
                                // dd($getdatapeserta);             
                    return view('pengajar/peserta', ['getdatapeserta' => $getdatapeserta]);
        }   

        
}
