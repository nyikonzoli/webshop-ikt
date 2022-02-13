<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartProductConnectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cart_product_connections')->insert([
            'id' => 1,
            'amount' => 3,
            'cartId' => 1,
            'productId' => 6
        ]);
        DB::table('cart_product_connections')->insert([
            'id' => 2,
            'amount' => 1,
            'cartId' => 2,
            'productId' => 14
        ]);
        DB::table('cart_product_connections')->insert([
            'id' => 3,
            'amount' => 2,
            'cartId' => 3,
            'productId' => 8
        ]);
        DB::table('cart_product_connections')->insert([
            'id' => 4,
            'amount' => 1,
            'cartId' => 4,
            'productId' => 9
        ]);
        DB::table('cart_product_connections')->insert([
            'id' => 5,
            'amount' => 4,
            'cartId' => 5,
            'productId' => 11
        ]);
        DB::table('cart_product_connections')->insert([
            'id' => 6,
            'amount' => 2,
            'cartId' => 6,
            'productId' => 20
        ]);
        DB::table('cart_product_connections')->insert([
            'id' => 7,
            'amount' => 1,
            'cartId' => 7,
            'productId' => 16
        ]);
        DB::table('cart_product_connections')->insert([
            'id' => 8,
            'amount' => 3,
            'cartId' => 8,
            'productId' => 2
        ]);
        DB::table('cart_product_connections')->insert([
            'id' => 9,
            'amount' => 3,
            'cartId' => 9,
            'productId' => 1
        ]);
        DB::table('cart_product_connections')->insert([
            'id' => 10,
            'amount' => 2,
            'cartId' => 10,
            'productId' => 15
        ]);
        DB::table('cart_product_connections')->insert([
            'id' => 11,
            'amount' => 1,
            'cartId' => 11,
            'productId' => 19
        ]);
        DB::table('cart_product_connections')->insert([
            'id' => 12,
            'amount' => 1,
            'cartId' => 12,
            'productId' => 5
        ]);
        DB::table('cart_product_connections')->insert([
            'id' => 13,
            'amount' => 4,
            'cartId' => 13,
            'productId' => 18
        ]);
        DB::table('cart_product_connections')->insert([
            'id' => 14,
            'amount' => 2,
            'cartId' => 14,
            'productId' => 17
        ]);
        DB::table('cart_product_connections')->insert([
            'id' => 15,
            'amount' => 1,
            'cartId' => 15,
            'productId' => 12
        ]);
        DB::table('cart_product_connections')->insert([
            'id' => 16,
            'amount' => 1,
            'cartId' => 16,
            'productId' => 10
        ]);
        DB::table('cart_product_connections')->insert([
            'id' => 17,
            'amount' => 2,
            'cartId' => 17,
            'productId' => 7
        ]);
        DB::table('cart_product_connections')->insert([
            'id' => 18,
            'amount' => 1,
            'cartId' => 18,
            'productId' => 3
        ]);
        DB::table('cart_product_connections')->insert([
            'id' => 19,
            'amount' => 1,
            'cartId' => 19,
            'productId' => 13
        ]);
        DB::table('cart_product_connections')->insert([
            'id' => 20,
            'amount' => 1,
            'cartId' => 20,
            'productId' => 4
        ]);
    }
}
