<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public $timestamps = false;

    public function category() {
        return $this->belongsTo(Category::class, 'categoryId');
    }

    public function carts() {
        return $this->belongsToMany(Cart::class, 'cart_product_connections', 'productId', 'cartId');
    }
}
