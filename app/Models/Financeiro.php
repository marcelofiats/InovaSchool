<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Financeiro extends Model
{
    use HasFactory;

    protected $keyType = 'string';

    public $incrementing = false;

    protected $casts = ['id' => 'string'];

    protected $fillable = [
        'dataVencimento', 'dataPagamento', 'formaPagamento', 'codigoBarras', 'status','responsavel_id'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }

    public function responsaveis(){
        return $this->belongsTo(Responsavel::class);
    }

    public function calendarios(){
        return $this->belongsToMany(Calendario::class, 'financeiro_calendario');
    }
}
