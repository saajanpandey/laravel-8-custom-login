<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
    return view('auth.register');
    }
    public function store(StoreUserRequest $request)
    {


            $user = new User();
            $user->firstname = $request->input('firstname');
            $user->lastname =$request->input('lastname');
            $user->address = $request->input('address');
            $user->email = $request->input('email');
            $user->contact = $request->input('contact');

            $user->password= Hash::make($request->password);

            $user->save();

            return redirect('home')->with('success', 'Your account is created');
    }
}
