<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articulo', function (Blueprint $table) {
            $table->id('id_articulo');
            $table->unsignedBigInteger('id_usuario')->nullable();
            $table->unsignedBigInteger('id_archivo')->nullable();
            $table->string('nombre');
            $table->string('autor');
            $table->string('resumen');
            
            $table->timestamps();
            
            $table->foreign('id_usuario')->references('id_usuario')->on('usuario')->nullOnDelete();
            $table->foreign('id_archivo')->references('id_archivo')->on('archivo');


            


            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articulo');
    }
};
