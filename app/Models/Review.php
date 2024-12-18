<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected  $table = 'review';
    protected  $primaryKey = 'id_review';

    protected $fillable = [
        'id_product',
        'id_customer',
        'rating_produk',
        'komentar',
    ];


    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product', 'id_product');
    }
}
