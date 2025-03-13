<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';
    protected $fillable = [
        'id',
        'midtrans_order_id',
        'user_id',
        'dokter_id',
        'amount',
        'status',
    ];
}
