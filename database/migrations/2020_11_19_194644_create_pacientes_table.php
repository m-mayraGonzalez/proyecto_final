<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->integer('cedula_paciente')->unique();
            $table->char('tipo_documento', 4);
            $table->string('nombre', 26);
            $table->string('apellido', 60);
            $table->string('telefono', 20);
            $table->unsignedBigInteger('id_afiliacion');
            $table->timestamps();
            $table->foreign('id_afiliacion')->references('id_afiliacion')->on('afiliaciones');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
