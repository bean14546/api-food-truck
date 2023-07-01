<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngredientGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'ingredientGroup',
    ];

    // ซ่อน pivot
    protected $hidden = ['pivot'];
}
