<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function cart() {
        return $this->hasMany(Cart::class, 'userId');
    }
}
