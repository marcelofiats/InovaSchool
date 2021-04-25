<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor_Turma extends Model
{
    use HasFactory;

    public function professores(){
        return $this->belongsTo(Professor::class);
    }

    public function turma(){
        return $this->belongsTo(Turma::class);
    }
}
