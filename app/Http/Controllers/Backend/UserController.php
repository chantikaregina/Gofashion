<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function dashboard()
    {
        $jumlah_produk = Product::count();
        $jumlah_pengguna = User::count();
        return view('backend.dashboard', compact('jumlah_produk', 'jumlah_pengguna'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    public function profile() {
        $profile = Auth::user();
        return view('backend.profile', compact('profile'));
    }

    public function update(Request $request)
    {
        $profile = Auth::user()->id_users;
        $user = User::find($profile);

        $request->validate([
            'username' => 'required',
            'password' => 'nullable|min:6',
            'name' => 'required',

        ]);

        $user->update([
            'username' => $request->username,
            'password' => $request->filled('password') ? Hash::make($request->password) : $user->password,
            'name' => $request->name,
        ]);

        return redirect()->route('dashboard')->with('success', 'Data Anda Berhasil di Update');


    }
}
