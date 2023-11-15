<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denuncia_archivos extends Model
{
    use HasFactory;

    protected $table = 'denuncia_archivos';
    protected $primaryKey = 'id_den_arch';

    public $timestamps = false;

    public function archivo() {
        return $this->belongsTo(Archivo::class, 'id_archivo', 'id_archivo');
    }


}
