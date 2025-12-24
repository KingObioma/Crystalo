<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\siteSetting>
 */
class SiteSettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'phone' => '+234 9132 667 481',
            'email' => 'kingobioma8@gmail.com',
            'email2' => 'kelvinozak0@gmail.com',
            'available' => 'Mon - Sat: 9am to 6pm',
            'office_address' => 'Flat A, 20/7, Reynolds Neck Str, North Helenaville',
            'office_address2' => 'Flat A, 20/7, Reynolds Neck Str, North Helenaville',
            'facebook' => 'https://www.facebook.com/',
            'twitter' => 'https://www.twitter.com/',
            'skype' => 'https://www.skype.com/',
            'linkedin' => 'https://www.linkedin.com/in/',
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),

        ];
    }
}
