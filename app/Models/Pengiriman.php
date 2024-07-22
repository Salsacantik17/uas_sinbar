<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    use HasFactory;

    protected $table = 'pengiriman';

    protected $fillable = [
        'no_pengiriman',
        'no_permintaan',
        'nama_barang',
        'jumlah',
        'tanggal_kirim',
        'status'
    ];
}
