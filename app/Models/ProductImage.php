<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $table = 'product_image';
    protected $primaryKey = 'id_product_image';

    protected $fillable = [
        'id_product',
        'foto',
    ];
}
