<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CartItemController extends Controller
{
    public function cartitem()
    {
        return view('frontend.cartitem');
    }

    public function product()
    {
        $products = Product::all();
        return view('frontend.product', compact('products'));
    }
}
