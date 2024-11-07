<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $primaryKey = 'id_order';

    protected $fillable = [
        'id_customer',
        'tanggal_pesanan',
        'status_pesanan',
        'total_pembayaran',
    ];
}
