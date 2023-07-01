<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngredientFood extends Model
{
    use HasFactory;

    protected $fillable = [
        'ingredient_id',
        'food_id',
        'amount_used',
    ];

    // ซ่อน pivot
    protected $hidden = ['pivot'];
}
