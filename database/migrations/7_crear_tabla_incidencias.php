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
        Schema::create('incidencias', function (Blueprint $table) {
            $table->smallIncrements('ID'); // SMALLINT AUTO_INCREMENT PRIMARY KEY
            $table->string('titulo', 50);
            $table->text('descripcion');
            $table->enum('categoria', ['rotura', 'reparacion', 'limpieza']);
            $table->string('reparador', 100)->nullable();
            $table->string('estado', 255)->default('Pendiente');
            $table->boolean('reportada')->default(false);
            $table->string('causa', 30);
            $table->timestamp('fecha_alta')->useCurrent();
            $table->string('email', 100)->nullable();

            // Clave foránea hacia usuarios
            $table->foreign('email')
                ->references('email')
                ->on('usuarios')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incidencias');
    }
};
