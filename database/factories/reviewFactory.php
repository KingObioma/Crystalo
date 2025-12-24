<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\review>
 */
class reviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->randomElement([1, 3, 7, 9, 13]),
            'product_id' => $this->faker->randomElement([1, 3, 5, 11, 24, 25, 39, 40, 50]),
            'rating' => $this->faker->randomElement([3, 4, 5]),
            'review' => $this->faker->realText(90)
        ];
    }
}