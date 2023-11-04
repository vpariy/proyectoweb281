<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denuncias2 extends Model
{
    protected $table = 'denuncias2';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre_denunciante',
        'anonimo',
        'edad',
        'ci',
        'fecha_agresion',
        'datos_agresors_id',
        'revisado',
    ];

    public function datos_agresors()
    {
        return $this->belongsTo(Datos_agresors::class, 'datos_agresors_id');
    }
}
