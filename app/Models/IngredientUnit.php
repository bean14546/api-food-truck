<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngredientUnit extends Model
{
    use HasFactory;

    protected $fillable = [
        'unit',
    ];

    // ซ่อน pivot
    protected $hidden = ['pivot'];
}
