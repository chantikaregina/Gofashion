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

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category', 'id_category');
    }


    public function reviews()
    {
        return $this->hasMany(Review::class, 'id_product', 'id_product');
    }
}
