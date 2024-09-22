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
        Schema::create('vinos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->decimal('precio', 8, 2);
            $table->string('imagen')->nullable();
            $table->text('ficha_tecnica')->nullable(); // Subitems: cosecha, variedad, crianza, potencial de guarda
            $table->text('notas_de_cata')->nullable();
            $table->text('sugerencias_de_acompaniamiento')->nullable();
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vinos');
    }
};
