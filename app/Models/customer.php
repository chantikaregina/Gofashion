<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'id_customer';

    protected $fillable = [
        'id_user',
        'foto',
        'nama_pengguna',
        'alamat_pengguna',
        'telp',
    ];
}
