<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datos_victima extends Model
{

    protected $table = 'datos_victima';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre',
        'edad',
        'sexo',
        'estado',
    ];

    public function datosVictima()
    {
        return $this->belongsTo(DatosVictima::class, 'id');
    }
}
