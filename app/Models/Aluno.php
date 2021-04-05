<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = [
        'matricula', 'nome','rg','dataNascimento', 'sexo','anoLetivo','turma', 'status','informações','responsavel_id'
    ];

    public function responsavel(){
        return $this->belongsTo(Responsaveis::class);
    }

    public function disciplinas(){
        return $this->hasMany(Disciplina::class,'Aluno_Disciplina');
    }
}
