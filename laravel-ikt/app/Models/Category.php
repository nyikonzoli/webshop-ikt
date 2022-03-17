<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    public $timestamps = false;
    protected $fillable = [
        "name",
        "parentId"
    ];

    public function product(){
        return $this->hasOne(Product::class, 'categoryId');
    }

    public function sub_categories(){
        return $this->hasMany(Category::class, 'parentId');
    }
}
