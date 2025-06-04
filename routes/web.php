<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;
use App\Models\Vacancy;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\VacancyDetailsController;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

//returns te index class in VacancyController to jobs page
Route::get('/jobs', [VacancyController::class, 'index']);


Route::get('/jobs/{id}', function ($id) {
    $job = Job::getAllJobs()->find($id);


    return view('job', [
        'job' => $job,
    ]);

    
});
