<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'Coupon_Name',
        'Coupon_Discount',
        'Coupon_Description',
        'Coupon_Quantity',
        'Coupon_Maximum_Use',
        'Coupon_Start_Date',
        'Coupon_End_Date'
    ];

    // 1 coupon มีได้หลาย user
    public function users()
    {
        return $this->belongsToMany(User::class, 'my_coupons');
    }

    // 1 coupon ใช้ได้กับ 1 order
    public function orders()
    {
        return $this->hasOne(Order::class);
    }
}
