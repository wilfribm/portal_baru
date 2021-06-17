<?php

namespace App\Http\Middleware;

use Closure;
use DB;
use Session;


class CekStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->session()->has('login') && str_contains($request->session()->get('ID_User'))){
            //check profil sudah lengkap belum
            $findUser = DB::table('master_user as u')->where('ID_User', Session::get('ID_User'))->get()->first;
            if(empty($findUser->Password)){
                return redirect('/dutatani/public/pengajar/dashboard');
            }
        }else{
            return redirect('/dutatani/public');
        }
    
        return $next($request);
    }
}
