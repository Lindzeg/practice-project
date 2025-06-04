<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Job::factory(10)->create([
            'name' => fake()->company(),
            'title' => fake()->jobTitle(),
            'salary' => fake()->randomFloat(2,30000, 100000),
            'job_discription' =>fake()->paragraph(),
            'img_path' => 'img/',
        ]);
    }
}
