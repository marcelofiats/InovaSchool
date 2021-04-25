<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'descricao'
    ];

    public function alunos(){
        return $this->belongsToMany(Aluno::class, 'aluno_disciplinas');
    }

    public function boletins(){
        return $this->belongsToMany(Boletim::class, 'disciplina_boletims');
    }

    public function professores(){
        return $this->belongsToMany(Professor::class, 'professor_disciplinas');
    }
}
