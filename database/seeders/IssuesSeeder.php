<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Issue;


class IssuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $issues = [
            [
                'title' => 'Rotura de tubería',
                'description' => 'Se ha roto una tubería en el baño común.',
                'category' => 'rotura',
                'repairer' => 'Fontanero Juan',
                'status' => 'Pendiente',
                'reported' => true,
                'cause' => 'Accidente',
                'user_id' => 1, // Juan
            ],
            [
                'title' => 'Limpieza piscina',
                'description' => 'Piscina necesita limpieza general.',
                'category' => 'limpieza',
                'status' => 'Pendiente',
                'reported' => true,
                'cause' => 'Mantenimiento',
                'user_id' => 2, // Ana
            ],
            [
                'title' => 'Reparación portón',
                'description' => 'Portón principal dañado.',
                'category' => 'reparacion',
                'repairer' => 'Taller de Metales S.L.',
                'status' => 'En proceso',
                'reported' => true,
                'cause' => 'Vandalismo',
                'user_id' => 3, // Luis
            ],
        ];

        foreach ($issues as $i) {
            Issue::create($i);
        }
    }
}
