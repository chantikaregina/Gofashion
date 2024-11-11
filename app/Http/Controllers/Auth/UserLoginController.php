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
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt($credentials)) {
            $user = Auth::user();

<<<<<<< HEAD
=======
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
           $user = Auth::user();
>>>>>>> 9b2b085d526386745b29f1d531d8b1655da073aa
            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            }elseif ($user->role === 'user') {
                return redirect()->route('user.dashboard');
            }
        }
<<<<<<< HEAD
        return redirect()->back()->with('gagal', 'Username atau Password salah');
=======

        return back()->withErrors(['login_error' => 'username atau password salah.'])->onlyInput('username');
>>>>>>> 9b2b085d526386745b29f1d531d8b1655da073aa
    }
}
