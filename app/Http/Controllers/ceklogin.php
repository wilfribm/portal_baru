<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ceklogin extends Controller
{
    public function materi(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('pengajar/indexmateri');
        }
    }
    public function topik(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('pengajar/indextopik');
        }
    }
}
