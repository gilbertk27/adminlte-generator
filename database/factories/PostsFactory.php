<?php

namespace Database\Factories;

use App\Models\Posts;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Posts::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author_id' => $this->faker->randomDigitNotNull,
        'title' => $this->faker->word,
        'description' => $this->faker->word,
        'content' => $this->faker->text,
        'date' => $this->faker->word
        ];
    }
}
