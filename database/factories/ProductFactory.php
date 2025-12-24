<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
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
            // 'admin_id' => $this->faker->numberBetween(1, 20),
            'admin_id' => $this->faker->randomElement([1, 3, 7, 9]),
            'name' => $this->faker->realText(13),
            'price_value' => $this->faker->numberBetween(10, 100),
            'photo' => null,
            'expected_delivery' => '4-10 Days',
            'short_description' => $this->faker->realText(200),
            'long_description' => $this->faker->realText(600),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}