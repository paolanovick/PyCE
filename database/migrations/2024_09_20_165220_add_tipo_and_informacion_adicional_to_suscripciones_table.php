<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTipoAndInformacionAdicionalToSuscripcionesTable extends Migration
{
    public function up()
    {
        Schema::table('suscripciones', function (Blueprint $table) {
            $table->string('tipo')->nullable(); // Agregar campo tipo
            $table->text('informacion_adicional')->nullable(); // Agregar campo información adicional
        });
    }

    public function down()
    {
        Schema::table('suscripciones', function (Blueprint $table) {
            $table->dropColumn(['tipo', 'informacion_adicional']); // Eliminar campos en caso de rollback
        });
    }
}

