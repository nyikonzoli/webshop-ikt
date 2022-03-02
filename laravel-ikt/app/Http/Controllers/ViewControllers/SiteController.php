<?php

namespace App\Http\Controllers\ViewControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class SiteController extends Controller
{
    public function index() {
        return view('index');
    }

    public function product($id){
        return view('product')->with('id', $id);
    }
}
