<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\blog;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            BlogSeeder::class,
            ProjectSeeder::class,
            ProductSeeder::class,
            TestimonialSeeder::class,
            SiteSettingSeeder::class,
            ReviewSeeder::class,
        ]);
    }
}
