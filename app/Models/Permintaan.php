<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permintaan extends Model
{
    use HasFactory;

    protected $table = 'permintaan';

    protected $fillable = [
        'no_permintaan',
        'nama_barang',
        'jumlah',
        'tanggal_permintaan',
        'status'
    ];
}
