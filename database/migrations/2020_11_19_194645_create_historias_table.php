<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriasTable extends Migration
{
    public function up()
    {
        Schema::create('historias', function (Blueprint $table) {
            $table->id('id_historia');
            $table->unsignedBigInteger('cedula_paciente');
            $table->timestamps();
            $table->foreign('cedula_paciente')->references('cedula_paciente')->on('pacientes');
        });
    }

    public function down()
    {
        Schema::dropIfExists('historias');
    }
}
