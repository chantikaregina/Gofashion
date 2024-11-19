<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(request $request)
    {

        $search =  $request->input('search');

        $products = Product::query()
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', "%{$search}%")
                             ->orWhereHas('category', function ($query) use ($search) {
                                 $query->where('name', 'like', "%{$search}%");
                             });
            })
            ->get();

        $categorys = Category::all();
        $products = Product::all();
        return view('frontend.home', compact('categorys', 'products'));
    }
}
