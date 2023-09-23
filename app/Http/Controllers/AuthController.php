<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if(Auth::check()){
            return redirect()->route('dashboard');
        }else{
            return view('auth.login');
        } 
    }

    public function store(Request $request)
    {
        $validator =  Validator::make($request->all(),[
            'email' => 'required', 
            'password' => 'required'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
           return redirect()->route('dashboard');
        }else{
            return redirect()->route('login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('dashboard');
    }
}
