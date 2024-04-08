<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class LoginController extends Controller
{

    public function loginCreate()
    {
        return view('auth.login');
    }



    public function login(Request $request)
    {    

        $credentials = $request->validate([
            'email'    => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $request->session()->regenerate();
            return Redirect::route('home');
        } else {
            return redirect()->route('login');
         }
    }
}
