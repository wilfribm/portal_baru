<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PetaniController extends Controller
{
    public function daftar_petani()
    {
    	return view('admin.data_petani.daftar_petani');
    } 

    public function daftar_petani_semua(Request $request)
    {
    	
    	$pagination = 10;
    	$daftar = DB::TABLE('master_petani')->paginate($pagination);
    	// var_dump($daftar);
    	return view('admin.data_petani.daftar_petani_semua', compact('daftar'))->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    public function detail_petani($id)
    {
    	$detail_petani = DB::table('master_petani')->where('ID_User',$id)->first();
    	return view('admin.data_petani.detail_petani', compact('detail_petani'));
    } 

    public function ubah_petani($id)
    {
    	$ubah_petani = DB::table('master_petani')->where('ID_User',$id)->first();
    	// var_dump($ubah_petani);
    	return view('admin.data_petani.ubah_petani', compact('ubah_petani'));
    }

    public function ubah_petani_aksi(Request $request, $id)
    {
    	$update = DB::table('master_petani')
              ->where('ID_User', $id)
              ->update(['Nama_Petani' => $request->Nama_Petani,
                        'Alamat_Petani' => $request->Alamat_Petani,
                        'Email' => $request->Email,
                        'Nomor_Telpon' => $request->Nomor_Telpon,
                        'Pendidikan_Terakhir' => $request->Pendidikan_Terakhir,
                        'Jumlah_Tanggungan' => $request->Jumlah_Tanggungan,
                        'Agama' => $request->Agama,
                        'Tanggal_Lahir' => $request->Tanggal_Lahir,
                        'Deskripsi_Keahlian' => $request->Deskripsi_Keahlian,
                        'Status' => $request->Status,
                        ]);
    	// var_dump($ubah_petani);
        return redirect('admin/daftar/petani/semua')->with('success', 'Ubah Data Berhasil');
    }

    public function hapus($id)
    {
    	DB::table('master_user')
            ->where('ID_User', $id)
            ->delete();

        DB::table('master_petani')
            ->where('ID_User', $id)
            ->delete();
     
        DB::table('master_detail_user')
            ->where('ID_User', $id)
            ->delete();
        
        DB::table('master_user_kat')
            ->where('ID_User', $id)
            ->delete();

            return redirect('admin/daftar/petani/semua')->with('success', 'Petani berhasil di Hapus');
    }

     
}
