<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return Product::all();
    }

    public function show($id) {
        return Product::findOrFail($id);
    }

    public function store(StoreProductRequest $request) {
        $data = $request->validated();
        return Product::create($data);
    }

    public function update(StoreProductRequest $request, $id) {
        $data = $request->validated();
        $product = Product::findOrFail($id);
        $product->update($data);
        return $product;
    }

    public function destroy($id) {
        Product::destroy($id);
    }
}
