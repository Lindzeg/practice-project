<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancy;
use App\Models\VacancyDetails;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Job;

class VacancyController extends Controller
{


    public function index()
    {
        $vacancies = Vacancy::has('employer')->get();
        //take first 3 vacancies from vacancy array
        $firstVacancies = $vacancies->take(3);
        //take all other vacancies except the first 3
        $otherVacancies = $vacancies->skip(3);

        return view('jobs.index',[
            'jobs' => Job::has('employer')->with('employer')->latest()->simplePaginate(5),
            'firstVacancies' => $firstVacancies,
            'otherVacancies' => $otherVacancies,
            'vacancies' => $vacancies,
        ]);


    }

}

