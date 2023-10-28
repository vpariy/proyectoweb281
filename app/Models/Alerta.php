<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alerta extends Model
{
    use HasFactory;
    protected $table = 'alertas';
    protected $fillable = ['revisado'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class,'id_usuario');
    }

    public function ubicacion()
    {
        return $this->belongsTo(Ubicacion::class,'id_ubicacion');
    }
}
