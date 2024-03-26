<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id_keranjang',
        'id_pengguna',
        'id_barang',
        'qty',
    ];
}
