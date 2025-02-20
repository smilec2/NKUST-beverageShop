<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';

    protected $fillable = [
        "product_name",
        "description",
        "price",
        "image_url",
        "category_id",
        "has_sugar",
    ];

    public function carts(){
        return $this->hasMany(Cart::class);
    }
}