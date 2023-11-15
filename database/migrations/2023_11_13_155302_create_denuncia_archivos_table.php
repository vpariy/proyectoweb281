<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration //Retorna la clase directamente
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('denuncia_archivos', function (Blueprint $table) {
            $table->id('id_den_arch');
            $table->unsignedBigInteger('id_denuncia')->nullable();
            $table->unsignedBigInteger('id_archivo')->nullable();
            
            $table->foreign('id_denuncia')->references('id')->on('denuncias2')->nullOnDelete();
            $table->foreign('id_archivo')->references('id_archivo')->on('archivo');


            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('centro_ayudas', function (Blueprint $table) {
            $table->dropColumn('img');
        });
    }
};
