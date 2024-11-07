<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cupon extends Model
{
    protected  $table = 'cupon';
    protected  $primaryKey = 'id_cupon';

    protected $fillable = [
        'kode_diskon',
        'tipe_diskon',
        'nilai_diskon',
        'tanggal_mulai',
        'tanggal_akhir',
        'minimum_pembelian',
        'maksimum_pemakaian',
        'jumlah_pengguna',
        'status',   
    ];
}
