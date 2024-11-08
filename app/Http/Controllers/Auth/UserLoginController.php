<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function auth(Request $request)
    {

        $data = $request->only('username', 'password');
        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect('/dashboard');
        } else {
            return redirect()->back()->with('gagal', 'Username atau Password salah');
        }
    }
}
