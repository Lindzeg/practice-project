<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vacancy extends Model
{
   use HasFactory;
   protected $table = 'vacancies';

     public function employer()
    {
        // a vacancy can only have one assigned employer
        return $this->belongsTo(Employer::class);
    }
}
