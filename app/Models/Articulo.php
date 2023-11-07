<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;

    protected $table = 'articulo'; 
    protected $primaryKey = 'id_articulo';

    
    public $timestamps = true;

    protected $fillable = ['nombre', 'resumen', 'autor'];

    public function archivo() {
        return $this->belongsTo(Archivo::class, 'id_archivo', 'id_archivo');
    }
}
