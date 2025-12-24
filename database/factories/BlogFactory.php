<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
      /**
    * The current password being used by the factory.
    */
   protected static ?string $password;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'admin_id' => $this->faker->numberBetween(1, 20), // Assuming 10 admins exist
            'title' => $this->faker->realText(46),
            'blog_thumbnail' => null,
            'image_1' => null,
            'image_2' => null,
            'category' => $this->faker->randomElement(['Modern', 'Contemporary', 'Traditional', 'Retreat']),
            'tags' => implode(', ', ['Ideas', 'Room', 'Wall', 'Painting']),
            'quote' => $this->faker->realText(180), // Random quote
            'paragraph_1' => $this->faker->realText(600),
            'paragraph_2' => $this->faker->realText(600),
            'paragraph_3' => $this->faker->realText(600),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),

        ];
    }
}