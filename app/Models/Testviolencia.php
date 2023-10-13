<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testviolencia extends Model
{
    use HasFactory;

    protected $table = 'testviolencias';
    protected $fillable = ['pregunta'];
}
