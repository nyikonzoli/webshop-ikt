<?php

namespace App\Http\Controllers\ViewControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class SiteController extends Controller
{
    public function product($id){
        $product = Product::findOrFail($id)->get();
        return view('product')->with('product', $product);
    }
}
