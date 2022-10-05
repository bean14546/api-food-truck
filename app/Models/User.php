<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'User_First_Name',
        'User_Last_Name',
        'User_Point',
        'User_Avatar',
        'email',
        'password'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // 1 user มีได้หลายเบอร์โทรศัพท์
    public function phoneNumbers()
    {
        return $this->hasMany(PhoneNumber::class);
    }

    // 1 user เก็บได้หลาย coupon
    public function coupons()
    {
        return $this->belongsToMany(Coupon::class, 'my_coupons');
    }

    // 1 user สั่งได้หลาย order
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
