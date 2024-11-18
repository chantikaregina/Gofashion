<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartItemController extends Controller
{
    public function cartitem()
    {
        return view('frontend.admin.cartitem');
    }
}
