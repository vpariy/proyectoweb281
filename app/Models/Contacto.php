<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;
    protected $fillable = [
        'contacto',
    ];
    public function centro_ayudas(){
        return $this->belongsTo(Centro_ayuda::class,'id_centroAyuda');
    }
}
