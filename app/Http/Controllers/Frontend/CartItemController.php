<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

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

        // Ambil keranjang dari cookie, jika tidak ada maka gunakan array kosong
        $cart = json_decode(Cookie::get('cart', '[]'), true);

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

        // Simpan keranjang ke cookie dengan waktu kadaluwarsa panjang (misalnya 1 tahun)
        $cartCookie = Cookie::make('cart', json_encode($cart), 525600, '/', null, false, true);

        // Redirect ke halaman keranjang dengan cookie
        return redirect()->route('show.cart')->withCookie($cartCookie);
    }

    public function showCart()
    {
        $cart = json_decode(Cookie::get('cart', '[]'), true);
        return view('frontend.cartitem', compact('cart'));
    }

    public function update(Request $request, $index)
    {
        $cart = json_decode(Cookie::get('cart', '[]'), true);

        if ($request->action == 'plus') {
            $cart[$index]['quantity']++;
        } elseif ($request->action == 'minus' && $cart[$index]['quantity'] > 1) {
            $cart[$index]['quantity']--;
        }

        // Update cookie
        Cookie::queue('cart', json_encode($cart), 525600);

        return redirect()->route('show.cart');
    }

    public function delete($productId)
    {
        // Ambil keranjang dari cookie
        $cart = json_decode(Cookie::get('cart', '[]'), true);

        // Cek apakah keranjang tidak kosong dan produk ada
        if (!empty($cart) && isset($cart[$productId])) {
            unset($cart[$productId]); // Hapus produk berdasarkan ID
            Cookie::queue('cart', json_encode($cart), 525600); // Perbarui cookie dengan keranjang yang sudah diubah

            // Jika keranjang kosong, hapus cookie
            if (empty($cart)) {
                Cookie::queue(Cookie::forget('cart'));
            }
        }

        // Redirect untuk me-refresh halaman dan memastikan perubahan diterapkan
        return redirect()->route('show.cart');
    }

    public function confirmOrder(Request $request)
    {
        DB::transaction(function () use ($request) {
            // Ambil keranjang dari cookie
            $cart = json_decode(Cookie::get('cart', '[]'), true);

            if (empty($cart)) {
                throw new \Exception('Keranjang kosong.'); // Lempar error jika keranjang kosong
            }

            foreach ($cart as $item) {
                $product = Product::find($item['id']); // Temukan produk berdasarkan ID

                if ($product) {
                    if ($product->stock >= $item['quantity']) {
                        // Kurangi stok barang
                        $product->stock -= $item['quantity'];
                        $product->save();
                    } else {
                        throw new \Exception('Stok tidak mencukupi untuk ' . $product->name);
                    }
                } else {
                    throw new \Exception('Produk dengan ID ' . $item['id'] . ' tidak ditemukan.');
                }
            }

            // Hapus isi keranjang dari cookie
            Cookie::queue(Cookie::forget('cart'));
        });

        return redirect()->route('home')->with('success', 'Pesanan berhasil dikonfirmasi dan stok diperbarui.');
    }

    
}
