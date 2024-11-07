<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected  $table = 'payment';
    protected  $primaryKey = 'id_payment';

    protected $fillable = [
        'id_order',
        'tanggal_pembayaran',
        'jumlah',
        'metode_pembayaran',
        'status_pembayaran',
    ];

}
