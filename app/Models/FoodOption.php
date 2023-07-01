<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodOption extends Model
{
    use HasFactory;

    protected $fillable = [
        'food_id',
        'option_id'
    ];

    // ซ่อน pivot
    protected $hidden = ['pivot'];
}
