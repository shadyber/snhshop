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
        //
        DB::table('item_categories')->insert([
            'title' => 'Male',
            'detail' => 'Products made for Males',

        ]);
   //
        \DB::table('item_categories')->insert([
            'title' => 'FeMale',
            'detail' => 'Products made for FeMales',

        ]);

          \DB::table('item_categories')->insert([
            'title' => 'Universal',
            'detail' => 'Products made for All',

        ]);



    }
}
