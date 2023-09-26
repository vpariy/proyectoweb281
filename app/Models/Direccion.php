<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use HasFactory;
    protected $fillable = [
        'direccion',
    ];
    public function centro_ayudas(){
        return $this->belongsTo(Centro_ayuda::class,'id_centroAyuda');
    }
}
