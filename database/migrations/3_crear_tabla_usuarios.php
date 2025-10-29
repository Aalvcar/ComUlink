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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->string('email', 100)->primary();
            $table->string('nombre', 25);
            $table->string('apellidos', 50);
            $table->string('password', 255);
            $table->string('direccion', 100);
            $table->unsignedInteger('telefono');
            $table->date('fecha_nacimiento');
            $table->tinyInteger('cod_rol');
            $table->timestamps();


            // Clave ajena hacia roles
            $table->foreign('cod_rol')
                ->references('codigo')
                ->on('roles')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
