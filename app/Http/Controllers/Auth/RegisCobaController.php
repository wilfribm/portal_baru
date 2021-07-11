<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisCobaController extends Controller
{
    public function create() {
        return view('auth.registration-form');
    }

    // ----------- [ Form validate ] -----------
    public function store(Request $request) {

       $vali =  $this->validate($request, [
            'name'              =>      'required|string|max:20|min:3',
                'email'             =>      'required|email|unique:users,email',
                'phone'             =>      'required|numeric|min:10',
                'password'          =>      'required|alpha_num|min:6',
                'confirm_password'  =>      'required|same:password',
                'address'           =>      'required|string'

        ]);

       $name = $vali['name'];
       $email = $vali['email'];
       $phone = $vali['phone'];
       $address = $vali['address'];
       $password = $vali['password'];
       

        

        $user           =       User::create($dataArray);
        if(!is_null($user)) {
            return back()->with("success", "Success! Registration completed");
        }

        else {
            return back()->with("failed", "Alert! Failed to register");
        }
    }
}
