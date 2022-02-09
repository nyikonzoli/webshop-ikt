<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartProductConnection extends Model
{
    protected $table = 'cart_product_connections';

    public function cart(){
        return $this->belongsTo(Cart::class, 'cartId');
    }

    public function product(){
        return $this->belongsTo(Product::class, 'productId');
    }
}
