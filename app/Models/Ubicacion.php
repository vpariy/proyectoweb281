<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    use HasFactory;
    protected $table = 'ubicacions';
    protected $fillable = [
        'latitud','longitud'
    ];

    public function alertas(){
        return $this->hasMany(Alerta::class,'id_ubicacion');
    }
    
    public function usuarios(){
        return $this->belongsToMany(Usuario::class,'alertas','id_ubicacion','id_usuario');
    }
}
