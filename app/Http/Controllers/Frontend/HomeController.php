<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
<<<<<<< HEAD
        
        return view('frontend.home');
=======
        $categorys = Category::all();
        $products = Product::all();
        return view('frontend.home', compact('categorys', 'products'));
>>>>>>> 8b0b706b7cbb7765c41b0c20e71cd862b0f5d702
    }
}
