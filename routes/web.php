<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;
use App\Models\Vacancy;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\JobsController;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

//Index
Route::get('/jobs', [VacancyController::class, 'index']);

//Create
Route::get('jobs/create', function (){
    return view('jobs.create');
});

//Store
Route::post('/jobs',  [JobsController::class, 'post']);

// Route::post('/jobs', function() {
//     request()->validate([
//         'job-title' => ['required', 'min:3'],
//         'author' => ['required', 'min:1'],
//         'salary' => ['required', 'min:6'],
//         'job-description' => ['required', 'min:24'],
//         'file-upload' => ['required'],
//     ]);

//     Job::create([
//         'title' => request('job-title'),
//         'name' => request('author'),
//         'salary' => request('salary'),
//         'job_description' => request('job-description'),
//         'img_path' => '/img/'. request('file-upload'),
//     ]);

//     return redirect('/jobs');
// });

//Edit
Route::get('/jobs/{id}/edit',  [JobsController::class, 'index']);

//Update
Route::patch('/jobs/{id}', [JobsController::class, 'update']);


//Destroy
Route::delete('/jobs/{id}/edit',  [JobsController::class, 'destroy']);

//Show
Route::get('/jobs/show/{id}', function ($id) {
    $job = Job::getAllJobs()->find($id);

    return view('jobs.show', [
        'job' => $job,
    ]);
});
