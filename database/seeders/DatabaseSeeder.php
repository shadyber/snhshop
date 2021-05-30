<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Item;
use App\Models\ItemCategory;
use App\Models\User;
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

          User::factory(10)->create();
       ItemCategory::factory(10)->create();
       Item::factory(50)->create();
       BlogCategory::factory(10)->create();
       Blog::factory(10)->create();
    }
}
