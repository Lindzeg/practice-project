<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/jobs', function () {
        $jobs = [
            [
                "id"=> "1",
                "title" => "Director",
                "salary" => "50 000",
            ],
            [
                "id" => "2",
                "title" => "Programmer",
                "salary" => "Є10 000",
            ],
            [
                "id" => "3",
                "title" => "Teacher",
                "salary" => "Є40 000",
            ],
            [
                "id" => "4",
                "title" => "Nurse",
                "salary" => "Є34.000",
            ],
            [
                "id" => "5",
                "title" => "Physiotherapist",
                "salary" => "Є60.000",
            ],
            [
                "id" => "6",
                "title" => "Data-analist",
                "salary" => "Є70.000",
            ],
        ];

        return view('jobs', [
            'jobs' => $jobs
    ]);
});

Route::get('/job/{id}', function ($id) {
    $job = [
         [
                "id"=> "1",
                "title" => "Director",
                "salary" => "50 000",
            ],
            [
                "id" => "2",
                "title" => "Programmer",
                "salary" => "Є10 000",
            ],
            [
                "id" => "3",
                "title" => "Teacher",
                "salary" => "Є40 000",
            ],
            [
                "id" => "4",
                "title" => "Nurse",
                "salary" => "Є34.000",
            ],
            [
                "id" => "5",
                "title" => "Physiotherapist",
                "salary" => "Є60.000",
            ],
            [
                "id" => "6",
                "title" => "Data-analist",
                "salary" => "Є70.000",
            ],

    ];

    $job = Arr::first($job, fn($job) => $job['id'] == $id);

    return view('job',['job' => $job]);
});
