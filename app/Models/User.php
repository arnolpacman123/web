<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'usuarios';
    protected $guarded = [];

    public function tipoUsuario()
    {
        return $this->belongsTo(TipoUsuario::class);
    }

    public function postulantes()
    {
        return $this->hasMany(Postulante::class);
    }

    public function gruposMaterias()
    {
        return $this->hasMany(GrupoMateria::class);
    }
}
