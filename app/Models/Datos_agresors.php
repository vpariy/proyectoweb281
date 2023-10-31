<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datos_agresors extends Model
{
    protected $table = 'datos_agresors';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre',
        'descripcion',
        'descripcion_agresion',
        'archivos_prueba',
    ];

    public function datosAgresor()
    {
        return $this->belongsTo(DatosAgresors::class, 'id');
    }
    
}
