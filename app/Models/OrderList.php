<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderList extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'order_id',
        'food_id',
        'order_list_status_id',
        'Amount',
        'Price',
        'Note',
        'user_id',
        'isTakeaway',
        'Chef_Note',
        'time_countdown_id'
    ];

    // ซ่อน pivot
    protected $hidden = ['pivot'];

    public function food()
    {
        return $this->hasOne(Food::class, 'id', 'food_id');
    }

    // 1 order list มีได้เพียง 1 order list status เท่านั้น
    public function orderListStatus()
    {
        return $this->belongsTo(OrderListStatus::class);
    }

    // 1 order list มีได้เพียง 1 user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // 1 order list มีได้เพียง 1 TimeCountdown
    public function time()
    {
        return $this->belongsTo(TimeCountdown::class, 'time_countdown_id');
    }
}
