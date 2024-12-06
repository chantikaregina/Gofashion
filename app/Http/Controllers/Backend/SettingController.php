<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function setting()
    {
        $settings = Setting::all();
        return view('backend.setting', compact('settings'));
    }

    public function edit(string $id)
    {
        $setting = Setting::find($id);
        if (!$setting) {
            return back();
        }
        return view('backend.setting_edit', compact('setting'));
    }

    public function update(Request $request, string $id)
    {

        $setting = Setting::find($id);

        $request->validate([
            'key' => 'required',
            'value' => 'required',
            'deskripsi' => 'required',
        ]);

        $setting->update([
            'key' => $request->key,
            'value' => $request->value,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('setting')->with('succes', 'Setting Berhasil di Update.');
    }
}
