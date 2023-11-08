<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosVictimaTable extends Migration
{
    public function up()
    {
        Schema::create('datos_victima', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('edad');
            $table->boolean('sexo');
            $table->text('estado');
            // Otros campos que puedas necesitar
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('datos_victima');
    }
}

