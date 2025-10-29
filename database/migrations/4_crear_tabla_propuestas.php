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
        Schema::create('propuestas', function (Blueprint $table) {
            $table->tinyIncrements('ID'); // TINYINT AUTO_INCREMENT PRIMARY KEY
            $table->string('titulo', 50);
            $table->text('descripcion');
            $table->enum('categoria', ['administrativa', 'ocio', 'deportiva', 'infraestructura']);
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->smallInteger('total_votos')->default(0);
            $table->string('email', 100)->nullable();

            // Clave foránea hacia usuarios
            $table->foreign('email')
                ->references('email')
                ->on('usuarios')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        // Columna virtual "acaba_en" (calculada)
        DB::statement("
            ALTER TABLE propuestas
            ADD COLUMN acaba_en INT AS (DATEDIFF(fecha_fin, CURDATE())) VIRTUAL
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propuestas');
    }
};
