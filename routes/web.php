<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\JobsController;

Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::resource('jobs', JobsController::class);

