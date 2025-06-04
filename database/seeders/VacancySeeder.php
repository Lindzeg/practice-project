<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VacancySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vacancy::factory(10)->create([
        'title'=>fake()->jobTitle(),
            'job_info'=>fake()->paragraph(),
            'employer_id'=> Employer::factory(),
            'created_at'=> now(),
            'img_path' => 'img/',
            'about_job' => fake()->paragraph(),
            'job_discription' => fake()->paragraph(),
        ]);
    }
}
