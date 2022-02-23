<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Http\Requests\CartStoreRequest;

class CartController extends Controller
{
    public function index() {
        return Cart::all();
    }

    public function show($id) {
        return Cart::findOrFail($id)->get();
    }

    public function store(CartStoreRequest $request) {
        $data = $request->validated();
        return Cart::create($data);
    }

    public function update(CartStoreRequest $request, $id) {
        $data = $request->validated();
        $product = Cart::findOrFail($id);
        $product->update($data);
        return $product;
    }

    public function destroy($id) {
        Cart::destroy($id);
    }
}
