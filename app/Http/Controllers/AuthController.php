<?php

namespace app\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    function tampilRegistrasi(){
        return view('registrasi');
    }

    function submitRegistrasi(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        //dd($user);
        return redirect()->route('login.tampil');
    }

    function tampilLogin(){
        return view('login');
    }

    function submitLogin(Request $request){
        $user = User::where('email', $request->email)->first();

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->route('user');
        } else {
            return redirect()->back()->with('gagal', 'Email atau Password anda salah');
        }
    }
    function profil(){
        return view('profil');
    }
}
