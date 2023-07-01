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
        'Food_Image',
        'category_id',
        'is_recommend',
        'is_new',
        'is_active'
    ];

    // ซ่อน pivot
    protected $hidden = ['pivot'];

    // 1 food อยู่ได้ 1 category
    public function category()
    {
        return $this->belongsTo(Category::class);
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
