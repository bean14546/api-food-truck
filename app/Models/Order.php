<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'Order_Price',
        'order_status_id',
        'user_id',
        // 'Chef_Note',
        // 'coupon_id',
    ];

    // ซ่อน pivot
    protected $hidden = ['pivot'];

    // 1 order ผู้ใช้สามารถเลือกอาหารได้หลายชนิด
    public function food()
    {
        return $this->belongsToMany(Food::class, 'order_details');
    }

    // อาหาร 1 ชนิดผู้ใช้สามารถเลือกได้หลาย option ชนิด
    public function options()
    {
        return $this->belongsToMany(Option::class, 'order_details');
    }

    // 1 order ผู้ใช้สามารถเลือก topping ได้หลายอย่าง
    public function toppings()
    {
        return $this->belongsToMany(Topping::class, 'order_details');
    }
    
    // 1 order สามารถใช้คูปองได้เพียง 1 คูปองเท่านั้น
    public function coupon()
    {
        return $this->belongsTo(Coupon::class);
    }

    // 1 order สามารถถูกสั่งได้จาก user คนใดคนหนึ่ง (order ใคร order มัน)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 1 order มีได้เพียง 1 order status เท่านั้น
    public function orderStatus()
    {
        return $this->belongsTo(OrderStatus::class);
    }

    public function orderList()
    {
        return $this->hasMany(OrderList::class, 'order_id');
    }
}
