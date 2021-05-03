<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Psy\Util\Str;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('addresses')->insert([
            'tel' => '00000000',
            'tel2' =>' 0911......',
            'email' => 'admin@sandhshop.com',
            'email2' =>'info@sandhshop.com',
            'address1' => 'Addis ababab , ',
            'address2' => 'Ethiopia',
        ]);
    }
}
