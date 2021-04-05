<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boletim extends Model
{
    use HasFactory;

    protected $table = 'boletins';

    protected $fillable = [
        'falta', 'nota1','nota2', 'nota3', 'nota4',
    ];

    public function disciplinas(){
        return $this->belongsToMany(Disciplina::class, 'disciplina_boletim');
    }

    public function calendarios(){
        return $this->belongsToMany(Calendario::class, 'boletim_calendario');
    }
}
