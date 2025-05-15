<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Job {
    public static function all(): array {
        return [
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

    }

    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if (!$job) {
            abort(404);
        }

        return $job;
    }
}
