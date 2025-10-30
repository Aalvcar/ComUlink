<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Proposal;


class ProposalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $proposals = [
            [
                'title' => 'Mejora de jardín',
                'description' => 'Propuesta para añadir más plantas y bancos en el jardín.',
                'category' => 'ocio',
                'start_date' => '2025-11-01',
                'end_date' => '2025-11-30',
                'total_votes' => 0,
                'user_id' => 1, // Juan
            ],
            [
                'title' => 'Reparación portón',
                'description' => 'Propuesta de reparación del portón principal del edificio.',
                'category' => 'infraestructura',
                'start_date' => '2025-11-05',
                'end_date' => '2025-11-20',
                'total_votes' => 0,
                'user_id' => 2, // Ana
            ],
            [
                'title' => 'Clases de padel',
                'description' => 'Propuesta de organizar clases de padel semanales para la comunidad.',
                'category' => 'deportiva',
                'start_date' => '2025-11-10',
                'end_date' => '2025-11-25',
                'total_votes' => 0,
                'user_id' => 3, // Luis
            ],
        ];

        foreach ($proposals as $p) {
            Proposal::create($p);
        }
    }
}
