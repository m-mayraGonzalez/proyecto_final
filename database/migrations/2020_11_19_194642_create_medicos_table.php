<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicosTable extends Migration
{
    public function up()
    {
        Schema::create('medicos', function (Blueprint $table) {
            $table->integer('cedula_medico')->unique();
            $table->string('tarjeta', 255);
            $table->string('nombre', 70);
            $table->string('apellido', 70);
            $table->string('telefono', 15);
            $table->string('direccion', 100);
            $table->unsignedBigInteger('id_eps');
            $table->timestamps();
            $table->foreign('id_eps')->references('id_eps')->on('eps');
        });
    }

    public function down()
    {
        Schema::dropIfExists('medicos');
    }
}
