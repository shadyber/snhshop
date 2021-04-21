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
       'photo'=>$this->faker->imageUrl('640','480','fashion'),
       'color'=>$this->faker->colorName,
       'measurement'=>$this->faker->word,
       'weight'=>$this->faker->word,
       'price'=>$this->faker->numberBetween(20,4000),
       'category_id'=>$this->faker->numberBetween(1,2),
        ];
    }
}
