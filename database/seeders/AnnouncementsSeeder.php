<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Announcement;


class AnnouncementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $announcements = [
            [
                'title' => 'Reunión Comunidad',
                'description' => 'Reunión mensual de la comunidad en la sala común.',
                'event_date' => '2025-11-05 18:00:00',
                'user_id' => 1, // Juan, presidente
            ],
            [
                'title' => 'Mantenimiento Piscina',
                'description' => 'Cierre temporal de la piscina por limpieza y mantenimiento.',
                'event_date' => '2025-11-10 09:00:00',
                'user_id' => 2, // Ana, propietario
            ],
            [
                'title' => 'Clase de Padel',
                'description' => 'Clase de padel para todos los interesados en pista cubierta.',
                'event_date' => '2025-11-12 16:00:00',
                'user_id' => 3, // Luis, inquilino
            ],
            [
                'title' => 'Corte de luz',
                'description' => 'Durante esta semana tendremos cortes de luz intermitentes por los trabajos de mejora en la red.',
                'user_id' => 1,
            ],
        ];

        foreach ($announcements as $a) {
            Announcement::create($a);
        }
    }
}
