<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'Food_Status_Name'
    ];

    // 1 food status อยู่ได้หลาย food
    public function food()
    {
        return $this->belongsToMany(Food::class);
    }
}
