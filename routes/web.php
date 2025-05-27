<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;
use App\Models\Vacancy;
use App\Controllers\VacancyController;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs', function ()  {
        return view('jobs', [
            'jobs' => Job::getAllJobs(),
            'vacancies' => Vacancy::getAllVacancies(),
    ]);


});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('job', [
        'job' => $job,
    ]);
});

Route::get('/mail', function () {
    return view('emails.mail');
});
