<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employer extends Model
{
    use HasFactory;
    protected $table = 'employers';

    public function vacancies()
    {
        //define an employer who can have many vacancies
        return $this->hasMany(Vacancy::class);
    }
}
