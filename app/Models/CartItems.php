<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItems extends Model
{
    protected $table = 'cart_items';
    protected $primaryKey = 'id_cart_items';

    protected $fillable = [
        'id_cart',
        'id_product',
        'jumlah_produk',
        'harga_produk',
    ];
}
