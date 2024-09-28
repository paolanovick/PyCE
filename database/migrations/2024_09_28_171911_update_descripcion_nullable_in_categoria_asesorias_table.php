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
        Schema::table('categoria_asesorias', function (Blueprint $table) {
            $table->string('descripcion')->default('Sin descripción')->change();
        });
    }

    public function down()
    {
        Schema::table('categoria_asesorias', function (Blueprint $table) {
            $table->string('descripcion')->default(null)->change();
        });
    }

};
