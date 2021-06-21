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
}
