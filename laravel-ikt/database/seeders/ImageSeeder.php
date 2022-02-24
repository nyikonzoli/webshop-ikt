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
            'uri' => 'images/product/meteora.png',
            'productId' => 1
        ]);
        DB::table('images')->insert([
            'id' => 2,
            'uri' => 'images/product/56fendertelecaster.png',
            'productId' => 2
        ]);
        DB::table('images')->insert([
            'id' => 3,
            'uri' => 'images/product/d-45.jpg',
            'productId' => 3
        ]);
        DB::table('images')->insert([
            'id' => 4,
            'uri' => 'images/product/cortacoustic.png',
            'productId' => 4
        ]);
        DB::table('images')->insert([
            'id' => 5,
            'uri' => 'images/product/gibsonlespaulclassic.png',
            'productId' => 5
        ]);
        DB::table('images')->insert([
            'id' => 6,
            'uri' => 'images/product/ibanezblackflat.png',
            'productId' => 6
        ]);
        DB::table('images')->insert([
            'id' => 7,
            'uri' => 'images/product/ibanezblue.png',
            'productId' => 7
        ]);
        DB::table('images')->insert([
            'id' => 8,
            'uri' => 'images/product/yamahagc2.png',
            'productId' => 8
        ]);
        DB::table('images')->insert([
            'id' => 9,
            'uri' => 'images/product/schimmel.png',
            'productId' => 9
        ]);
        DB::table('images')->insert([
            'id' => 10,
            'uri' => 'images/product/schubertsubi.png',
            'productId' => 10
        ]);
        DB::table('images')->insert([
            'id' => 11,
            'uri' => 'images/product/schubertcarnegy.png',
            'productId' => 11
        ]);
        DB::table('images')->insert([
            'id' => 12,
            'uri' => 'images/product/sencorsdp.png',
            'productId' => 12
        ]);
        DB::table('images')->insert([
            'id' => 13,
            'uri' => 'images/product/evanssoundoff.png',
            'productId' => 13
        ]);
        DB::table('images')->insert([
            'id' => 14,
            'uri' => 'images/product/rolandtd.png',
            'productId' => 14
        ]);
        DB::table('images')->insert([
            'id' => 15,
            'uri' => 'images/product/tamarhythm.png',
            'productId' => 15
        ]);
        DB::table('images')->insert([
            'id' => 16,
            'uri' => 'images/product/maestropetr.png',
            'productId' => 16
        ]);
        DB::table('images')->insert([
            'id' => 17,
            'uri' => 'images/product/mingjiang.jpg',
            'productId' => 17
        ]);
        DB::table('images')->insert([
            'id' => 18,
            'uri' => 'images/product/yamahayev.png',
            'productId' => 18
        ]);
        DB::table('images')->insert([
            'id' => 19,
            'uri' => 'images/product/ernieballnickel.png',
            'productId' => 19
        ]);
        DB::table('images')->insert([
            'id' => 20,
            'uri' => 'images/product/ernieballregular.png',
            'productId' => 20
        ]);
    }
}
