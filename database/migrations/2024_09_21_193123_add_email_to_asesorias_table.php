<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('asesorias', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique(); // Agregar el campo email
            // Otros campos según lo necesario
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::table('asesorias', function (Blueprint $table) {
            $table->dropColumn('email'); // Elimina el campo email
        });
    }

};
