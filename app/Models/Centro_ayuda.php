<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centro_ayuda extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_centro',
        'descripcion'
    ];

    public function direcciones(){
        return $this->hasMany(Direccion::class,'id_centroAyuda');
    }
    public function contactos(){
        return $this->hasMany(Contacto::class,'id_centroAyuda');
    }
}
