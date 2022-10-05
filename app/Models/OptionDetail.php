<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'Option_Detail_Name',
        'Option_Detail_Price',
        'option_id',
        'isActive'
    ];

    // 1 option detail อยู่ได้ 1 option (เช่น ความเผ็ด อยู่ได้ใน option ความเผ็ดเท่านั้น จะไปอยู่ใน option น้ำซุปไม่ได้)
    public function option()
    {
        return $this->belongsTo(Option::class);
    }
}
