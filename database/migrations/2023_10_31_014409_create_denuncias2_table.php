<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDenuncias2Table extends Migration
{
    public function up()
    {
        Schema::create('denuncias2', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_denunciante');
            $table->boolean('anonimo');
            $table->integer('edad');
            $table->string('ci');
            $table->date('fecha_agresion');
            $table->unsignedBigInteger('datos_agresors_id')->nullable(); // Referencia a DatosAgresor
            $table->timestamps();

            $table->foreign('datos_agresors_id')
                ->references('id')
                ->on('datos_agresors')
                ->onDelete('set null'); // Si eliminas DatosAgresor, establece datos_agresor_id como nulo
        });
    }

    public function down()
    {
        Schema::dropIfExists('denuncias2');
    }
}

