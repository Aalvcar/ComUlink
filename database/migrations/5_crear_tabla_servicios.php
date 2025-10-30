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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->text('description');
            $table->enum('category', ['salud', 'albañileria', 'alimentacion', 'bricolaje', 'electronica', 'mantenimiento']);
            $table->string('price', 150);
            $table->smallInteger('total_services')->default(0);
            $table->unsignedBigInteger('user_id'); // FK hacia users
            $table->timestamps();


            // Clave ajena
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
        Schema::dropIfExists('services');
    }
};
