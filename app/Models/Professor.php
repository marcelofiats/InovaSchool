<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Professor extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'professores';

    public $incrementing = false;

    protected $fillable = [
        'email', 'password','pessoa_id'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function professor_disciplina(){
        return $this->belongsToMany(Disciplina::class,'Professor_Disciplina');
    }

}
