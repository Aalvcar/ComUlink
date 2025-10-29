<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->tinyInteger('codigo')->primary();
            $table->enum('nombre', ['presidente', 'propietario', 'inquilino'])->notNullable();
            $table->string('descripcion', 255);

            // Laravel no soporta directamente CHECK constraints
            // pero se puede agregar manualmente si MySQL lo soporta:
            // DB::statement("ALTER TABLE roles ADD CHECK (codigo IN (1,2,3))");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
