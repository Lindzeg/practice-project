<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\JobsController;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs', [VacancyController::class, 'index']);
Route::get('jobs/create', [JobsController::class, 'create']);
Route::get('jobs/show/{job}', [JobsController::class, 'show']);
Route::post('/jobs',  [JobsController::class, 'post']);
Route::get('/jobs/{job}/edit', [JobsController::class, 'edit']);
Route::patch('/jobs/{job}', [JobsController::class, 'update']);
Route::delete('/jobs/{job}',  [JobsController::class, 'destroy']);


