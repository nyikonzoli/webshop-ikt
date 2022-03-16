<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';
    public $timestamps = false;

    public function cart() {
        return $this->hasMany(Cart::class, 'userId');
    }
    
    public function setPasswordAttribute($password){
        $this->attributes['password'] = Hash::make($password);
    }

    protected $fillable = [
        "name",
        "email",
        "password",
        "address",
        "birthdate"
    ];
}
