<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'Category_Name'
    ];

    // 1 category มีได้หลาย food
    public function food()
    {
        return $this->belongsToMany(Food::class);
    } 
}
