<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultasTable extends Migration
{
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->id('id_consulta');
            $table->string('tipo')->unique();
            $table->string('titulo', 255);
            $table->string('descripcion', 255);
            $table->date('horario');
            $table->unsignedBigInteger('id_historia');
            $table->timestamps();
            $table->foreign('id_historia')->references('id_historia')->on('historias');
        });
    }

    public function down()
    {
        Schema::dropIfExists('consultas');
    }
}
