<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    use HasFactory;

    protected $table = 'archivo';
    protected $primaryKey = 'id_archivo';

    protected $attributes = [
        'nombre' => ''
    ];

    public function evento() {
        return $this->hasMany(Evento::class);
    }

    public function articulo() {
        return $this->hasMany(Articulo::class);
    }
}
