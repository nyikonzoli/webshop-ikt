<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    public $timestamps = false;

    public function product(){
        return $this->hasOne(Product::class, 'categoryId');
    }

    public function parent_category(){
        return $this->belongsTo(Category::class, 'parendId');
    }
}
