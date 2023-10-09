<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ley extends Model
{
    use HasFactory;

    protected $table = 'leyes'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'id'; 

    protected $fillable = ['titulo', 'descripcion'];
}
