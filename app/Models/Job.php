<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Controllers\JobsController;


class Job extends Model {
    use HasFactory;
    protected $table = 'job_listings';
    protected $fillable = ['title', 'salary'];

    public static function getAllJobs()
    {
        return self::all();
    }
}



