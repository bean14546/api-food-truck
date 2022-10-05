<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'Amount',
        'Price',
        'Note',
        'order_id',
        'food_id',
        'option_id',
        'topping_id',
    ];
}
