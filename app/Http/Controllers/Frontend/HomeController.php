<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        $search = $request->input('search');  // Ambil input pencarian produk

        // Mengambil kategori yang ada
        $categories = Category::all();

        // Ambil semua produk dengan relasi kategori
        $products = Product::with('category')
            ->when($search, function ($query, $search) {
                return $query->where('nama_product', 'like', "%{$search}%")
                            ->orWhereHas('category', function ($query) use ($search) {
                                $query->where('nama_category', 'like', "%{$search}%");
                            });
            })
            ->get();

        // Mengelompokkan produk berdasarkan kategori
        $productsByCategory = $products->groupBy('id_category');

       // Ambil hanya 1 produk per kategori
        $oneProductPerCategory = $productsByCategory->map(function ($productsInCategory) {
            return $productsInCategory->take(1); // Ambil 1 produk per kategori
        });

        // Tentukan kategori yang relevan dengan pencarian
        $selectedCategory = null;
        if ($search) {
            $selectedCategory = $categories->filter(function ($category) use ($search) {
                return str_contains(strtolower($category->nama_category), strtolower($search));
            })->first();
        }

        // Tentukan kategori yang dipilih, jika ada
        $selectedCategoryId = $request->input('category', $selectedCategory ? $selectedCategory->id_category : null);

        // Ambil 3 kategori unik dari produk (pastikan kategori berbeda)
        $kategori = Product::select('id_category')->distinct()->limit(3)->get();

        // Ambil 1 produk dari setiap kategori yang berbeda
        $produkKategori = collect();

        foreach ($kategori as $item) {
            $produk = Product::where('id_category', $item->id_category)->first();
            $produkKategori->push($produk);
        }

        // Di Controller Anda
        $BestsellerProduct = Product::orderBy('jumlah_terjual', 'desc')->take(6)->get();



        return view('frontend.home', compact('products', 'productsByCategory', 'categories', 'selectedCategory', 'selectedCategoryId', 'oneProductPerCategory', 'produkKategori', 'BestsellerProduct'));
    }

    public function detail($id_product)
    {
        $product = Product::find($id_product);
        return view('frontend.detail', compact('product'));
    }
}
