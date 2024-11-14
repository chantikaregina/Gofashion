<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id_product';

    protected $fillable = [
        'id_category',
        'nama_product',
        'deskripsi',
        'harga_product',
        'stock_product',
        'foto',
    ];
}
