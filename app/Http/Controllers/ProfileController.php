<?php

namespace App\Http\Controllers;

use DB;
use Session;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function Profile(Request $request){
        $getuser = $request->session()->get('ID_User');
        $showprofile = DB::table('master_detail_user')
                                ->join('master_user_kat', 'master_user_kat.ID_User', '=', 'master_detail_user.ID_User')
                                ->where('master_detail_user.ID_User',$getuser)
                                ->first();
        return view('pengajar/profile', compact('showprofile'));
    }
}