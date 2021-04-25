<?php

namespace App\Models;

use App\Models\Pessoa;
use Illuminate\Support\Str;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use HasApiTokens;
    use HasFactory;
    use Notifiable;
    //use SoftDeletes;

    protected $keyType = 'string';

    public $incrementing = false;

    protected $casts = [
        'id' => 'string',
        'email_verified_at' => 'datetime'
    ];

    protected $fillable = [
        'name', 'email', 'password','permissao', 'pessoa_id', 'token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
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

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }
    public function diretoria()
    {
        return $this->hasOne(Diretoria::class);
    }
    public function secretaria()
    {
        return $this->hasOne(Secretaria::class);
    }
    public function professor()
    {
        return $this->hasOne(Professor::class);
    }
    public function responsavel()
    {
        return $this->hasOne(Responsavel::class);
    }
}
