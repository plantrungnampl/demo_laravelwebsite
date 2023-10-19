<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_details extends Model
{
    protected $fillable = [
        'order_id', 'product_id', 'price', 'num', 'total_money', 'title'
    ];
    public $timestamps = false;
    // Định nghĩa quan hệ với bảng "order" (mối quan hệ nhiều-một)
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
