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
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->text('description');
            $table->enum('category', ['administrativa', 'ocio', 'deportiva', 'infraestructura']);
            $table->unsignedSmallInteger('total_votes')->default(0);
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();

            $table->unsignedBigInteger('user_id');

            // Clave  ajena hacia usuarios
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        // Columna virtual "acaba_en" (calculada)
        DB::statement("
            ALTER TABLE proposals
            ADD COLUMN days_remaining INT AS (DATEDIFF(end_date, CURDATE())) VIRTUAL
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proposals');
    }
};
