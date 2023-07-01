<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderListTopping extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_list_id',
        'topping_id'
    ];

    // ซ่อน pivot
    protected $hidden = ['pivot'];
}
