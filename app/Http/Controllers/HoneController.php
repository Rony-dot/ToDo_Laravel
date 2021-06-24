<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HoneController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('user.auth');
    }

    public function gotoHomePage(){
        return view('home');
    }
}
