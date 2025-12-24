<?php

namespace Database\Seeders;

use App\Models\blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Create 50 dummy blog records
       blog::factory()->count(50)->create();
    }
}