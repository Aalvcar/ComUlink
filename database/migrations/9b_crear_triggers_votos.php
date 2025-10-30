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
            CREATE TRIGGER add_vote
            AFTER INSERT ON votes
            FOR EACH ROW
            UPDATE proposals
            SET total_votes = total_votes + 1
            WHERE id = NEW.proposal_id;
        ');

        // Trigger para restar votos al eliminar de votaciones
        DB::unprepared('
            CREATE TRIGGER remove_vote
            AFTER DELETE ON votes
            FOR EACH ROW
            UPDATE proposals
            SET total_votes = total_votes - 1
            WHERE id = OLD.proposal_id;
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER IF EXISTS add_vote;');
        DB::unprepared('DROP TRIGGER IF EXISTS remove_vote;');
    }
};
