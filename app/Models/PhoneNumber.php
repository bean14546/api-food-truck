<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneNumber extends Model
{
    use HasFactory;

    protected $fillable = [
        'Phone_Number',
        'user_id'
    ];

    // 1 phone number เป็นของ 1 user
    public function user()
    {
        return $this->belongsTo(User::class);
    } 
}
