<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodTopping extends Model
{
    use HasFactory;

    protected $fillable = [
        'food_id',
        'topping_id'
    ];

    // ซ่อน pivot
    protected $hidden = ['pivot'];
}
