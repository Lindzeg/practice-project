<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancy;
use App\Models\Job;

class VacancyController extends Controller
{


    public function index()
    {
        $vacancies = Vacancy::getAllVacancies();

        //take first 3 vacancies from vacancy array
        $firstVacancies = $vacancies->take(3);
        //take all other vacancies except the first 3
        $otherVacancies = $vacancies->slice(3);
        // dd($firstVacancies);
        // dd($otherVacancies);
        return view('jobs',[
            'jobs' => Job::getAllJobs(),
            'firstVacancies' => $firstVacancies,
            'otherVacancies' => $otherVacancies,
            'vacancies' => VacancyController::class, 'index',
        ]);


    }

}

