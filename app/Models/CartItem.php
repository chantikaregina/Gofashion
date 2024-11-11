<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $table = 'cart_item';
    protected $primaryKey = 'id_cart_item';

    protected $fillable = [
        'id_product',
        'jumlah_produk',
        'harga_produk',
    ];
}
