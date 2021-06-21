<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class WilayahController extends Controller
{
    public function wilayah_show()
    {
    	return view('admin.data_petani.wilayah_show');
    }
}
