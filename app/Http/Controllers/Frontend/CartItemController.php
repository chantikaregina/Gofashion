<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CartItemController extends Controller
{
    public function addToCart(Request $request)
    {
        $productId = $request->input('id_product');
        $quantity = $request->input('quantity');

        // Ambil data produk berdasarkan ID
        $product = Product::find($productId);

        // Cek apakah produk ditemukan
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found');
        }

        // Cek apakah keranjang sudah ada di session
        $cart = session()->get('cart', []);

        // Jika produk sudah ada di keranjang, tambahkan jumlahnya
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
        } else {
            // Jika produk belum ada di keranjang, tambahkan produk baru dengan informasi lengkap
            $cart[$productId] = [
                'id' => $product->id_product,
                'name' => $product->nama_product,
                'price' => $product->harga_product,
                'quantity' => $quantity,
                'foto' => $product->foto,
            ];
        }

        // Simpan keranjang ke session
        session()->put('cart', $cart);

        // Redirect ke halaman keranjang
        return redirect()->route('show.cart'); // Gantilah dengan route yang sesuai untuk halaman keranjang
    }

    public function showCart()
    {
        $cart = session()->get('cart');
        return view('frontend.cartitem', compact('cart'));
    }

    public function update(Request $request, $index)
    {
        // Ambil item keranjang dari session
        $cart = session()->get('cart');

        // Periksa apakah index ada dalam keranjang
        if (!isset($cart[$index])) {
            return redirect()->back()->with('error', 'Item not found');
        }

        // Ambil nilai action (plus atau minus)
        $action = $request->input('action');

        // Update quantity berdasarkan action
        if ($action == 'plus') {
            $cart[$index]['quantity']++;
        } elseif ($action == 'minus' && $cart[$index]['quantity'] > 1) {
            $cart[$index]['quantity']--;
        }

        // Simpan kembali ke session
        session()->put('cart', $cart);

        return redirect()->back();
    }

    public function delete($index)
    {
        // Ambil item keranjang dari session
        $cart = session()->get('cart');

        // Hapus item berdasarkan index
        unset($cart[$index]);

        // Reindex array
        $cart = array_values($cart);

        // Simpan kembali ke session
        session()->put('cart', $cart);

        return redirect()->back();
    }
}
