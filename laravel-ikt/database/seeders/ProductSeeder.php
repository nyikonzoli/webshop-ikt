<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'id' => 1,
            'name' => 'Fender Meteora',
            'description' => Str::random(50),
            'price' => 600000,
            'amount' => 8,
            'unit' => 'db',
            'categoryId' => 2
        ]);
        DB::table('products')->insert([
            'id' => 2,
            'name' => "'56 Fender Telecaster",
            'description' => Str::random(50),
            'price' => 1200000,
            'amount' => 3,
            'unit' => 'db',
            'categoryId' => 2
        ]);
        DB::table('products')->insert([
            'id' => 3,
            'name' => 'Martin D-45',
            'description' => Str::random(50),
            'price' => 2700000,
            'amount' => 1,
            'unit' => 'db',
            'categoryId' => 2
        ]);
        DB::table('products')->insert([
            'id' => 4,
            'name' => 'Cort acoustic',
            'description' => Str::random(50),
            'price' => 40000,
            'amount' => 14,
            'unit' => 'db',
            'categoryId' => 2
        ]);
        DB::table('products')->insert([
            'id' => 5,
            'name' => 'Gibson Les Paul Classic',
            'description' => Str::random(50),
            'price' => 750000,
            'amount' => 2,
            'unit' => 'db',
            'categoryId' => 2
        ]);
        DB::table('products')->insert([
            'id' => 6,
            'name' => 'Ibanez GRG121DX-BKF Black Flat',
            'description' => Str::random(50),
            'price' => 80000,
            'amount' => 11,
            'unit' => 'db',
            'categoryId' => 2
        ]);
        DB::table('products')->insert([
            'id' => 7,
            'name' => 'IBANEZ GRGR221PA-AQB',
            'description' => Str::random(50),
            'price' => 100000,
            'amount' => 4,
            'unit' => 'db',
            'categoryId' => 2
        ]);
        DB::table('products')->insert([
            'id' => 8,
            'name' => 'YAMAHA-GC2-PE',
            'description' => Str::random(50),
            'price' => 7600000,
            'amount' => 2,
            'unit' => 'db',
            'categoryId' => 3
        ]);
        DB::table('products')->insert([
            'id' => 9,
            'name' => 'Schimmel W-180 Tradition',
            'description' => Str::random(50),
            'price' => 9500000,
            'amount' => 1,
            'unit' => 'db',
            'categoryId' => 3
        ]);
        DB::table('products')->insert([
            'id' => 10,
            'name' => 'SCHUBERT Subi88 MK II',
            'description' => Str::random(50),
            'price' => 186000,
            'amount' => 4,
            'unit' => 'db',
            'categoryId' => 3
        ]);
        DB::table('products')->insert([
            'id' => 11,
            'name' => 'SCHUBERT Carnegy-61',
            'description' => Str::random(50),
            'price' => 78000,
            'amount' => 8,
            'unit' => 'db',
            'categoryId' => 3
        ]);
        DB::table('products')->insert([
            'id' => 12,
            'name' => 'SENCOR SDP 200 BK',
            'description' => Str::random(50),
            'price' => 188000,
            'amount' => 5,
            'unit' => 'db',
            'categoryId' => 3
        ]);
        DB::table('products')->insert([
            'id' => 13,
            'name' => 'Evans SoundOff Standard BoxSet Gumilapok SOSETSTD',
            'description' => Str::random(50),
            'price' => 54000,
            'amount' => 5,
            'unit' => 'db',
            'categoryId' => 4
        ]);
        DB::table('products')->insert([
            'id' => 14,
            'name' => 'Roland TD-50KV2',
            'description' => Str::random(50),
            'price' => 2800000,
            'amount' => 2,
            'unit' => 'db',
            'categoryId' => 4
        ]);
        DB::table('products')->insert([
            'id' => 15,
            'name' => 'TAMA Rhythm Mate Rock Set Black',
            'description' => Str::random(50),
            'price' => 250000,
            'amount' => 3,
            'unit' => 'db',
            'categoryId' => 4
        ]);
        DB::table('products')->insert([
            'id' => 16,
            'name' => 'MAESTRO INSTRUMENT Petr Rácz Stradivari Violin 4/4 Anno 2021',
            'description' => Str::random(50),
            'price' => 1800000,
            'amount' => 2,
            'unit' => 'db',
            'categoryId' => 5
        ]);
        DB::table('products')->insert([
            'id' => 17,
            'name' => 'Ming Jiang Zhu 903 Violin',
            'description' => Str::random(50),
            'price' => 500000,
            'amount' => 5,
            'unit' => 'db',
            'categoryId' => 5
        ]);
        DB::table('products')->insert([
            'id' => 18,
            'name' => 'Yamaha 4-string Electric Violin YEV-104',
            'description' => Str::random(50),
            'price' => 200000,
            'amount' => 9,
            'unit' => 'db',
            'categoryId' => 5
        ]);
        DB::table('products')->insert([
            'id' => 19,
            'name' => 'ERNIE BALL Nickel Wound Regular Slinky',
            'description' => Str::random(50),
            'price' => 2000,
            'amount' => 38,
            'unit' => 'db',
            'categoryId' => 7
        ]);
        DB::table('products')->insert([
            'id' => 20,
            'name' => 'Ernie Ball 2221 Regular Slinky',
            'description' => Str::random(50),
            'price' => 2700,
            'amount' => 5,
            'unit' => 'db',
            'categoryId' => 7
        ]);
    }
}
