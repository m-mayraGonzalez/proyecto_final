<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaboratoriosTable extends Migration
{
    public function up()
    {
        Schema::create('laboratorios', function (Blueprint $table) {
            $table->id('id_laboratorio');
            $table->string('titulo')->unique();
            $table->unsignedBigInteger('id_historia');
            $table->timestamps();
            $table->foreign('id_historia')->references('id_historia')->on('historias');
        });
    }

    public function down()
    {
        Schema::dropIfExists('laboratorios');
    }
}
