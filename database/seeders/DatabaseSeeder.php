<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            AddressSeeder::class,
            CategorySeeder::class,
          ]);

          \App\Models\User::factory(10)->create();
       \App\Models\ItemCategory::factory(10)->create();
       \App\Models\Item::factory(10)->create();
       \App\Models\BlogCategory::factory(10)->create();
       \App\Models\Blog::factory(10)->create();
    }
}
