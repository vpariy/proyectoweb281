<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $table = 'evento';
    protected $primaryKey = 'id_evento';

   

    public $timestamps = false;

    public function archivo() {
        return $this->belongsTo(Archivo::class, 'id_archivo', 'id_archivo');
    }
}
