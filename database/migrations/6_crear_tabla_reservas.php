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
        Schema::create('reservas', function (Blueprint $table) {
            $table->smallIncrements('ID');
            $table->date('fecha');
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->unsignedTinyInteger('id_instalacion');
            $table->string('email', 100);
            $table->timestamps();


            // Claves ajenas
            $table->foreign('email')
                ->references('email')
                ->on('usuarios')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_instalacion')
                ->references('ID')
                ->on('instalaciones')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
