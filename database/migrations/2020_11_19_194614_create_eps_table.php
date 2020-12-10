<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpsTable extends Migration
{
    public function up()
    {
        Schema::create('eps', function (Blueprint $table) {
            $table->id('id_eps');
            $table->string('nit', 100);
            $table->string('nombre', 100);
            $table->unsignedBigInteger('id_ciudad');
            $table->timestamps();
            $table->foreign('id_ciudad')->references('id_ciudad')->on('ciudades');
        });
    }

    public function down()
    {
        Schema::dropIfExists('eps');
    }
}
