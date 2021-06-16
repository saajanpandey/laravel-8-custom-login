<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login(){
        return view('Auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials= $request->only('email','password');
        if (Auth::attempt($credentials)) //check for email and password matches or not
        {
            return redirect()->intended('home');//named route used
        }

        return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');
    }
    public function logout() {
        Auth::logout();

        return redirect('login');
      }
}
