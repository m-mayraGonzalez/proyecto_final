<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcedimientosTable extends Migration
{
    public function up()
    {
        Schema::create('procedimientos', function (Blueprint $table) {
            $table->id('id_procedimiento');
            $table->string('tipo', 255);
            $table->unsignedBigInteger('id_historia');
            $table->timestamps();
            $table->foreign('id_historia')->references('id_historia')->on('historias');
        });
    }

    public function down()
    {
        Schema::dropIfExists('procedimientos');
    }
}
