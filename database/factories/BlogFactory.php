<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'slug' => $this->faker->word,
            'tags' => $this->faker->words(3,true),
            'detail' => $this->faker->sentence(5,true),
            'photo' => $this->faker->imageUrl('640','480'),
            'user_id' => $this->faker->randomNumber(1,3),
            'blog_category_id' => $this->faker->randomNumber(1,9),
         ];
    }
}
