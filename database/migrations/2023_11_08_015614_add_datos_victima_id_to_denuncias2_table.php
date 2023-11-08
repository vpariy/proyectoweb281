<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDatosVictimaIdToDenuncias2Table extends Migration
{
    public function up()
    {
        Schema::table('denuncias2', function (Blueprint $table) {
            $table->foreignId('datos_victima_id')->constrained('datos_victima');
        });
    }

    public function down()
    {
        Schema::table('denuncias2', function (Blueprint $table) {
            $table->dropForeign(['datos_victima_id']);
            $table->dropColumn('datos_victima_id');
        });
    }
}
