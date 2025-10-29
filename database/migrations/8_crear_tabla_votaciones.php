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
        Schema::create('votaciones', function (Blueprint $table) {
            $table->string('email', 100);
            $table->unsignedTinyInteger('id_propuesta');
            $table->boolean('tipo_voto');
            $table->timestamps();

            // Clave primaria compuesta
            $table->primary(['email', 'id_propuesta']);

            // Claves ajenas
            $table->foreign('email')
                ->references('email')
                ->on('usuarios')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_propuesta')
                ->references('ID')
                ->on('propuestas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('votaciones');
    }
};
