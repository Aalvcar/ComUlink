<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vote;


class VotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $votes = [
            [
                'user_id' => 1, // Juan
                'proposal_id' => 1, // Mejora de jardín
                'vote_type' => true, // voto positivo
            ],
            [
                'user_id' => 2, // Ana
                'proposal_id' => 1, // Mejora de jardín
                'vote_type' => true,
            ],
            [
                'user_id' => 3, // Luis
                'proposal_id' => 2, // Reparación portón
                'vote_type' => false, // voto negativo
            ],
        ];

        foreach ($votes as $v) {
            Vote::create($v);
        }
    }
}
