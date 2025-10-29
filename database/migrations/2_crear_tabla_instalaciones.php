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
        Schema::create('instalaciones', function (Blueprint $table) {
            $table->tinyIncrements('ID');
            $table->string('nombre', 50);
            $table->string('descripcion', 255);
            $table->unsignedTinyInteger('aforo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instalaciones');
    }
};
