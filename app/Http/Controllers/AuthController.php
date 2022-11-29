<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('pages.login');
    }

    public function logout(){
        auth()->logout();

        return redirect()->route('login');
    }

    public function authentificate(Request $request){
        // $request->validate([
        //     'email' => ['email','required'],
        //     'password' => ['required']
        // ]);

        // if (Auth()->attempt($request->only('email','password'))){
        //     return redirect()->route('home.index');
        // }
        // return redirect()->back()->withErrors('les identifiants ne sont pas reconnus');

        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $email = $request->email;
        $password = $request->password;

        if (auth()->attempt($request->only('email','password'))) {
            $request->session()->regenerate();

            return redirect()->route('home.index');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
