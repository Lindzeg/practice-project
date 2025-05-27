<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Controllers\VacancyController;

class Vacancy extends Model
{
   use HasFactory;
   protected $table = 'vacancies';


    public static function getAllVacancies()
    {
        return self::all();
    }

     public function employer()
    {
        // a vacancy can only have one assigned employer
        return $this->belongsTo(Employer::class);
    }




}
