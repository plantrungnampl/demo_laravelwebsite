<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category'; // Tên của bảng trong cơ sở dữ liệu

    protected $primaryKey = 'id';
    protected $fillable = ['name']; // Các trường có thể điền dữ liệu vào
    public $timestamps = false;

    // Các phương thức và quan hệ khác nếu cần
}
