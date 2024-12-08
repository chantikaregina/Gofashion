<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function edit(string $id_product)
    {
        $categorys = Category::all();
        $product = Product::find($id_product);
        if (!$product) {
            return back();
        }
        return view('backend.product_edit', compact('categorys','product'));
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

        $foto = $product->foto;

        if ($request->hasFile('foto')) {
            if ($foto)  {
                Storage::disk('public')->delete($foto);
            }

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

    public function review()
    {
        $reviews = Review::all();
        return view('backend.review', compact('reviews'));
    }

    public function deleteReview(Request $request, $id)
    {
        $review = Review::find($id);

        $review->delete();

        return redirect()->route('product.review')->with('success', 'Review Berhasil di Hapus.');
    }
}
