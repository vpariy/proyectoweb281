<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Usuario extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'usuario';
    protected $primaryKey = 'id_usuario';
    
    protected $fillable = [
        'nombres',
        'email',
        'password',
    ];

    public function alertas(){
        return $this->hasMany(Alerta::class,'id_usuario');
    }
    
    public function ubicaciones(){
        return $this->belongsToMany(Ubicacion::class,'alertas','id_usuario','id_ubicacion');
    }

    

}
