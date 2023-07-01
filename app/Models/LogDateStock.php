<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogDateStock extends Model
{
    use HasFactory;

    protected $fillable = [
        'ingredient_id',
        'stock_date_id',
        'quantity',
    ];

    // ซ่อน pivot
    protected $hidden = ['pivot'];
}
