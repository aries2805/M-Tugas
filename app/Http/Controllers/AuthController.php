<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use League\Uri\Exceptions\SyntaxError;

class AuthController extends Controller
{

    public function login(){
        return view("auth/login");
    }


    public function loginProses(request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:8'
        ],[
            'email' => "Email wajib diisi!",
            'password' => "Password wajib diisi!",
            'password.min' => "Password minimal 8 karakter!"
        ]);

        $data = array(
            'email' => $request->email,
            'password' => $request->password,
        );
        if(Auth::attempt($data)){
            return redirect()->route('dashboard')->with('success','Anda berhasil login!');
        }else{
            return redirect()->back()->with('error','Email atau Password salah!');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('success','Anda berhasil logout!');
    }
}
