<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

use App\Http\Controllers\VacancyController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\LoginUserController;

use App\Jobs\TranslateJob;
use App\Jobs\Dispatchable;
use App\Models\Job;

Route::get('testmail', function () {
    $job = Job::first(); // ← Model, niet de Job-class
    TranslateJob::dispatch($job); // ← Dispatch naar queue
    return 'Done';
});

Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::resource('vacancies', VacancyController::class);
Route::resource('jobs', JobsController::class);

//auth
Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);

Route::get('/login', [LoginUserController::class, 'create']);
Route::post('/login', [LoginUserController::class, 'store']);

Route::post('/logout', [LoginUserController::class, 'destroy']);



