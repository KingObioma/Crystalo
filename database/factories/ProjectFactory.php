<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'admin_id' => $this->faker->numberBetween(1, 20),
            'project_name' => $this->faker->realText(26),
            'project_head' => $this->faker->name,
            'project_year' => $this->faker->year,
            'project_video' => $this->faker->url,
            'project_thumbnail' => null,
            'image_1' => null,
            'image_2' => null,
            'price_value' => $this->faker->numberBetween(100000, 1000000),
            'location' => $this->faker->city . ', ' . $this->faker->country,
            'category' => $this->faker->randomElement(['Modern', 'Contemporary', 'Traditional', 'Retreat']),
            'description' => $this->faker->realText(600),
            'square_meters' => $this->faker->numberBetween(100, 1000),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
