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
            'name'  => $this->faker->city(),
            'quantity_available' => $this->faker->numberBetween(10, 50),
            'price' => 0.05 * $this->faker->numberBetween(20, 1000),
        ];
    }
}
