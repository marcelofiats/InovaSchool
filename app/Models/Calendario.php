<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendario extends Model
{
    use HasFactory;

    protected $fillable = [
        'mesReferente', 'dia','ano'
   ];

   public function boletins(){
       return $this->belongsToMany(Boletim::class, 'boletim_calendario');
   }

   public function financeiros(){
       return $this->belongsToMany(Financeiro::class, 'financeiro_calendario');
   }
}
