<?php

namespace App\Http\Controllers;

use App\Models\Credintial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //
    public function login()
    {
        return view('login');
    }

    public function checkUser(Request  $request)
    {

        $credintial = Credintial::where('user_name',$request->username)->first();
        $user = User::find($credintial->user_id);
//        dd($user);
        if($user==null)
        {
            return redirect()->back()->with('msg', 'User null');
        }

        if($user->status!='A'){
            return redirect()->back()->with('msg', 'Inactive User');
        }

        if(!Hash::check($request->password, $credintial->password))
        {
            return redirect()->back()->with('msg', 'wrong password');
        }

        Session::put('user_id',$user->id);
        return redirect()->route('home.index');

    }
}
