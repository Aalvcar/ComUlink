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

        Schema::create('anuncios', function (Blueprint $table) {
            $table->smallIncrements('ID'); // SMALLINT AUTO_INCREMENT PRIMARY KEY
            $table->string('titulo', 50);
            $table->text('descripcion');
            $table->timestamp('fecha')->useCurrent(); // TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            $table->string('email', 100)->nullable();

            // Clave foránea
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
        Schema::dropIfExists('anuncios');
    }
};
