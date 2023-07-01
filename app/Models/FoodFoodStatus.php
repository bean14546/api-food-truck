<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodFoodStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'food_id',
        'food_status_id'
    ];

    // ซ่อน pivot
    protected $hidden = ['pivot'];
}
