<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    protected $fillable = [
        'ingredient',
        'cost',
        'stock_id',
        'ingredient_group_id',
        'ingredient_unit_id'
    ];

    // ซ่อน pivot
    protected $hidden = ['pivot'];
}
