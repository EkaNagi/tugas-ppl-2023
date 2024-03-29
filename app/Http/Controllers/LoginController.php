<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login',

            'login' => 'Silahkan Login',
            'user' => 'Username',
            'pass' => 'Password',

            'logo' => 'sf.png',
            'register' => 'Belum Punya Akun?',
            'register2' => 'Daftar Disini',

            'css' => 'login.css',
            'js' => 'login.js',

            'text'=> 'Sistem Data Pelatih',
            'text2'=> 'ManyChance'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('loginError', 'Login Failed!');

    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
