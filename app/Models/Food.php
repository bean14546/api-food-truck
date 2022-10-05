<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $fillable = [
        'Food_Name',
        'Food_Price',
        'Food_Description',
        'Food_Image'
    ];

    // 1 food อยู่ได้หลาย category
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    // 1 food มีหลาย food status
    public function foodStatus()
    {
        return $this->belongsToMany(FoodStatus::class, 'food_food_statuses');
    }

    // 1 food มีหลาย option
    public function options()
    {
        return $this->belongsToMany(Option::class, 'food_options');
    }
    
    // 1 food มีหลาย order
    public function orders()
    {
        return $this->belongsToMany(Order::class, 'my_coupons');
    }
}
