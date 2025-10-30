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
        Schema::create('issues', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->text('description');
            $table->enum('category', ['rotura', 'reparacion', 'limpieza']);
            $table->string('repairer', 100)->default('No asignado');
            $table->string('status', 255)->default('Pendiente');
            $table->boolean('reported')->default(false);
            $table->string('cause', 30);
            $table->timestamps();
            $table->unsignedBigInteger('user_id'); // Relación con users

            // Clave ajena hacia usuarios
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('issues');
    }
};
