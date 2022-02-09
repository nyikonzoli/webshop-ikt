<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category() {
        return $this->belongsTo(Category::class, 'categoryId');
    }

    public function cart_product_connection() {
        return $this->HasMany(CartProductConnection::class, 'productId');
    }
}
