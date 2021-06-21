<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class WilayahController extends Controller
{
    public function wilayah_show()
    {
    	$kecamatan = DB::select('SELECT * FROM kecamatan');
    	$kabupaten = DB::select('SELECT * FROM kabupaten');
    	$provinsi = DB::select('SELECT * FROM provinsi');
    	// var_dump($kecamatan);
    	return view('admin.data_petani.wilayah_show', compact('kecamatan','kabupaten','provinsi'));
    }
    public function tambah_kecamatan()
    {
    	$kabupaten = DB::select('SELECT * FROM kabupaten');
    	$provinsi = DB::select('SELECT * FROM provinsi');
    	return view('admin.data_petani.tambah_kecamatan', compact('kabupaten','provinsi'));
    }
}
