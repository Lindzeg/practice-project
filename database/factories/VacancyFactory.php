<?php

namespace Database\Factories;
use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vacancy>
 */
class VacancyFactory extends Factory
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
            'vacancy_intro'=>fake()->text(80),
            'about_vacancy'=>fake()->paragraph(2),
            'vacancy_description'=>fake()->paragraph(3),
            'employer_id'=> Employer::factory(),
            'created_at'=> now(),
        ];
    }
}
