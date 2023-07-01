<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyCoupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'isActive',
        'coupon_id',
        'user_id'
    ];

    // ซ่อน pivot
    protected $hidden = ['pivot'];
}
