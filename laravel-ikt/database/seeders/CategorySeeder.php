<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                'id' => 1,
                'name' => 'Insutrument',
                'parentId' => null,
            ]
        );
        DB::table('categories')->insert(
            [
                'id' => 2,
                'name' => 'Guitar',
                'parentId' => 1,
            ]
        );
        DB::table('categories')->insert(
            [
                'id' => 3,
                'name' => 'Piano',
                'parentId' => 1,
            ]
        );
        DB::table('categories')->insert(
            [
                'id' => 4,
                'name' => 'Drum',
                'parentId' => 1,
            ]
        );
        DB::table('categories')->insert(
            [
                'id' => 5,
                'name' => 'Violin',
                'parentId' => 1,
            ]
        );
        DB::table('categories')->insert(
            [
                'id' => 6,
                'name' => 'Accessories',
                'parentId' => null,
            ]
        );
        DB::table('categories')->insert(
            [
                'id' => 7,
                'name' => 'Strings',
                'parentId' => 6,
            ]
        ); 
    }
}
