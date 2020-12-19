<?php

namespace Database\Factories;

use App\Models\Food;
use App\Models\Restaurant;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

class FoodFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Food::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'food' => $this->faker->word,
            'restaurant_id' => function () {
                return Restaurant::all()->random();
            },
            'tag_id' => function () {
                return Tag::all()->random();
            },
            'image' => $this->faker->imageUrl(640, 480),
            'price' => $this->faker->randomNumber(2),
        ];
    }
}
