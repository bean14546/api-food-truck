<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'Order_Status_Name'
    ];

    // ซ่อน pivot
    protected $hidden = ['pivot'];

    // 1 order status มีได้ในหลาย order
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
