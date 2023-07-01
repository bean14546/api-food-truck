<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderListOption extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_list_id',
        'option_id',
        'option_detail_id',
    ];

    // ซ่อน pivot
    protected $hidden = ['pivot'];
}
