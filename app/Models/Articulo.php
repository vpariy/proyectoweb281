<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;

    protected $table = 'articulo'; 
    protected $primaryKey = 'id_art';

    
    public $timestamps = false;

    protected $fillable = ['nombre_art', 'desc_art', 'img_art'];


}
