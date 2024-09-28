<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('categoria_asesorias', function (Blueprint $table) {
            // Agregar la columna precio_mensual
            $table->decimal('precio_mensual', 8, 2)->after('descripcion'); // Asegúrate de que la columna descripcion exista antes de esto
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categoria_asesorias', function (Blueprint $table) {
            // Agregar la columna precio_mensual
            $table->decimal('precio_mensual', 8, 2)->after('descripcion'); // Asegúrate de que la columna descripcion exista antes de esto
      
        });
    }
};
