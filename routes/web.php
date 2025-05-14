<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'jobs'=> [
            [
                "title" => "Director",
                "salary" => "50 000"
            ],
            [
                "title" => "Programmer",
                "salary" => "10 000"
            ],
            [
                "title" => "Teacher",
                "salary" => "40 000"
            ],
        ]
    ]);
});

return view('home', [
    'jobs' => [
        [
            "title" => "Director",
            "salary" => "50 000"
        ],
        [
            "title" => "Programmer",
            "salary" => "10 000"
        ],
        [
            "title" => "Teacher",
            "salary" => "40 000"
        ],
    ]
]);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});
