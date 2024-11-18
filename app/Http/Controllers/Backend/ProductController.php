<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()
    {
        $products = Product::all();
        return view('backend.product', compact('products'));
    }

    public function create()
    {
        $categorys = Category::all();
        return view('backend.product_tambah', compact('categorys'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_category' => 'required',
            'nama_product' => 'required',
            'deskripsi' => 'required',
            'harga_product' => 'required',
            'stock_product' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $foto = null;

        if ($request->hasFile('foto')) {
            $uniqueFile = uniqid() . '_' . $request->file('foto')->getClientOriginalName();

            $request->file('foto')->storeAs('foto_product', $uniqueFile, 'public');

            $foto = 'foto_product/' . $uniqueFile;
        }

        Product::create([
            'id_category' => $request->id_category,
            'nama_product' => $request->nama_product,
            'deskripsi' => $request->deskripsi,
            'harga_product' => $request->harga_product,
            'stock_product' => $request->stock_product,
            'foto' => $foto,
        ]);

        return redirect()->route('product')->with('success', 'Product Berhasil di Tambah.');
    }

    public function edit(string $id)
    {
        $category = Category::find($id);
        if (!$category) {
            return back();
        }
        return view('backend.product_edit', compact('product'));
    }

    public function update(Request $request, string $id)
    {

        $product = Product::find($id);

        $request->validate([
            'id_category' => 'required',
            'nama_product' => 'required',
            'deskripsi' => 'required',
            'harga_product' => 'required',
            'stock_product' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $foto = null;

        if ($request->hasFile('foto')) {
            $uniqueFile = uniqid() . '_' . $request->file('foto')->getClientOriginalName();

            $request->file('foto')->storeAs('foto_product', $uniqueFile, 'public');

            $foto = 'foto_product/' . $uniqueFile;
        }

        $product->update([
            'id_category' => $request->id_category,
            'nama_product' => $request->nama_product,
            'deskripsi' => $request->deskripsi,
            'harga_product' => $request->harga_product,
            'stock_product' => $request->stock_product,
            'foto' => $foto,
        ]);

        return redirect()->route('product')->with('succes', 'Product Berhasil di Update.');
    }

    public function delete(Request $request, $id)
    {
        $product = Product::find($id);

        $product->delete();

        return redirect()->route('product')->with('success', 'Product Berhasil di Hapus.');
    }


}
