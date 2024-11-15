<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'id_category';

    protected $fillable = [
        'nama_category',
        'deskripsi',
    ];

    public function product() {
        return $this->hasMany(Product::class, 'id_category', 'id_category');
    }
}
