<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('denuncias2', function (Blueprint $table) {
            $table->boolean('revisado')->default(false);
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('denuncias2', function (Blueprint $table) {
            $table->dropColumn('revisado');
        });
    }

    
};
