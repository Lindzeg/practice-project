<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancy;

class VacancieController extends Controller
{
    public function index()
    {
        $vacancies = Vacancy::getAllVacancies();
    }
}
