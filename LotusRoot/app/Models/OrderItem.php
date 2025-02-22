<?php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id', 
        'quantity', 
        'price'
    ];

    // 定義多對一關聯，與 Order 表關聯
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');  // 'order_id' 是外鍵
    }
}