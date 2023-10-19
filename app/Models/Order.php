<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'fullname', 'email', 'phone_number', 'address', 'note', 'order_date', 'status', 'total_money', 'num', 'title'
    ];
    public $timestamps = false;
    // Định nghĩa quan hệ với bảng "order_details" (mối quan hệ một-nhiều)
    public function orderDetails()
    {
        return $this->hasMany(order_details::class);
    }
}
