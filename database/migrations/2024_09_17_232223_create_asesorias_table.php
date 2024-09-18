<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsesoriasTable extends Migration
{
    public function up()
    {
        Schema::create('asesorias', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('resumen');
            $table->text('contenido');
            $table->string('imagen')->nullable(); // Ruta o nombre de imagen
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('asesorias');
    }
}
