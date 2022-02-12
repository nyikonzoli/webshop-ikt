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
                'name' => 'Insutrument',
            ]
        );
        DB::table('categories')->insert(
            [
                'name' => 'Guitar',
                'parentId' => 0,
            ]
        );
        DB::table('categories')->insert(
            [
                'name' => 'Piano',
                'parentId' => 0,
            ]
        );
        DB::table('categories')->insert(
            [
                'name' => 'Drum',
                'parentId' => 0,
            ]
        );
        DB::table('categories')->insert(
            [
                'name' => 'Violin',
                'parentId' => 0,
            ]
        );
        DB::table('categories')->insert(
            [
                'name' => 'Accessories',
            ]
        );
        DB::table('categories')->insert(
            [
                'name' => 'Strings',
                'parentId' => 5,
            ]
        ); 
    }
}
