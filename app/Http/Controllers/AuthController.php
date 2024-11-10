<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function login() {
        return view('auth.login');
    }

    public function proses(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'level' => 'required'
        ]);

        $credentials = $request->only(['username', 'password', 'level']);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }
        else {
            return back()->withErrors([
                'username' => 'Username tidak ditemukan.',
                'password' => 'Password tidak cocok.',
                'level' => 'Level tidak cocok.'
            ])->onlyInput('username');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('auth.login');
    }

}
