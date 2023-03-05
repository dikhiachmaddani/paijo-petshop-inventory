<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login.index');
    }

    public function authenticate(AuthRequest $request)
    {
        $credential = $request->validated();

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard')->with(
                'success',
                'Login berhasil, Selamat datang ' . Auth::user()->name . '!'
            );
        }
        return back()->with('LoginErrors', 'Login gagal! tolong cek kembali NIM atau Password Anda');
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login')->with('LogoutSuccess', 'Logout berhasil, sampai jumpa lagi!');;
    }
}