<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product'; 
    protected $fillable = [
        'category_id',
        'title',
        'price',
        'discount',
        'thumnail',
        'description'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    use HasFactory;
}