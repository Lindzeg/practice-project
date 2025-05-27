<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;
use App\Models\Vacancy;
use App\Http\Controllers\VacancyController;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

//returns te index class in VacancyController
Route::get('/jobs', [VacancyController::class, 'index']);

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('job', [
        'job' => $job,
    ]);
});

Route::get('/mail', function () {
    return view('emails.mail');
});
