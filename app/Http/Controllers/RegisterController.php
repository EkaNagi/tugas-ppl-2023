<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index',[
            'title' => 'Register',
            'active' => 'register',

            'create' => 'Mendaftar Akun',
            'name' => 'Nama',
            'user' => 'Username',
            'email' => 'Email',
            'pass' => 'Password',

            'login' => 'Sudah punya akun?',
            'login2' => 'Login Disini',
            'logo' => 'sf.png',

            'css' => 'register.css',
            'js' => 'register.js',

            'text'=> 'Sistem Data Pelatih',
            'text2'=> 'ManyChance'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

//        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

//        $request->session()->flash('success', 'Registration Sucessfull! Please Login');

        return redirect('/login')->with('success', 'Registration Successful! Please Login');
    }
}
