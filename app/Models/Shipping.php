<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    protected  $table = 'shipping';
    protected  $primaryKey = 'id_shipping';

    protected $fillable = [
        'id_order',
        'tanggal_pengiriman',
        'status_pengiriman',
        'nomor_pelacakan',
    ];
}
