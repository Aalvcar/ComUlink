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
        Schema::create('servicios', function (Blueprint $table) {
            $table->smallIncrements('ID');
            $table->string('titulo', 100);
            $table->text('descripcion');
            $table->enum('categoria', ['salud', 'albañileria', 'alimentacion', 'bricolaje', 'electronica', 'mantenimiento']);
            $table->string('precio', 150);
            $table->smallInteger('total_servicios')->default(0);
            $table->string('email', 100);
            $table->timestamps();


            // Clave ajena
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
        Schema::dropIfExists('servicios');
    }
};
