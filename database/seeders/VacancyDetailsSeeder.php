<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VacancyDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        VacancyDetails::factory(6)->create([
                'vacancie_details' => [

                'Salary',
                'Education Level',
                'Location',
                'Hours',
                'Employment',

            ],

            'img_path' => 'img/',
        ]);
    }
}
