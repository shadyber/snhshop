<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
       'name'=>$this->faker->word,
       'slug'=>$this->faker->word,
       'detail'=>$this->faker->sentence,
       'photo'=>$this->faker->imageUrl('720','640',),
       'thumb'=>$this->faker->imageUrl('640','480',),
       'color'=>$this->faker->colorName,
       'measurement'=>$this->faker->word,
       'weight'=>$this->faker->word,
       'price'=>180,
       'item_category_id'=>$this->faker->numberBetween(1,3),
       'user_id'=>$this->faker->numberBetween(1,2),
       'visit'=>$this->faker->numberBetween(1,300),
        ];
    }
}
