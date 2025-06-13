<?php

namespace Database\Factories;

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
            'title'=>fake()->jobTitle(),
            'job_description'=>fake()->paragraph(),
            'salary'=> fake()->numberBetween(1,50000),
            'author'=> fake()->name(),
            'img_path'=> 'img/',
            'created_at'=> now(),
        ];
    }
}
