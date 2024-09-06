<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Provider;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product' => $this->faker->word(),
            'price' => $this->faker->randomFloat(2, 10, 1000), 
            'stock' => $this->faker->numberBetween(1, 100),
            'provider_id' => Provider::inRandomOrder()->first()->id,

        ];
    }
}
