<?php

namespace App\Models;

use App\Models\Professor;
use App\Models\Disciplina;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Professor_Disciplina extends Model
{
    use HasFactory;

    protected $table = 'professor_disciplinas';

}
