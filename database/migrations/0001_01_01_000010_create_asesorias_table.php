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
            $table->string('nombre_apellido');
            $table->string('celular'); // Cambiado a string
            $table->string('email')->nullable(); // Campo email opcional
            $table->unsignedBigInteger('categoria_id'); // Cambiado a unsignedBigInteger y renombrado
            $table->timestamps();

            // Definir la clave foránea correctamente
            $table->foreign('categoria_id')
            ->references('id')->on('categoria_asesorias')
            ->onDelete('cascade');
        });

    }

    public function down()
    {
        Schema::dropIfExists('asesorias');
    }
}
