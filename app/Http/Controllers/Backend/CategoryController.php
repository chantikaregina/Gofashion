<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {
        $categorys = Category::all();
        return view('backend.category', compact('categorys'));
    }

    public function create()
    {
        return view('backend.category_tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_category' => 'required',
            'deskripsi' => 'required',
        ]);

        Category::create([
            'nama_category' => $request->nama_category,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('category')->with('success', 'Category Berhasil di Tambah.');
    }

    public function edit(string $id)
    {
        $category = Category::find($id);
        if (!$category) {
            return back();
        }
        return view('backend.category_edit', compact('category'));
    }

    public function update(Request $request, string $id)
    {

        $category = Category::find($id);

        $request->validate([
            'nama_category' => 'required',
            'deskripsi' => 'required',
        ]);

        $category->update([
            'nama_category' => $request->nama_category,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('category')->with('succes', 'Category Berhasil di Update.');
    }

    public function delete(Request $request, $id)
    {
        $category = Category::find($id);

        $category->delete();

        return redirect()->route('category')->with('success', 'Category Berhasil di Hapus.');
    }
}
