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
        // Trigger para sumar votos al insertar en votaciones
        DB::unprepared('
            CREATE TRIGGER sumar_voto
            AFTER INSERT ON votaciones
            FOR EACH ROW
            UPDATE propuestas
            SET total_votos = total_votos + 1
            WHERE ID = NEW.id_propuesta;
        ');

        // Trigger para restar votos al eliminar de votaciones
        DB::unprepared('
            CREATE TRIGGER restar_voto
            AFTER DELETE ON votaciones
            FOR EACH ROW
            UPDATE propuestas
            SET total_votos = total_votos - 1
            WHERE ID = OLD.id_propuesta;
        ');
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER IF EXISTS sumar_voto');
        DB::unprepared('DROP TRIGGER IF EXISTS restar_voto');
    }
};
