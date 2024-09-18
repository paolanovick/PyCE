<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVinosTable extends Migration
{
    public function up()
    {
        Schema::create('vinos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->decimal('precio', 10, 2);
            $table->string('imagen'); // Ruta o nombre de imagen
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vinos');
    }
}
