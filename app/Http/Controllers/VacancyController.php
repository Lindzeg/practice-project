<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancy;
use App\Models\Job;

class VacancyController extends Controller
{


    public function index()
    {
        $vacancies = Vacancy::all();

        //take first 3 vacancies from vacancy array
        $firstVacancies = $vacancies->take(3);

        //take all other vacancies except the first 3
        $otherVacancies = $vacancies->skip(3);

        return view('jobs',[
            'jobs' => Job::getAllJobs(),
            'firstVacancies' => $firstVacancies,
            'otherVacancies' => $otherVacancies,

            'vacancies' => $vacancies,
        ]);


    }

}

