<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderListStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'Order_List_Status_Name'
    ];

    // ซ่อน pivot
    protected $hidden = ['pivot'];
}
