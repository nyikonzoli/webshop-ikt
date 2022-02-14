<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{   
    protected $table = "carts";
    public $timestamps = false;

    public function user(){
        return $this->belongsTo(User::class, 'userId');
    }

    public function products(){
        return $this->belongsToMany(Product::class, 'cart_product_connections', 'cartId', 'productId');
    }
}
