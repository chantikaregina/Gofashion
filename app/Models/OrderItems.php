<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    protected $table = 'order_items';
    protected $primaryKey = 'id_order_items';

    protected $fillable = [
        'id_order',
        'id_product',
        'jumlah',
        'harga',
    ];
}
