<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topping extends Model
{
    use HasFactory;

    protected $fillable = [
        'Topping_Name',
        'Topping_Price',
        'isActive'
    ];

    // 1 topping มีได้หลาย order
    public function orders()
    {
        return $this->belongsToMany(Order::class, 'my_coupons');
    }
}
