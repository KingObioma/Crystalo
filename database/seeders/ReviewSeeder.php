<?php

namespace Database\Seeders;

use App\Models\review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 50 dummy records
       review::factory()->count(30)->create();
    }
}