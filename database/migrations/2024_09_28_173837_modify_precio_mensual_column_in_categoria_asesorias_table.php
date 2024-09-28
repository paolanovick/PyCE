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
            $table->decimal('precio_mensual', 8, 2)->nullable(false)->change(); // Cambia a NOT NULL
            // O para revertir el valor por defecto, quítalo:
            // $table->decimal('precio_mensual', 8, 2)->default(null)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categoria_asesorias', function (Blueprint $table) {
            //
        });
    }
};
