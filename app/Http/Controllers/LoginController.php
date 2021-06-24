<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //
    public function login()
    {
        return view('login');
    }

    public function checkUser()
    {
//        dd(session()->all());
        Session::put('user_id',1);
        return redirect()->route('home');
    }
}
