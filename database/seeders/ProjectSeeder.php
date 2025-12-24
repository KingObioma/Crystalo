<?php

namespace Database\Seeders;

use App\Models\project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 50 dummy blog records
       project::factory()->count(50)->create();
    }
}
