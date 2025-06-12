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

Route::get('jobs/create', function (){
    return view('jobs.create');
});

Route::post('/jobs', function() {
    request()->validate([
        'job-title' => ['required', 'min:3'],
        'author' => ['required', 'min:1'],
        'salary' => ['required', 'min:6'],
        'job-description' => ['required', 'min:24'],
        'file-upload' => ['required'],
    ]);

    Job::create([
        'title' => request('job-title'),
        'name' => request('author'),
        'salary' => request('salary'),
        'job_description' => request('job-description'),
        'img_path' => '/img/'.request('file-upload'),
    ]);

    return redirect('/jobs');
});

Route::get('/jobs/show/{id}', function ($id) {
    $job = Job::getAllJobs()->find($id);

    return view('jobs.show', [
        'job' => $job,
    ]);
});
