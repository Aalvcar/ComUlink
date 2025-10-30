<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;


class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Clases de yoga',
                'description' => 'Clases de yoga semanales en la sala común.',
                'category' => 'salud',
                'price' => '15€/hora',
                'total_services' => 0,
                'user_id' => 1, // Juan
            ],
            [
                'title' => 'Reparación fontanería',
                'description' => 'Servicio de reparación de fontanería en viviendas.',
                'category' => 'albañileria',
                'price' => '30€/hora',
                'total_services' => 0,
                'user_id' => 2, // Ana
            ],
            [
                'title' => 'Entrega de alimentos',
                'description' => 'Servicio de compra y entrega de alimentos a domicilio.',
                'category' => 'alimentacion',
                'price' => '10€/pedido',
                'total_services' => 0,
                'user_id' => 3, // Luis
            ],
        ];

        foreach ($services as $s) {
            Service::create($s);
        }
    }
}
