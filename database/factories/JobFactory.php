<?php

namespace Database\Factories;
use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'title' => fake()->jobTitle(),
            'salary' => fake()->randomFloat(2,30000, 100000),
            'job_discription' =>fake()->paragraph(),
            'img_path' => 'img/',
        ];
    }
}


