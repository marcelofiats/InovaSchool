<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Responsavel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'Responsaveis';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $casts = ['id' => 'string'];


    protected $fillable = [
        'parentesco_aluno', 'email', 'password', 'user_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }

    public function alunos(){
        return $this->hasMany(Aluno::class);
    }

    public function financeiros(){
        return $this->hasMany(Financeiros::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
