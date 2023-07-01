<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    protected $fillable = [
        'Option_Name',
        'Option_Details'
    ];

    // ซ่อน pivot
    protected $hidden = ['pivot'];
    
    // 1 option มีได้หลาย option detail
    public function optionDetails()
    {
        return $this->hasMany(OptionDetail::class);
    }

    // 1 option มีหลาย food
    public function food()
    {
        return $this->belongsToMany(Food::class, 'food_options');
    }

    // 1 option มีหลาย order
    public function orders()
    {
        return $this->belongsToMany(Order::class, 'my_coupons');
    }
}
