<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';

    protected $fillable = [
        'kode_barang',
        'jumlah',
        'tanggal_transaksi',
        'kode_supplier',
        'NIP'
    ];
}
