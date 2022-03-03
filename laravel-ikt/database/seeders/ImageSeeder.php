<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'id' => 1,
            'uri' => 'images/products/meteora.png',
            'productId' => 1
        ]);
        DB::table('images')->insert([
            'id' => 2,
            'uri' => 'images/products/56fendertelecaster.png',
            'productId' => 2
        ]);
        DB::table('images')->insert([
            'id' => 3,
            'uri' => 'images/products/d-45.jpg',
            'productId' => 3
        ]);
        DB::table('images')->insert([
            'id' => 4,
            'uri' => 'images/products/cortacoustic.png',
            'productId' => 4
        ]);
        DB::table('images')->insert([
            'id' => 5,
            'uri' => 'images/products/gibsonlespaulclassic.png',
            'productId' => 5
        ]);
        DB::table('images')->insert([
            'id' => 6,
            'uri' => 'images/products/ibanezblackflat.png',
            'productId' => 6
        ]);
        DB::table('images')->insert([
            'id' => 7,
            'uri' => 'images/products/ibanezblue.png',
            'productId' => 7
        ]);
        DB::table('images')->insert([
            'id' => 8,
            'uri' => 'images/products/yamahagc2.png',
            'productId' => 8
        ]);
        DB::table('images')->insert([
            'id' => 9,
            'uri' => 'images/products/schimmel.png',
            'productId' => 9
        ]);
        DB::table('images')->insert([
            'id' => 10,
            'uri' => 'images/products/schubertsubi.png',
            'productId' => 10
        ]);
        DB::table('images')->insert([
            'id' => 11,
            'uri' => 'images/products/schubertcarnegy.png',
            'productId' => 11
        ]);
        DB::table('images')->insert([
            'id' => 12,
            'uri' => 'images/products/sencorsdp.png',
            'productId' => 12
        ]);
        DB::table('images')->insert([
            'id' => 13,
            'uri' => 'images/products/evanssoundoff.png',
            'productId' => 13
        ]);
        DB::table('images')->insert([
            'id' => 14,
            'uri' => 'images/products/rolandtd.png',
            'productId' => 14
        ]);
        DB::table('images')->insert([
            'id' => 15,
            'uri' => 'images/products/tamarhythm.png',
            'productId' => 15
        ]);
        DB::table('images')->insert([
            'id' => 16,
            'uri' => 'images/products/maestropetr.png',
            'productId' => 16
        ]);
        DB::table('images')->insert([
            'id' => 17,
            'uri' => 'images/products/mingjiang.jpg',
            'productId' => 17
        ]);
        DB::table('images')->insert([
            'id' => 18,
            'uri' => 'images/products/yamahayev.png',
            'productId' => 18
        ]);
        DB::table('images')->insert([
            'id' => 19,
            'uri' => 'images/products/ernieballnickel.png',
            'productId' => 19
        ]);
        DB::table('images')->insert([
            'id' => 20,
            'uri' => 'images/products/ernieballregular.png',
            'productId' => 20
        ]);
    }
}
