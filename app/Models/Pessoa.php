<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pessoa extends Model
{
    use HasFactory;
    //use SoftDeletes;

    protected $keyType = 'string';

    public $incrementing = false;

    protected $casts = ['id' => 'string'];

    protected $fillable = [
        'nome', 'dataNascimento', 'sexo', 'cpf', 'rg', 'email','telfone1','cep','rua','numero','bairro','cidade','uf', 'user_id'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }

    public function responsavel()
    {
        return $this->hasOne(Responsavel::class);
    }
    public function diretoria()
    {
        return $this->hasOne(Diretoria::class);
    }
    public function professor()
    {
        return $this->hasOne(Professor::class);
    }
    public function secretaria()
    {
        return $this->hasOne(Secretaria::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
