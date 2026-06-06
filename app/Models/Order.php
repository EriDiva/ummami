<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'kode_order',
        'nama_pelanggan',
        'nomor_meja',
        'total',
        'status',
        'payment_method',
        'bukti_transfer'
    ];

    public function items()
    {
        return $this->hasMany(
            OrderItem::class
        );
    }
}