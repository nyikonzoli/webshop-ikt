<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carts')->insert([
            'id' => 1,
            'purchaseDate' => new DateTime('2022-01-01'),
            'userId' => 1
        ]);
        DB::table('carts')->insert([
            'id' => 2,
            'purchaseDate' => new DateTime('2022-01-03'),
            'userId' => 1
        ]);
        DB::table('carts')->insert([
            'id' => 3,
            'purchaseDate' => new DateTime('2022-01-04'),
            'userId' => 1
        ]);
        DB::table('carts')->insert([
            'id' => 4,
            'purchaseDate' => new DateTime('2022-01-01'),
            'userId' => 2
        ]);
        DB::table('carts')->insert([
            'id' => 5,
            'purchaseDate' => new DateTime('2022-01-07'),
            'userId' => 2
        ]);
        DB::table('carts')->insert([
            'id' => 6,
            'purchaseDate' => new DateTime('2022-02-02'),
            'userId' => 2
        ]);
        DB::table('carts')->insert([
            'id' => 7,
            'purchaseDate' => new DateTime('2021-09-30'),
            'userId' => 3
        ]);
        DB::table('carts')->insert([
            'id' => 8,
            'purchaseDate' => new DateTime('2021-10-22'),
            'userId' => 3
        ]);
        DB::table('carts')->insert([
            'id' => 9,
            'purchaseDate' => new DateTime('2021-10-28'),
            'userId' => 3
        ]);
        DB::table('carts')->insert([
            'id' => 10,
            'purchaseDate' => new DateTime('2021-11-11'),
            'userId' => 3
        ]);
        DB::table('carts')->insert([
            'id' => 11,
            'purchaseDate' => new DateTime('2021-12-23'),
            'userId' => 3
        ]);
        DB::table('carts')->insert([
            'id' => 12,
            'purchaseDate' => new DateTime('2020-05-11'),
            'userId' => 4
        ]);
        DB::table('carts')->insert([
            'id' => 13,
            'purchaseDate' => new DateTime('2020-05-11'),
            'userId' => 4
        ]);
        DB::table('carts')->insert([
            'id' => 14,
            'purchaseDate' => new DateTime('2020-06-27'),
            'userId' => 4
        ]);
        DB::table('carts')->insert([
            'id' => 15,
            'purchaseDate' => new DateTime('2021-08-18'),
            'userId' => 4
        ]);
        DB::table('carts')->insert([
            'id' => 16,
            'purchaseDate' => new DateTime('2021-11-20'),
            'userId' => 4
        ]);
        DB::table('carts')->insert([
            'id' => 17,
            'purchaseDate' => new DateTime('2019-05-01'),
            'userId' => 5
        ]);
        DB::table('carts')->insert([
            'id' => 18,
            'purchaseDate' => new DateTime('2021-02-07'),
            'userId' => 5
        ]);
        DB::table('carts')->insert([
            'id' => 19,
            'purchaseDate' => new DateTime('2021-06-13'),
            'userId' => 5
        ]);
        DB::table('carts')->insert([
            'id' => 20,
            'purchaseDate' => new DateTime('2022-01-19'),
            'userId' => 5
        ]);
    }
}
