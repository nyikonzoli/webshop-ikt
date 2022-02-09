<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{   
    protected $table = "carts";

    public function user(){
        return $this->belongsTo(User::class, 'userId');
    }

    public function cart_product_connection(){
        return $this->hasMany(CartProductConnection::class, 'cartId');
    }
}
