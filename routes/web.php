<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\LoginUserController;

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



